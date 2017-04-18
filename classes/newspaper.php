<?php
class Newspaper {
    public $name;

    public $kind;

    public $dateOfIssue;

    public $theme;

    public $price;

    public function __construct($_name, $_kind, $_dateOfIssue, $_theme, $_price)
    {
        $this-> name = $_name;
        $this-> kind = $_kind;
        $this->dateOfIssue = $_dateOfIssue;
        $this->theme = $_theme;
        $this->price = $_price;
    }
    public function showNewspaperInfo() {
        echo "Name of the newspaper: " . $this->name . "<br/>" ;
        echo"Type: " . $this->kind . "<br/>";
        echo "Data of issue: " . $this->dateOfIssue . " <br />";
        echo "Story: " . $this->theme . "<br/>";
        echo "Price: " . $this->price . "<br/>";
    }
}