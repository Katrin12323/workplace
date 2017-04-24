<?php

class Animal
{
    protected $name;
    protected $isPredator;
    protected $territory;

    public function __construct($_name, $_isPredator, $_territory)
    {
        $this->name = $_name;
        $this->isPredator = $_isPredator;
        $this->territory = $_territory;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getIsPredator()
    {
        return $this->isPredator;
    }

    /**
     * @return mixed
     */
    public function getTerritory()
    {
        return $this->territory;
    }

}

class Lion extends Animal
{
    public function __construct()
    {
        $this->name = "Lion";
        $this->isPredator = true;
        $this->territory = "Africa";
    }

}

$lion = new Lion();
var_dump($lion->getIsPredator());