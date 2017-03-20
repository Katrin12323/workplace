<?php

$theArray = array('Tom Tailor', 'Versace', 'Chanel', 'Hugo Boss', 'Tomy Hilfinger', 'LC WAIKIKI', 'Jofra', 'Borqna', 'Luxury Collection', 123);

echo " <h2> Foreach-array </h2>";
echo "<ul>";

foreach ($theArray as $passione) {

    echo "<li>" . $passione  . "<br /> ";
}
echo "</ul>";



echo " <h2> For-array </h2>";
echo "<ul>";

for ($i=0; $i< count($theArray); $i++) {

    echo "<li>" . $theArray[$i] . "</li> <br />";
}

echo "</ul>";


echo " <h2> While-array </h2>";
echo "<ul>";

$i=0;
while ($i<count($theArray)) {

    echo "<li>" . $theArray[$i] . "</li> <br />";

    $i++;
}

echo "</ul>";

