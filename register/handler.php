<?php
require_once '../classes/database.php';

class General
{
    public $database;

    public function __construct()
    {
        // $this->database = new Database('enfinkjf_vaayu19', '147852369');
        $this->database = new Database('root', 'root');
    }

    public function registerGeneralFreshersNight(
        $name,
        $email,
        $mobile,
        $events
    ) {
        if (isset($name)) {
            $query = $this->database->run(
                "INSERT INTO tableRegisterGeneralEvent (name, email, mobile, events)
                VALUES (:name, :email, :mobile, :events);",
                [
                    'name' => $name,
                    'email' => $email,
                    'mobile' => $mobile,
                    'events' => $events
                ]
            );
        }
    }

    public function countGeneralEmailEvent(
        $email,
        $events
    ) {
        if (isset($email) && isset($events)) {
            $query = $this->database->run(
                "SELECT COUNT(email) AS countGeneralEmailEvent FROM tableRegisterGeneralEvent WHERE email = :email AND events = :events;",
                [
                    'email' => $email,
                    'events' => $events
                ]
            );
            return json_encode($query->fetch(PDO::FETCH_OBJ));
        }
    }

    public function countGeneralMobileEvent(
        $mobile,
        $events
    ) {
        if (isset($mobile) && isset($events)) {
            $query = $this->database->run(
                "SELECT COUNT(mobile) AS countGeneralMobileEvent FROM tableRegisterGeneralEvent WHERE mobile = :mobile AND events = :events;",
                [
                    'mobile' => $mobile,
                    'events' => $events
                ]
            );
            return json_encode($query->fetch(PDO::FETCH_OBJ));
        }
    }
}

class Utilities
{
    public function sanitiseValidateEmail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        try {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception('Please enter a valid email.');
            }
        } catch (Exception $exception) {
            return FALSE;
        }
        return $email;
    }

    // defaultCountryCode as a string, without +
    public function sanitiseValidateMobile($mobile, $defaultCountryCode)
    {
        $mobile = strval(str_replace('+', '', trim($mobile)));
        try {
            if (strlen($mobile) == 10) {
                $mobile = $defaultCountryCode . $mobile;
            } elseif (strlen($mobile) != 12 || strlen($mobile) != 0) {
                throw new Exception('Please enter a valid mobile.');
            }
        } catch (Exception $exception) {
            return FALSE;
        }
        return $mobile;
    }

    public function sanitiseText($text)
    {
        $text = trim($text);
        return $text;
    }
}

$general = new General;
$utilities = new Utilities;

if ($_POST['request'] == 'general') {
    $response = array();
    $data = array();
    if ($_POST['type'] == 'register') {
        if ($_POST['event'] == 'freshers-night') {
            try {
                $data['name'] = $utilities->sanitiseText($_POST['name']);
                $data['email'] = $utilities->sanitiseValidateEmail($_POST['email']);
                $data['mobile'] = $utilities->sanitiseValidateMobile($_POST['mobile'], '91');
                $data['events'] = $_POST['events'];
                if ($data['email'] == FALSE) {
                    throw new Exception('Please enter a valid email.');
                } elseif ($data['mobile'] == FALSE) {
                    throw new Exception('Please enter a valid mobile.');
                } elseif (json_decode($general->countGeneralEmailEvent($data['email'], $data['events']))->countGeneralEmailEvent > 0) {
                    throw new Exception('This email has already been registered.');
                } elseif (json_decode($general->countGeneralMobileEvent($data['mobile'], $data['events']))->countGeneralMobileEvent > 0) {
                    throw new Exception('This number has already been registered.');
                } else {
                    try {
                        $general->registerGeneralFreshersNight(
                            $data['name'],
                            $data['email'],
                            $data['mobile'],
                            $data['events']
                        );
                        $response['status'] = TRUE;
                        $response['message'] = 'Registered successfully.';
                    } catch (PDOException $exception) {
                        throw $exception;
                    }
                }
                $response['status'] = TRUE;
                $response['message'] = 'Registered successfully.';
            } catch (Exception $exception) {
                $response['status'] = FALSE;
                $response['message'] = $exception;
            }
        }
    }
}
echo json_encode($response);
