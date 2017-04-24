<?php
require './classes/citizen.php';

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
VALUES(' " . $citizen1->getFirstName() . "', ' " . $citizen1->getFathersName() . "', ' " . $citizen1->getLastName() . "', ' " . $citizen1->getIdentificationNumber() . "', ' " . $citizen1->getBirthday() . "', ' " . $citizen1->getHomeTown() . "', ' " . $citizen1->getCurrentAddress () . "');";

mysqli_query($connectionToDatabase, $insertQuery);
mysqli_close ($connectionToDatabase);

