<?php

class Human {

    protected $name;

    protected $gender;

    protected $eyesColor;

    protected $hairColor;

    protected $height;

    protected $weight;

    /**
     * Human constructor.
     * @param $name
     * @param $gender
     * @param $eyesColor
     * @param $hairColor
     * @param $height
     * @param $weight
     */
    public function __construct($name, $gender, $eyesColor, $hairColor, $height, $weight)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->eyesColor = $eyesColor;
        $this->hairColor = $hairColor;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function getInfo () {
        echo "I am Human being :) <br/>";


    }

}
    class Child extends Human {


        /**
         * Child constructor.
         */
        public function __construct()
        {
            $this->name = "Stefan";
            $this->gender = "male";
            $this->eyesColor = "blue";
            $this->hairColor = "blond";
            $this->height = 92;
            $this->weight = 13;
        }
        public function getInfo()
        {
            echo "Child : " . $this->name . " is " .$this->gender . " with " . $this->eyesColor . " eyes ";
            echo " and " . $this->hairColor . " hair.  Height: " .$this->height." sm  and weight " .$this->weight ." kg. <br/>";


        }
    }

    class Adult extends Human {

        /**
         * Adult constructor.
         */
        public function __construct()
        {
            $this->name = "Katrin";
            $this->gender = "female";
            $this->eyesColor = "brown";
            $this->hairColor = "red";
            $this-> height = 170;
            $this->weight = 69;
        }
        public function getInfo()
        {
            echo "Adult : " . $this->name . " is " .$this->gender . " with " . $this->eyesColor . " eyes ";
            echo " and " . $this->hairColor . " hair.  Height: " .$this->height." sm  and weight " .$this->weight ." kg. <br/>";

        }
}



$newHuman = new Human();
$newHuman->getInfo();

$newChild = new Child();
$newChild->getInfo();

$newAdult = new Adult();
$newAdult->getInfo();