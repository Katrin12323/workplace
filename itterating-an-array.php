<?php

$myArray = array("Audi", "Mercedess", "VW", "Toyota");

for ($i=0; $i < count($myArray); $i++) {

    echo $myArray[$i] . "<br />";
}
//Да се разгледа програмата в прикачения фаил.
// Програмата служи за итерация на елементите от един индексен масив.
// Дефинираме си цикъл for чиято контролна променлива $i се изменя от 0 до колкото елемента има в масива.
// За намиране дължината на масива използваме функцията count.
// В блока с код на масива използваме текущата стойност на променливата $i за да достъпим до елемента на масива,
// чиято стойност има индекс равен на $i.
