<?php

class Sponsor
{
    public $sponsorName;
    public $sponsorCategory;
    public $sponsorLogo;

    public function __construct($sponsorName, $sponsorCategory, $sponsorLogo)
    {
        $this->sponsorName = $sponsorName;
        $this->sponsorCategory = $sponsorCategory;
        $this->sponsorLogo = $sponsorLogo;
    }
}

abstract class categories
{
    const ilu = 'ILU';
    const general = 'General';
    const massMedia = 'Mass Media';
}
