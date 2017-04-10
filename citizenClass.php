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
$citizen1= new Citizen($_POST['firstName'], $_POST['fathersName'], $_POST['lastName'], $_POST['identificationNumber'], $_POST['birthday'], $_POST['homeTown'], $_POST['currentAddress']);
$citizen1->showCitizenInfo();

/* От тук надоло е кода за връзка с базата данни и записване на данните от обекта в таблизата citizen*/

// Creating connection to database
$connectionToDatabase = new mysqli('localhost', 'root', 'xaxanepozna', 'workplace');

// Checking if  connection to database is established
if ($connectionToDatabase->connect_error) {
    echo "Connection failed: " . $connectionToDatabase->connect_error;
    exit;
} else {
    echo "Connected successfully";
}

                                    /*това са имената на колоните от таблицата*/
$insertQuery = "INSERT INTO citizen (firstName, fathersName, lastName, identificationNumber, birthday, homeTown, currentAddress)
VALUES('$citizen1->firstName', '$citizen1->fathersName', '$citizen1->lastName', '$citizen1->identificationNumber', '$citizen1->birthday', '$citizen1->homeTown', '$citizen1->currentAddress');";

mysqli_query($connectionToDatabase, $insertQuery);
mysqli_close ($connectionToDatabase);

