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
}
$citizen1= new Citizen($_POST['firstName'], $_POST['fathersName'], $_POST['lastName'], $_POST['identificationNumber'], $_POST['birthday'], $_POST['homeTown'], $_POST['currentAddress']);

function ShowMeEnteredInformation ($citizen1) {
    echo "You entered the following citizen's information: <br />";
    echo  $citizen1->firstName . " " . $citizen1->fathersName . " " . $citizen1->lastName . " " . $citizen1->identificationNumber . "<br/>";
    echo "Born in: " . $citizen1->homeTown . " on " . $citizen1->birthday . " year with current address " . $citizen1->currentAddress ."<br />";
}



ShowMeEnteredInformation($citizen1);