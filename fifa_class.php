<?php
class GoalKeeper {
    public $jumpDirection;

    public function __construct()
    {
        $this->jumpDirection = rand(0, 3);

        if ($this->jumpDirection == 0) {
            $this->jumpDirection = "upperLeft";
        } elseif ($this->jumpDirection == 1){
            $this->jumpDirection = "upperRight";
        } elseif ($this->jumpDirection == 2) {
            $this->jumpDirection = "downLeft";
        } elseif ($this->jumpDirection == 3) {
            $this->jumpDirection = "downRight";
        }
    }
    public function Strike ($jumpPosition) {
        if ($jumpPosition == $this->jumpDirection) {
            ?> <img src="ronaldo_crying.jpg" alt="crying" width="700" height="500"> <?php
        }
        else {
            ?> <img src="happy_ronaldo.jpg" alt="happy" width="490" height="314"> <?php
        }
    }
}

$newGoalKeeper = new GoalKeeper();
$newGoalKeeper->Strike($_POST['jumpPosition']);
var_dump($_POST['jumpPosition']);