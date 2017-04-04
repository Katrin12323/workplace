<?php
/**
 * Created by PhpStorm.
 * User: katrinees
 * Date: 09.03.2017
 * Time: 10:04
 */
$monthly = array(
    array('month' => "January", 'electricity' => 250, 'water' => 20, 'food' => 320, 'entertainment' => 200),
    array('month' => "February", 'electricity' => 200, 'water' => 30, 'food' => 320, 'entertainment' => 200),
    array('month' => "March", 'electricity' => 150, 'water' => 30, 'food' => 320, 'entertainment' => 200),
    array('month' => "April", 'electricity' => 100, 'water' => 30, 'food' => 320, 'entertainment' => 200),
    array('month' => "May", 'electricity' => 80, 'water' => 30, 'food' => 320, 'entertainment' => 200),
    array('month' => "June", 'electricity' => 90, 'water' => 30, 'food' => 320, 'entertainment' => 400),
    array('month' => "July", 'electricity' => 100, 'water' => 30, 'food' => 320, 'entertainment' => 200),
    array('month' => "August", 'electricity' => 100, 'water' => 30, 'food' => 320, 'entertainment' => 200),
    array('month' => "September", 'electricity' => 150, 'water' => 30, 'food' => 320, 'entertainment' => 200),
    array('month' => "October", 'electricity' => 200, 'water' => 30, 'food' => 320, 'entertainment' => 200),
    array('month' => "November", 'electricity' => 150, 'water' => 30, 'food' => 320, 'entertainment' => 200),
    array('month' => "December", 'electricity' => 200, 'water' => 30, 'food' => 320, 'entertainment' => 400),
);


foreach ($monthly as $expenses) {
    if ($expenses['month'] == $_GET['month']) {
        $total = $expenses['electricity'] + $expenses['water'] + $expenses ['food'] + $expenses ['entertainment'];
        echo "Monthly expenses for " . $expenses['month'] . "  are: <br /> for electricity: " . $expenses['electricity'] . " $ <br />  for water:" . $expenses['water'] . " $ <br />  for food: " . $expenses['food'] . " $ <br />  for entertainment: " . $expenses['entertainment'] . " $ <br /> __________________________ <br />  Total: " . $total . " $ " ;

    }
}