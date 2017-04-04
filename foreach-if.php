<?php

//Задача да се направи масив съдържащ масиви с информация за ученици
// Нека масивите с информация за учениците съдържат име, фамилия и среден успех
// Нека на екрана се покаже информация само за учениците със среден успех по-голям от 4


$students= array(
    array('fname' => 'Ivan', 'lname' => 'Ivanov', 'success' => 5.50),
    array('fname' => 'Petar', 'lname' => 'Ivanov', 'success' => 3.50),
    array('fname' => 'Stefani', 'lname' => 'Manolova', 'success' => 4.25),
    array('fname' => 'Milen', 'lname' => 'Pitev', 'success' => 2.00),
    array('fname' => 'Vanq', 'lname' => 'Petleshkov', 'success' => 5.00),
    array('fname' => 'Silviq', 'lname' => 'Moskov', 'success' => 6.00),
    array('fname' => 'Martin', 'lname' => 'Kostov', 'success' => 3.80),
    array('fname' => 'Aneta', 'lname' => 'Milenova', 'success' => 4.60),
    array('fname' => 'Monika', 'lname' => 'Ivanova', 'success' => 5.60),
    array('fname' => 'Spas', 'lname' => 'Valeriev', 'success' => 4.30)
    );

for ($i=0; $i < count($students); $i++) {
    if ($students[$i]['success'] > 4) {
        echo $students[$i]['fname'] . " " . $students[$i]['lname'] . "<br />";
    }
}