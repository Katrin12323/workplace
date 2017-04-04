<?php
/**
 * Created by PhpStorm.
 * User: katrinees
 * Date: 06.03.17
 * Time: 12:11
 */

$cars = array(
    array('brand' => 'audi', 'model' => 'A4', 'year' => 2003, 'engine' => 'disel', 'color' => 'black'),
    array('brand' => 'audi', 'model' => 'A3', 'year' => 2007, 'engine' => 'disel', 'color' => 'grey'),
    array('brand' => 'bmw', 'model' => '318i', 'year' => 2002, 'engine' => 'benzin', 'color' => 'red'),
    array('brand' => 'trabant', 'model' => '615', 'year' => 1984, 'engine' => 'benzin', 'color' => 'yellow'),
    array('brand' => 'mercedess', 'model' => 'E270', 'year' => 2007, 'engine' => 'disel', 'color' => 'white'),
    array('brand' => 'audi', 'model' => 'TT', 'year' => 2008, 'engine' => 'benzin', 'color' => 'black'),
    array('brand' => 'Porche', 'model' =>'Cayen', 'year' => 2010, 'engine' => 'disel', 'color' => 'black'),
    array('brand' => 'Mitsubishi', 'model' =>'Cold', 'year' => 2005, 'engine' => 'disel', 'color' => 'green'),
    array('brand' => 'Alfa Romeo', 'model' =>'Bullshit', 'year' => 2010, 'engine' => 'benzin', 'color' => 'grey'),
    array('brand' => 'Peugeot', 'model' =>'202', 'year' => 2002, 'engine' => 'disel', 'color' => 'pink'),
    array('brand' => 'Opel', 'model' =>'Astra', 'year' => 1999, 'engine' => 'benzin', 'color' => 'red'),
    array('brand' => 'Opel', 'model' =>'Corsa', 'year' => 2003, 'engine' => 'benzin', 'color' => 'white'),
);
echo "All cars  manufactured in " . $_GET ['year'] . " <br /> ";
foreach ($cars as $car) {
    if ($car['year'] == $_GET['year']) {

        echo "Brand: " . $car['brand'] . "<br />";
        echo "Model: " . $car['model'] . "<br />";
        echo "Year: " . $car['year'] . "<br />";
        echo "Engine: " . $car['engine'] . "<br />";
        echo "Color: " . $car['color'] . "<br />";
        echo " _______________________________________ <br />";
    }
}


//http://cars-year.php?year=2003 трябва да изкара на екрана всики коли произведени през 2003