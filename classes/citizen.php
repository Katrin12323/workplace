<?php
class Citizen {

    private $firstName;

    private $fathersName;

    private $lastName;

    private $identificationNumber;

    private $birthday;

    private $homeTown;

    private $currentAddress;

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

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getFathersName()
    {
        return $this->fathersName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getIdentificationNumber()
    {
        return $this->identificationNumber;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return mixed
     */
    public function getHomeTown()
    {
        return $this->homeTown;
    }

    /**
     * @return mixed
     */
    public function getCurrentAddress()
    {
        return $this->currentAddress;
    }


}
