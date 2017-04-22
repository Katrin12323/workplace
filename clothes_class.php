<?php
class Brands {
    public $brand;
    public $yearOfCreation;
    public $owner;
    public $countryOfCreation;

    public function __construct($_brand, $_yearOfCreation, $_owner, $_countryOfCreation)
    {
        $this->brand = $_brand;
        $this->yearOfCreation = $_yearOfCreation;
        $this->owner = $_owner;
        $this->countryOfCreation = $_countryOfCreation;
    }

    public function showClothesInfo ()
    {
        echo "You add new brand info: " . $this->brand . " creation's year " .$this->yearOfCreation . " in " . $this->countryOfCreation . ". The owner is: " . $this->owner ."</br>";
    }
}

$newBrand = new Brands($_POST['brand'], $_POST['yearOfCreation'], $_POST['owner'], $_POST['countryOfCreation']);

$connection = new mysqli("localhost", "root", "xaxanepozna", "workplace");


if ($connection->connect_error) {
    echo "Connection failed : " . $connection->connect_error;
} else {
    echo "Connection successfully";
}

$query = "  INSERT INTO  clothes (brand, yearOfCreation, owner, countryOfCreation)
  VALUE ('$newBrand->brand', '$newBrand->yearOfCreation', '$newBrand->owner', '$newBrand->countryOfCreation');";

mysqli_query($connection, $query);
mysqli_close ($connection);