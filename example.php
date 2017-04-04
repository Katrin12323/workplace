<?php

$brands = array(
    array('name' => 'Coco Chanel', 'founded' =>"1920"),
    array('name' => 'Karl Lagerfeld', 'founded' =>'1992'),
    array('name' =>  'Elie Saab', 'founded' => '1982')
);
echo "<h1> These are my favourite labels : </h1>";
echo "<ul>";

foreach ($brands as $favourite) {

    echo " <li> " . $favourite['name'] . " founded in ". $favourite['founded'] ." :) </li> </br> ";

};
    echo "</ul>";

    $animals = array(
      array('kind' => 'pinguin', 'lives' => ' in Antarctica'),
      array('kind' => 'cat', 'lives' => 'at the street'),
      array('kind' => 'dog', 'lives' => 'at the bus stop')
    );
    echo  " <h1> Where are the animals ? </h1>";
    echo "<ul>" ;
    foreach ($animals as $where) {

      echo " <li> The " . $where['kind'] . " lives " . $where['lives'] ."  </li> </br> ";
    };
    echo "</ul>";