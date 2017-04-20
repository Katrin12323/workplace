<?php
require './classes/citizen.php';

$connection = new mysqli('localhost', 'root', 'xaxanepozna', 'workplace');
if ($connection->connect_error) {
    echo "Connection failed " . $connection->connect_error;
    exit;
}
$query = "SELECT * FROM citizen;";
$resultCitizen = mysqli_query($connection, $query);
while ($citizen = $resultCitizen->fetch_assoc()) {
    $citizenObject = new citizen($citizen['firstName'],$citizen['fathersName'], $citizen['lastName'], $citizen['identificationNumber'], $citizen['birthday'], $citizen['homeTown'], $citizen['currentAddress']);
    $citizenObject->showCitizenInfo();
    echo  "</br>";

}
