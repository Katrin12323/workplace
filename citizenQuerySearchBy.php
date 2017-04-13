<?php
require './classes/citizen.php';
$connection = new mysqli('localhost', 'root', 'xaxanepozna', 'workplace');
if ($connection->connect_error) {
    echo "Connection failed" . $connection->connect_error;
    exit;
}
$homeTownInsertByUser = $_POST['homeTown'];
$query = "SELECT * FROM citizen WHERE homeTown = '$homeTownInsertByUser';";
$homeTownResultsByQuery = mysqli_query($connection, $query);

while ($citizen = $homeTownResultsByQuery-> fetch_assoc()) {
        $citizenObject = new Citizen($citizen['firstName'], $citizen['fathersName'], $citizen['lastName'],  $citizen['identificationNumber'],$citizen['birthday'] ,$citizen['homeTown'], $citizen['currentAAddress']);
        $citizenObject->showCitizenInfo();
        echo "<br/>";
}