<?php
class Newspaper {
    private $name;

    private $kind;

    private $dateOfIssue;

    private $theme;

    private $price;

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
    public function getName () {
        return $this->name;
    }
    public function getKind () {
        return $this->kind;
    }
    public function getDateOfIssue () {
        return $this->dateOfIssue;
    }
    public function getTheme () {
        return $this->theme;
    }
    public function getPrice () {
        return $this->price;
    }
}