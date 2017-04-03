<?php
class Mutants {

    public $universe;
    public $type;
    public $name;
    public $superpower;
    public $isImmortal;

    public function __construct($_universe, $_type, $_name, $_superpower, $_isImmortal)
    {
        $this->universe = $_universe;
        $this->type = $_type;
        $this->name = $_name;
        $this->superpower = $_superpower;
        $this->isImmortal = $_isImmortal;
    }
}

$Mutant1= new Mutants($_POST['universe'], $_POST['type'], $_POST['name'], $_POST['superpower'], $_POST['isImmortal']);

echo "Universe: " . $Mutant1->universe . "<br/>";
echo "Type: " . $Mutant1->type . "<br/>";
echo "Name: " . $Mutant1->name . "<br/>";
echo "Superpower: " .$Mutant1->superpower . "<br/>";
echo "Is he/she immortal: " .$Mutant1->isImmortal . "<br/>";







