<?php
/**
 * Created by PhpStorm.
 * User: katrinees
 * Date: 06.03.17
 * Time: 12:44
 */
$clothes = array (
    array('brand' => " 'Chanel' ", 'type' => 'T-shirt', 'size' => 'S/M/L' ,'price' => 50),
    array('brand' => "'Chanel'", 'type' => 'T-shirt', 'size' => 'S/M/L' ,'price' => 75),
    array('brand' => "'Chanel'", 'type' => 'T-shirt', 'size' => 'S/M/L' ,'price' => 53),
    array('brand' => "'Chanel'", 'type' => 'Hat', 'size' => 'Onesize' ,'price' => 40),
    array('brand' => "'Chanel'", 'type' => 'Hat', 'size' => 'Onesize' ,'price' => 67),
    array('brand' => "'Chanel'", 'type' => 'Hat', 'size' => 'Onesize' ,'price' => 80),
    array('brand' => "'Chanel'", 'type' => 'Jeans', 'size' => 'S/M/L' ,'price' => 150),
    array('brand' => "'Chanel'", 'type' => 'Jeans', 'size' => 'S/M/L' ,'price' => 109),
    array('brand' => "'Chanel'", 'type' => 'Jeans', 'size' => 'S/M/L' ,'price' => 99),
    array('brand' => "'Chanel'", 'type' => 'Dress', 'size' => 'S/M/L' ,'price' => 250),
    array('brand' => "'Chanel'", 'type' => 'Dress', 'size' => 'S/M/L' ,'price' => 43),
    array('brand' => "'Chanel'", 'type' => 'Dress', 'size' => 'S/M/L' ,'price' => 134),
    array('brand' => "'Chanel'", 'type' => 'Skirt', 'size' => 'S/M/L' ,'price' => 67),
    array('brand' => "'Chanel'", 'type' => 'Skirt', 'size' => 'S/M/L' ,'price' => 86),
    array('brand' => "'Chanel'", 'type' => 'Skirt', 'size' => 'S/M/L' ,'price' => 58),
    array('brand' => "'Chanel'", 'type' => 'Swimwear', 'size' => 'S/M/L' ,'price' => 124),
    array('brand' => "'Chanel'", 'type' => 'Swimwear', 'size' => 'S/M/L' ,'price' => 58),
    array('brand' => "'Chanel'", 'type' => 'Swimwear', 'size' => 'S/M/L' ,'price' => 87),

);
echo "All clothes under " . $_GET['priceUnder'] . " <br /> ";

foreach ($clothes as $cloth) {
    if ($cloth['price'] < $_GET['priceUnder'] ) {
        echo " " . $cloth['type'] ." ";
        echo " by " . $cloth['brand'] . " ";
        echo ", available size: " . $cloth['size'] . " ";
        echo ", price:" . $cloth['price'] . " $ <br /> ";
    }

}