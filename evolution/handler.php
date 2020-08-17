<?php
require_once '../classes/database.php';

class Evolution
{
    public $database;

    public function __construct()
    {
        $this->database = new Database('root', 'root');
    }
    public function registerIndividual(
        $name,
        $college,
        $email,
        $mobile,
        $events
    ) {
        if (isset($name)) {
            $query = $this->database->run(
                "INSERT INTO tableRegisterIndividualEvolution (name, college, email, mobile, events)
                VALUES (:name, :college, :email, :mobile, :events);",
                [
                    'name' => $name,
                    'college' => $college,
                    'email' => $email,
                    'mobile' => $mobile,
                    'events' => $events
                ]
            );
        }
    }

    public function countIndividualEmail(
        $email
    ) {
        if (isset($email)) {
            $query = $this->database->run(
                "SELECT COUNT(email) AS countIndividualEmail FROM tableRegisterIndividualEvolution WHERE email = :email;",
                [
                    'email' => $email
                ]
            );
            return json_encode($query->fetch(PDO::FETCH_OBJ));
        }
    }

    public function countIndividualMobile(
        $mobile
    ) {
        if (isset($mobile)) {
            $query = $this->database->run(
                "SELECT COUNT(mobile) AS countIndividualMobile FROM tableRegisterIndividualEvolution WHERE mobile = :mobile;",
                [
                    'mobile' => $mobile
                ]
            );
            return json_encode($query->fetch(PDO::FETCH_OBJ));
        }
    }

    public function registerTeam(
        $name,
        $college,
        $email,
        $mobile,
        $event,
        $teamMembersName,
        $teamMembersMobile
    ) {
        if (isset($name)) {
            $query = $this->database->run(
                "INSERT INTO tableRegisterTeamEvolution (name, college, email, mobile, event, teamMembersName, teamMembersMobile)
                VALUES (:name, :college, :email, :mobile, :event, :teamMembersName, :teamMembersMobile);",
                [
                    'name' => $name,
                    'college' => $college,
                    'email' => $email,
                    'mobile' => $mobile,
                    'event' => $event,
                    'teamMembersName' => $teamMembersName,
                    'teamMembersMobile' => $teamMembersMobile
                ]
            );
        }
    }

    public function countTeamEmailEvent(
        $email,
        $event
    ) {
        if (isset($email) && isset($event)) {
            $query = $this->database->run(
                "SELECT COUNT(email) AS countTeamEmailEvent FROM tableRegisterTeamEvolution WHERE email = :email AND event = :event;",
                [
                    'email' => $email,
                    'event' => $event
                ]
            );
            return json_encode($query->fetch(PDO::FETCH_OBJ));
        }
    }

    public function countTeamMobileEvent(
        $mobile,
        $event
    ) {
        if (isset($mobile) && isset($event)) {
            $query = $this->database->run(
                "SELECT COUNT(mobile) AS countTeamMobileEvent FROM tableRegisterTeamEvolution WHERE mobile = :mobile AND event = :event;",
                [
                    'mobile' => $mobile,
                    'event' => $event
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
            } elseif (strlen($mobile) != 12) {
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

$evolution = new Evolution;
$utilities = new Utilities;

if ($_POST['request'] == 'evolution') {
    $response = array();
    $data = array();
    if ($_POST['type'] == 'register') {
        if ($_POST['eventType'] == 'individual') {
            try {
                $data['name'] = $utilities->sanitiseText($_POST['name']);
                $data['college'] = $utilities->sanitiseText($_POST['college']);
                $data['email'] = $utilities->sanitiseValidateEmail($_POST['email']);
                $data['mobile'] = $utilities->sanitiseValidateMobile($_POST['mobile'], '91');
                $data['events'] = '';
                foreach ($_POST['events'] as $event) {
                    $data['events'] = $event . ',' . $data['events'];
                };
                if ($data['email'] == FALSE) {
                    throw new Exception('Please enter a valid email.');
                } elseif ($data['mobile'] == FALSE) {
                    throw new Exception('Please enter a valid mobile.');
                } elseif (json_decode($evolution->countIndividualEmail($data['email']))->countIndividualEmail > 0) {
                    throw new Exception('This email has already been registered.');
                } elseif (json_decode($evolution->countIndividualMobile($data['mobile']))->countIndividualMobile > 0) {
                    throw new Exception('This number has already been registered.');
                } else {
                    try {
                        $evolution->registerIndividual(
                            $data['name'],
                            $data['college'],
                            $data['email'],
                            $data['mobile'],
                            $data['events'],
                        );
                        $response['status'] = TRUE;
                        $response['message'] = 'Registered successfully.';
                    } catch (PDOException $exception) {
                        throw 'Sorry, there was an error: [' . $exception . '].';
                    }
                }
                $response['status'] = TRUE;
                $response['message'] = 'Registered successfully';
            } catch (Exception $exception) {
                $response['status'] = FALSE;
                $response['message'] = 'Sorry, there was an error: [' . $exception . '].';
            }
        } elseif ($_POST['eventType'] == 'team') {
            try {
                $data['name'] = $utilities->sanitiseText($_POST['name']);
                $data['college'] = $utilities->sanitiseText($_POST['college']);
                $data['email'] = $utilities->sanitiseValidateEmail($_POST['email']);
                $data['mobile'] = $utilities->sanitiseValidateMobile($_POST['mobile'], '91');
                $data['event'] = $_POST['event'];
                $data['teamMemberNames'] = '';
                foreach ($_POST['team-member-name'] as $teamMemberName) {
                    $currentTeamMemberName = $utilities->sanitiseText($teamMemberName);
                    $data['teamMemberNames'] = $currentTeamMemberName . ',' . $data['teamMemberNames'];
                };
                $data['teamMemberMobiles'] = '';
                foreach ($_POST['team-member-mobile'] as $teamMemberMobile) {
                    $currentTeamMemberMobile = $utilities->sanitiseText($teamMemberMobile);
                    if ($currentTeamMemberMobile == FALSE) {
                        throw new Exception('Please enter a valid mobile: [' . $teamMemberMobile . '].');
                    } else {
                        $data['teamMemberMobiles'] = $currentTeamMemberMobile . ',' . $data['teamMemberMobiles'];
                    }
                };
                if ($data['email'] == FALSE) {
                    throw new Exception('Please enter a valid email.');
                } elseif ($data['mobile'] == FALSE) {
                    throw new Exception('Please enter a valid mobile.');
                } elseif (json_decode($evolution->countTeamEmailEvent($data['email'], $data['event']))->countTeamEmailEvent > 0) {
                    throw new Exception('This email has already been registered with this event.');
                } elseif (json_decode($evolution->countTeamMobileEvent($data['mobile'], $data['event']))->countTeamMobileEvent > 0) {
                    throw new Exception('This number has already been registered with this event.');
                } else {
                    try {
                        $evolution->registerTeam(
                            $data['name'],
                            $data['college'],
                            $data['email'],
                            $data['mobile'],
                            $data['event'],
                            $data['teamMemberNames'],
                            $data['teamMemberMobiles']
                        );
                        $response['status'] = TRUE;
                        $response['message'] = 'Registered successfully.';
                    } catch (PDOException $exception) {
                        throw 'Sorry, there was an error: [' . $exception . '].';
                    }
                }
                $response['status'] = TRUE;
                $response['message'] = 'Registered successfully';
            } catch (Exception $exception) {
                $response['status'] = FALSE;
                $response['message'] = 'Sorry, there was an error: [' . $exception . '].';
            }
        }
    }
}
echo json_encode($response);
