<?php

class UserEvolution
{
    public $userId;
    public $userName;
    public $userEmail;
    public $userMobile;
    public $userCollege;
    public $userMask;

    public function __construct($userId, $userName, $userEmail, $userMobile, $userCollege, $userMask)
    {
        $this->userId = $userId;
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->userMobile = $userMobile;
        $this->userCollege = $userCollege;
        $this->userMask = $userMask;
    }
}

abstract class eventType
{
    const individual = 1;
    const team = 2;
}
