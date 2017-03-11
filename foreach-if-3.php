<?php

//Задача да се направи масив съдържащ масиви с информация за ученици
// Нека масивите с информация за учениците съдържат име, фамилия, буква на класа (А, Б, В) и среден успех
//Нека се покажат на екрана имената на учениците
//Нека ако ученика има среден успех под 3 да се изпише до името му двойкаджия
//В противен случай само името
$students= array(
    array('fname' => 'Ivan', 'lname' => 'Ivanov', 'success' => '5.50', 'class' => 'A'),
    array('fname' => 'Petar', 'lname' => 'Ivanov', 'success' => '3.50', 'class' => 'A'),
    array('fname' => 'Stefani', 'lname' => 'Manolova', 'success' => '4.50', 'class' => 'A'),
    array('fname' => 'Milen', 'lname' => 'Pitev', 'success' => '2.00', 'class' => 'A'),
    array('fname' => 'Vanq', 'lname' => 'Petleshkov', 'success' => '5.00', 'class' => 'A'),
    array('fname' => 'Silviq', 'lname' => 'Moskov', 'success' => '6.00', 'class' => "B"),
    array('fname' => 'Martin', 'lname' => 'Kostov', 'success' => '3.80', 'class' =>  "B"),
    array('fname' => 'Aneta', 'lname' => 'Milenova', 'success' => '4.60', 'class' => "B"),
    array('fname' => 'Monika', 'lname' => 'Ivanova', 'success' => '5.60', 'class' => "B"),
    array('fname' => 'Spas', 'lname' => 'Valeriev', 'success' => '4,30', 'class' => "B")
);

echo "<ol>";
foreach ($students as $exo)
{
    if ($exo['success'] < 3 ) {

        echo " <li> " .$exo['fname'] . "  " . $exo['lname'] . " from class " . $exo ['class'] . " is LUMPEN :D  </br> </li> ";
    }
    else{
        echo " <li>" . $exo['fname'] . "  ". $exo['lname']." from class ".$exo['class']." </br> </li>";
    }
}
    echo "</ol>";