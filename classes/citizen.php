<?php
class Citizen {

    public $firstName;

    public $fathersName;

    public $lastName;

    public $identificationNumber;

    public $birthday;

    public $homeTown;

    public $currentAddress;

    public function __construct($_firstName,$_fathersName,$_lastName,$_identificationNumber,$_birthday,$_homeTown,$_currentAddress)
    {
        $this->firstName = $_firstName;
        $this->fathersName = $_fathersName;
        $this->lastName = $_lastName;
        $this->identificationNumber = $_identificationNumber;
        $this->birthday = $_birthday;
        $this->homeTown = $_homeTown;
        $this->currentAddress = $_currentAddress;
    }
    public function showCitizenInfo ()
    {
        echo "You entered the following citizen's information: <br />";
        echo  $this->firstName . " " . $this->fathersName . " " . $this->lastName . " " . $this->identificationNumber . "<br/>";
        echo "Born in: " . $this->homeTown . " on " . $this->birthday . " year with current address " . $this->currentAddress ."<br />";
    }

}
