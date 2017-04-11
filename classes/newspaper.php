<?php
class Newspaper {
    public $name;

    public $type;

    public $dateOfIssue;

    public $theme;

    public $price;

    public function __construct($_name, $_type, $_dateOfIssue, $_theme, $_price)
    {
        $this-> name = $_name;
        $this-> type = $_type;
        $this->dateOfIssue = $_dateOfIssue;
        $this->theme = $_theme;
        $this->price = $_price;
    }
    public function showNewspaperInfo() {
        echo "Name of the newspaper: " . $this->name . "<br/>" ;
        echo"Type: " . $this->type . "<br/>";
        echo "Data of issue: " . $this->dateOfIssue . " <br />";
        echo "Story: " . $this->theme . "<br/>";
        echo "Price: " . $this->price . "<br/>";
    }
}