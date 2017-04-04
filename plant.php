<?php
class Plant {

    public $type;

    public $isThisGiveFruits;

    public $typeSoil;

    public $water;

    public $sun;

    public $name;


public function __construct ($_type, $_isThisGiveFruits, $_typeSoil, $_water, $_sun, $_name) {
    $this->type = $_type;
    $this->isThisGiveFruits = $_isThisGiveFruits;
    $this->typeSoil = $_typeSoil;
    $this->water = $_water;
    $this->sun = $_sun;
    $this->name = $_name;
    }
}

$peach = new Plant ('fruit tree', true, 'wet soil', 'a lot of water', 'a lot of sun', 'peach');
$almond = new Plant ('fruit tree', true, 'dry soil', 'regular', 'regular', 'almond');
$cherry = new Plant('fruit tree', true, 'regular soil', 'regular', 'a lot of sun', 'almond');
var_dump($peach); exit;