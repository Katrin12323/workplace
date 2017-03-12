<?php

//Да се добавят още коли по твое усмотрение в масива
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

$sortBy = $_GET['sortBy'];
$sortValue = $_GET['sortValue'];
echo "All cars from " . $sortBy . ": " . $sortValue." <br /> "; // $_GET['brand'] съдържа стойността подадена в адреса на страницата с променливата brand http://cars.php?brand=audi

for ($i=0; $i < count($cars); $i++) {
    if ($cars[$i][$sortBy] == $sortValue) {
        echo "Brand: " . $car['brand'] . "<br />";
        echo "Model: " . $car['model'] . "<br />";
        echo "Year: " . $car['year'] . "<br />";
        echo "Engine: " . $car['engine'] . "<br />";
        echo "Color: " . $car['color'] . "<br />";
        echo "_______________________________________";
    }
}

//В нови фаилове cars-model.php, cars-year.php, cars-engine.php, cars-color.php
//Да се покажат на екрана коли отговарящи на съответно на подадените в адреса на програмата
//параметри
//http://cars-model.php?model=A4 трябва да изкара на екрана всики коли с model A4
//http://cars-year.php?year=2003 трябва да изкара на екрана всики коли произведени през 2003
//http://cars-engine.php?engine=benzin трябва да изкара на екрана всики коли с  бензинови двигатели
//http://cars-color.php?color=black трябва да изкара на екрана всики коли с color black
