<?php
class Cars {

    public $brand;

    public $model;

    public $YearOfManufacture;

    public $extras;

    public $color;

    public $isTheCarStruck;

    public function __construct($_brand,$_model,$_YearOfManufacture,$_extras, $_color, $_isTheCarStruck)
    {
        $this->brand = $_brand;
        $this->model = $_model;
        $this->YearOfManufacture = $_YearOfManufacture;
        $this->extras = $_extras;
        $this->color = $_color;
        $this->isTheCarStruck = $_isTheCarStruck;

    }
    public function showCarsInfo () {
        echo "You entered a new car to database: <br/>";
        echo "Brand: " .$this->brand . "<br/>";
        echo "Model: " .$this->model . "<br/>";
        echo "Year of manufacture: " . $this->YearOfManufacture . "<br/>";
        echo "Extras: " . $this->extras . "<br/>";
        echo "Color: " .$this->color . "<br/>";
        if ($this->isTheCarStruck == 'yes'){
            ?>  <textarea rows="4" cols="50"> "Describe the damage on the car  </textarea> <br/> <?php
        }
        ?>
        <form action=" " method="post">
        <input type="submit" value="save the car">
        </form>
        <?php
    }
}
$audi = new Cars ($_POST['brand'], $_POST['model'], $_POST['YearOfManufacture'], $_POST['extras'],$_POST['color'],$_POST['isTheCarStruck']);
$audi->showCarsInfo();

