<?php
//Задача да се добавят още 2 масива, един съдържащ любимите ти марки дрехи, един съдържащ любимите ти животни
//Нека за всеки от масивите се направи по един цикъл foreach в чиито блок с код се изписва на екрана:
//За марки: "Label: [label_name]"
//За животни: "Animal: [animal]"

$label = array("Coco Chanel", "Karl Lagerfeld", "Elie Saab");
foreach ($label as $label_name) {
    echo "Label: " .$label_name ."<br/>";
}