<?php

$theArray = array(
    array('brand' => 'Tom Tailor', 'founded' => '1984'),
    array('brand' =>'Versace', 'founded' => '1913'),
    array('brand' => 'Chanel', 'founded' => '1912'),
    array('brand' => 'Hugo Boss', 'founded' => '1941'),
    array('brand' => 'Tomy Hilfinger', 'founded' => '1952'),
    array('brand' => 'LC WAIKIKI', 'founded' => '1999'),
    array('brand' => 'Jofra', 'founded' => '2003'),
    array('brand' => 'Borqna', 'founded' => '2009'),
    array('brand' => 'Luxury Collection','founded' => '2014')
);



echo "<h2> Foreach-array </h2>";
echo "<ul>";
foreach ($theArray as $passione) {

    echo "<li>" . $passione['brand'] . " founded in " .$passione['founded'] . "</li> <br />";

}
echo "</ul>";



echo "<h2> For-array </h2>";
echo "<ul>";

for ($i = 0; $i < count($theArray); $i++) {

    echo "<li>" . $theArray[$i]['brand'] . " founded in " .$theArray[$i]['founded'] . "</li> <br />";

}
echo "</ul>";



echo "<h2> While-array </h2>";
echo "<ul>";

$i=0;
while ($i < count($theArray)) {

    echo "<li>" . $theArray [$i]['brand'] . "  founded in " . $theArray[$i]['founded'] . "</li> <br />";

    $i++;
}
echo  "</ul>";