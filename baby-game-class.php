<?php
class Baby {
    public $quantity;


    public function __construct()
    {
        $this->quantity = rand(100, 1000);



    }
    public function FeedTheBaby ($milk) {
        if ($milk < $this->quantity) {
            echo " <h2> Sorry, you are bad parent, one baby dies of hunger because of you </h2> <br/>"
            ?> <img src="crying_baby.jpg" alt="crying baby" width="300" height="300"> <?php

        } elseif ($milk > 1000) {
            echo "<h2> Blaaaah too much, I will vomit the milk</h2> <br/>"
            ?> <img src="baby_vomiting.jpg" alt="vomiting baby" width="300" height="300"> <?php

        } elseif  ($milk > $this->quantity) {
            echo "<h1>Congratulation, you are good parent </h1> <br/>"
            ?> <img src="happy_baby.jpg" alt="happy baby" width="300" height="300"> <?php
        }
    }
}


$newBaby= new Baby();
$newBaby->FeedTheBaby($_POST['quantity']);




