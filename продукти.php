<?php
/**
 * Created by PhpStorm.
 * User: katrinees
 * Date: 01.03.17
 * Time: 10:15
 */
$yoghurt = array(
    "count" => "1",
    "product" => "yoghurt",
    "producer" => "'Bor Chvor'",
     "price" => "1,15"
);

$milk = array(
    "count" => "1",
    "product" => "milk",
    "producer" => "'Verea'",
    "price" => "3,50"
);

$bread = array(
    "count" => "1",
    "product" => "bread",
    "producer" => "'Kaufland'",
    "price" => "0,15"
);

$flat_sausage = array(
    "count" => "100 gramme",
    "product" => "flat sausage",
    "producer" => "'KFM'",
    "price" => "3,00"

);

$meat = array(
    "count" => "1 kilogram",
    "product" => "meat",
    "producer" => "'Riton'",
    "price" => "8,00"
);

$vegetables= array(
    "count" => "1 kilogram",
    "product" => "vegetables",
    "producer" => "'Kaufland'",
    "price" => "2,00"
);

$cheese = array(
    "count" => "1 kilogram",
    "product" => "cheese",
    "producer" => "'Sitovo'",
    "price" => "8,00"
);

$cottage_cheese = array(
    "count" => "1 kilogram",
    "product" => "cottage cheese",
    "producer" => "'Olimpys'",
    "price" => "6,00"
);

$biscuit_creams = array(
    "count" => "4",
    "product" => "biscuit_creams",
    "producer" => "'Nestle'",
    "price" => "6,00"
);

$tea_biscuits = array(
    "count" => "1",
    "product" => "tea biscuits ",
    "producer" => "'Zaharni zavodi'",
    "price" => "2,00"

);

$products = array($yoghurt, $milk, $bread, $flat_sausage, $meat, $vegetables, $cheese, $cottage_cheese, $biscuit_creams, $tea_biscuits);

echo "<ul>";
foreach ($products as $week) {
    echo " <li> " . $week['count'] . "  ". $week['product'] . "   " . $week ['producer']  . "   costs " . $week['price'] ."  leva </li> <br/> ";
};
echo "</ul>";