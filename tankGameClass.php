<?php
class Tank {
    public $direction;

    public function __construct()
    {
        $this->direction = rand(200, 1000);

        if ($this->direction > 500) {
           $this->direction = "left";
        } else {
            $this->direction = "right";
        }

    }
    public function DirectionOfGunfire ($position) {

        if ($position == $this->direction) {
            echo "You've been bombed <br/>"; ?> <img src="tank_bomb.jpg" alt="bomb" width="500" height="500"> <?php
        }
        else {
            echo "The tank missed you <br/>"; ?> <img src="survive.jpg" alt="survive" width="400" height="400"> <?php
        }

    }
}

$newTank = new Tank ();
$newTank->DirectionOfGunfire($_POST['position']);

