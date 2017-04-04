<?php

class Child {
    public $firstName;
    public $lastName;
    public $age;
}

$stefan = new Child();
$stefan->firstName = "Stefan";
$stefan->lastName = "Kabakov";

$ypoana = new Child();


echo "Firtname: " . $stefan->firstName . "<br />";
echo "Lastname: " . $stefan->lastName . "<br />";
echo "Age: " . $stefan->age . "<br />";
