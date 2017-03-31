<?php
class Newspaper {
    public $name;

    public $type;

    public $dateOfIssue;

    public $theme;

    public $price;

    public function __construct($_name, $_type, $_dataOfIssue, $_theme, $_price)
    {
        $this-> name = $_name;
        $this-> type = $_type;
        $this->dateOfIssue = $_dataOfIssue;
        $this->theme = $_theme;
        $this->price = $_price;
    }
}
$vouge = new Newspaper($_POST['name'], $_POST['type'], $_POST['dateOfIssue'], $_POST['theme'], $_POST['price']);

    echo "Name of the newspaper: " . $vouge->name . "<br/>" ;
    echo"Type: " . $vouge->type . "<br/>";
    echo "Data of issue: " . $vouge->dateOfIssue . " <br />";
    echo "Story: " . $vouge->theme . "<br/>";
    echo "Price: " . $vouge->price . "<br/>";
