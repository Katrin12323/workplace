<?php


//Задача да се направи масив съдържащ масиви с информация за ученици
// Нека масивите с информация за учениците съдържат име, фамилия, буква на класа (А, Б, В) и среден успех
//Нека масива съдържа поне 8 ученика 4 от клас Б и 4 от калс А
// Нека на екрана се покаже информация само за учениците със среден успех по-голям от 4 и са от А калс
//Нека на екрана се покажат всички ученици от клас Б и успех над 5


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

foreach ($students as $exo)
{
    if ($exo['success'] > 4 && $exo['class'] == 'A') {

        echo " Name: " .$exo['fname'] . "  " . $exo['lname'] . ", class " . $exo ['class'] . ", success: ". $exo['success'] . " </br> </br>";
    }
}

foreach ($students as $eko)
{
    if($eko['success'] > 5 && $eko['class'] == "B") {
        echo " The student " . $eko['fname'] . " " . $eko['lname'] . " from class " .$eko['class'] . " has success " . $eko['success'] . " </br> </br> ";
    }
}
