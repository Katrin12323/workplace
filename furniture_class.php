<?php

class Furniture {

    public $type;

    public $subtype;

    public $seatCount;

    public $material;

    public $damask;

    public $color;

    public $price;

    public function __construct($_type, $_subtype, $_seatCount, $_material, $_damask, $_color, $_price){
        $this->type = $_type;
        $this->subtype = $_subtype;
        $this->seatCount = $_seatCount;
        $this->material = $_material;
        $this->damask = $_damask;
        $this->color = $_color;
        $this->price =$_price;
    }
}

$sofa = new Furniture('sofa','corner sofa', '6 seats', 'oak', 'velvet', 'grey', '1200 leva');
$chair = new Furniture('chair', 'chair for living room', '1 seat', 'maple', 'velvet', 'green - grey', '139 leva');
$table = new Furniture('table', 'table for kitchen', '6 seats', 'oak', 'with out damask', 'light brown', '300 leva');

var_dump($sofa); exit;