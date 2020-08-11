<?php

class Department
{
    public $departmentId;
    public $departmentSlug;
    public $departmentName;
    public $departmentDescription;
    public $departmentVertical;
    public $departmentGraphic;
    public $departmentHeadName;
    public $departmentHeadMobile;
    public $departmentHeadEmail;
    public $departmentHeadImage;

    public function __construct($departmentId, $departmentSlug, $departmentName, $departmentDescription, $departmentVertical, $departmentGraphic, $departmentHeadName, $departmentHeadMobile, $departmentHeadEmail, $departmentHeadImage)
    {
        $this->departmentId = $departmentId;
        $this->departmentSlug = $departmentSlug;
        $this->departmentName = $departmentName;
        $this->departmentDescription = $departmentDescription;
        $this->departmentVertical = $departmentVertical;
        $this->departmentGraphic = $departmentGraphic;
        $this->departmentHeadName = $departmentHeadName;
        $this->departmentHeadMobile = $departmentHeadMobile;
        $this->departmentHeadEmail = $departmentHeadEmail;
        $this->departmentHeadImage = $departmentHeadImage;
    }
}

abstract class verticals
{
    const adminOne = 'Admin 1';
    const adminTwo = 'Admin 2';
    const eventsOne = 'Events 1';
    const eventsTwo = 'Events 2';
}
