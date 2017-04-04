<?php
/**
 * Created by PhpStorm.
 * User: katrinees
 * Date: 01.03.17
 * Time: 11:11
 */
$student_ivan = array(
    "fname" => "Ivan",
    "lname" => "Ivanov",
    "rating_success" => "3",
    "rating_discipline" => "5"
);
$student_petyr = array(
    "fname" => "Petyr",
    "lname" => "Marinov",
    "rating_success" => "6",
    "rating_discipline" => "2"
);

$students = array($student_ivan, $student_petyr);
    echo "<ol>";
foreach ($students as $info) {
    echo " <li> The student " . $info['fname'] ." " .$info['lname'] ." is with rating of succsess ". $info ['rating_success']." points of 10 points and rating of discipline ".$info ['rating_discipline'] ." points of 12 points <br> </li>";
};
    echo "</ol>";