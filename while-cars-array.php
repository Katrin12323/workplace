<?php

$cars = array(
    array('brand' => 'audi', 'model' => 'a4', 'color' => 'black'),
    array('brand' => 'audi', 'model' => 'a3', 'color' => 'red'),
    array('brand' => 'bmw', 'model' => '318TDS', 'color' => 'pink'),
    array('brand' => 'Lada', 'model' => '2770', 'color' => 'white'),
);

$i = 0;

echo "<ul>";
while ($i < count($cars)) {
?>
    <li>
        Brand: <?php echo $cars[$i]['brand'];?> <br />
        Model: <?php echo $cars[$i]['model'];?> <br />
        Color: <?php echo $cars[$i]['color'];?> <br />
    </li>
<?php
    $i++;
}
echo "</ul>";
?>

