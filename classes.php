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

    public function eat() {
        echo $this->name . " is eating <br/>";
    }
}

$lion = new Animal('mammal', '4', true, array('antilops', 'minzuhars'), 'Lion');
$rabbit = new Animal('mammal', '4', false, array('tree', 'minzuhars'), 'Rabit');
$frog = new Animal('rapteiil', '4', true, array('flies', 'bugs'), 'Frog');

$lion->eat();
$rabbit->eat();
$frog->eat();
var_dump($lion);