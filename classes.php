<?php

class Animal {

    public $type;

    public $legsCount;

    public $isPredator;

    public $food;

    public $name;

    public function __construct($_type, $_legsCount, $_isPredator, $_food, $_name) {
        $this->type = $_type;
        $this->legsCount = $_legsCount;
        $this->isPredator = $_isPredator;
        $this->food = $_food;
        $this->name = $_name;
    }

    public function eat($whatsForDiner) {
        echo $this->name . " is eating " . $whatsForDiner. "<br/>";
    }
}

$lion = new Animal('mammal', '4', true, array('antilops', 'minzuhars'), 'Lion');
$rabbit = new Animal('mammal', '4', false, array('tree', 'minzuhars'), 'Rabit');
$frog = new Animal('reptail', '4', true, array('flies', 'bugs'), 'Frog');

$lion->eat("Zebra");
$rabbit->eat("Grass");
$frog->eat("Fly");

file_put_contents('lions.txt', serialize($lion));
$lion2 = unserialize(file_get_contents('lions.txt'));

var_dump($lion);
echo "<br />";
var_dump($lion2);