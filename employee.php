<?php
/**
 * Created by PhpStorm.
 * User: katrinees
 * Date: 01.03.17
 * Time: 09:39
 */
$employee_spas = array (
    "f_name" => "Spas",
    "l_name" => "Shopov",
    "age" => "28",
    "salary" => "1800"
);
$employee_atanas = array(
    "f_name" => "Atanas",
    "l_name" => "Chobanov",
    "age" => "30",
    "salary" => "899");

$employee_stefan = array(
    "f_name" => "Stefan",
    "l_name" => "Bofirov",
    "age" => "30",
    "salary" => "2000"
);

$employee_martin = array(
    "f_name" => "Martin",
    "l_name" => "Kafadarov",
    "age" => "30",
    "salary" => "1987"
);

$employee_Stefcho = array(
    "f_name" => "Stefan",
    "l_name" => "Stefanov",
    "age" => "28",
    "salary" => "1765"
);
$all_employee = array($employee_spas, $employee_atanas, $employee_stefan, $employee_martin, $employee_Stefcho);

    echo " <ol>";
foreach ($all_employee as $one_employee) {

    echo  "<li>" . "The employee -  " .  $one_employee['f_name'] . "  " . $one_employee['l_name'] ." is " . $one_employee['age'] . " years old and  his salary is ".$one_employee['salary'] . " leva  </li> <br/> ";
};
    echo "</ol>";