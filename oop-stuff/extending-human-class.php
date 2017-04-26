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
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getEyesColor()
    {
        return $this->eyesColor;
    }

    /**
     * @return mixed
     */
    public function getHairColor()
    {
        return $this->hairColor;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }


    public function getInfo () {
        echo "I am Human being :) <br/>";


    }

    public function hug(Human $humanToBeHugged) {
        echo "I am hugging " . $humanToBeHugged->getName();
    }

    public function walk($meters)
    {
        echo "<br />I walked " . $meters . " metres";
    }

    public function jump($height)
    {
        echo "<br />I jumped " . $height . " metres high";
    }

    public function fightWith(Human $humanToBeFought)
    {
        echo "<br />I am fighting with " . $humanToBeFought->getName();
    }

    public function talk(Human $talkTo)
    {
        echo "<br /> I am talking to " . $talkTo->getName();
    }

    public function makeupWith($kindOfMakeup) {
        echo "<br/>I make my makeup with " . $kindOfMakeup . " at this moment";
    }

    public function watching($whatsWatching) {
        echo "<br/>" .$this->getName() . " is watching " . $whatsWatching . " this morning";
    }

    public function love(Human $humanToBeLoved, $howMuch) {
        echo "<br/>" . $this->getName() . " loves " . $humanToBeLoved->getName() . $howMuch . "!" ;
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
            echo "Child : "  . $this->getName() . " is " .$this->getGender() . " with " . $this->getEyesColor() . " eyes ";
            echo " and " . $this->getHairColor() . " hair.  Height: " .$this->getHeight()." sm  and weight " .$this->getWeight () ." kg. <br/>";
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
            echo "Adult : "  . $this->getName() . " is " .$this->getGender() . " with " . $this->getEyesColor() . " eyes ";
            echo " and " . $this->getHairColor() . " hair.  Height: " .$this->getHeight()." sm  and weight " .$this->getWeight () ." kg. <br/>";

        }
}



$Spas = new Human("Spas", "male", "blue", "brown", "190", "80");
$Spas->getInfo();

$newChild = new Child();
$newChild->getInfo();

$newAdult = new Adult();
$newAdult->getInfo();

$newChild->hug($newAdult);
$newChild->walk(20);
$newChild->jump(20);
$newChild->fightWith($newAdult);
$newAdult->fightWith($newChild);
$newAdult->talk($newChild);
$newAdult->makeupWith(foundation);
$newAdult->watching("'Coffee with Galla'");
$newAdult->love($Spas, " soooooo much");