<?php
function ShowMeTheList ($gender) {
    $men = array(
        array('firstName' =>'Dragan', 'lastName' => 'Cankov', 'age' => 28),
        array('firstName' =>'Petyr', 'lastName' => 'Dynov', 'age' => 48),
        array('firstName' =>'Ivan', 'lastName' => 'Petkov', 'age' => 30),
        array('firstName' =>'Georgi', 'lastName' => 'Dermendjiev', 'age' => 27),
        array('firstName' =>'Aleksandyr', 'lastName' => 'Mishev', 'age' => 32),
        array('firstName' =>'Martin', 'lastName' => 'Kamenov', 'age' => 46),
        array('firstName' =>'Stefan', 'lastName' => 'Klisarov', 'age' => 37),
        array('firstName' =>'Angel', 'lastName' => 'Stoikov', 'age' => 34),
        array('firstName' =>'Rangel', 'lastName' => 'Simeonov', 'age' => 28),
    );
    $women = array(
        array('firstName' =>'Ivana', 'lastName' => 'Kirilova', 'age' => 38),
        array('firstName' =>'Petq', 'lastName' => 'Stoqnova', 'age' => 28),
        array('firstName' =>'Katq', 'lastName' => 'Tankova', 'age' => 30),
        array('firstName' =>'Mariq', 'lastName' => 'Budeva', 'age' => 27),
        array('firstName' =>'Nelina', 'lastName' => 'Kitrova', 'age' => 32),
        array('firstName' =>'Anna', 'lastName' => 'Petkova', 'age' => 46),
        array('firstName' =>'Tatqna', 'lastName' => 'Kirchova', 'age' => 37),
        array('firstName' =>'Elena', 'lastName' => 'Bogdanova', 'age' => 34),
        array('firstName' =>'Rustislava', 'lastName' => 'Ginova', 'age' => 28),
    );

    if ($gender == 'woman') {
        foreach ($men as $menoflists) {
            echo $menoflists['firstName'] . " ".  $menoflists['lastName'] . " " . $menoflists['age'] . "<br/>";
        }
    } elseif ($gender == 'man') {
        foreach ($women as $womenoflists) {
            echo $womenoflists['firstName'] . " " . $womenoflists['lastName'] . " " . $womenoflists['age'] . "<br/>";
        }
    }

}

function Salute($firstName, $lastName_) {
    echo "Hello " .$firstName . " " . $lastName_ . "<br/>";
}

function TextWhichWillShowAfterSelectedGender() {

    if ($_POST['gender'] == 'woman') {

        echo   "Here is a list of men for you:  <br/>";
        ShowMeTheList($_POST['gender'] );

    } elseif ($_POST['gender'] == 'man') {

        echo  "Here is a list of women for you:  <br/>";
        ShowMeTheList($_POST['gender'] );
    }
}