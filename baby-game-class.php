<?php
class Baby {
    public $quantity;

    public function __construct()
    {
        $this->quantity = rand(250, 800);

    }
    public function FeedTheBaby ($milk) {
        if ($this->quantity < $milk) {
            echo " <h2> Sorry, you are bad parent, one baby dies of hunger because of you </h2> <br/>"
            ?> <img src="crying_baby.jpg" alt="crying baby" width="300" height="300"> <?php
        }
        elseif ( $this->quantity > $milk) {
            echo "<h1>Congratulation, you are good parent </h1> <br/>"
            ?> <img src="happy_baby.jpg" alt="happy baby" width="300" height="300"> <?php
        }
    }
}
$newBaby= new Baby();
$newBaby->FeedTheBaby($_POST['quantity']);



