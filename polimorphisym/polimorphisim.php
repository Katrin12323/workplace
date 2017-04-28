<?php

class ElectricalUtility
{
    protected $consumation;

    /**
     * ElectricalUtility constructor.
     * @param $consumation
     */
    public function __construct($consumation)
    {
        $this->consumation = $consumation;
    }

    public function turnOn($time)
    {
        echo "This utility is ON";
    }

    protected function calculateConsumption($time)
    {
        echo "The CONSUMPTION will be: " . $time * $this->consumation . "WATS for " . $time . " hours";
    }
}

class Tv extends ElectricalUtility
{
    public function turnOn($time)
    {
        echo "TV is on. There is your favorite tv series going on <br/>";
        $this->calculateConsumption($time);
    }
}

class CoffeeMachine extends ElectricalUtility
{
    public function turnOn($time)
    {
        echo "Making coffee <br/>";
        $this->calculateConsumption($time);
    }
}

class IronCenter extends ElectricalUtility
{
    public function turnOn($time)
    {
        echo "I'm starving clothes <br/>";
        $this->calculateConsumption($time);
    }
}

if ($_POST['utility'] == 'tv')
{
    $utility = new Tv(60);
}
elseif ($_POST['utility'] == 'coffee')
{
    $utility = new CoffeeMachine(1500);
}
elseif ($_POST['utility'] == 'ironCenter')
{
    $utility = new IronCenter(3000);
}


$utility->turnOn($_POST['time']);