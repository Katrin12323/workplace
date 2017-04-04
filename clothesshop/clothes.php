<?php

//Да се добавят стойности за ключовете brandLink. Трябва да са адресите на офицялните сайтове на съответната марка
//Виж Шанел
$clothes = array(
    array('title' => 'Chanel Dress', 'brand' => 'Chanel', 'price' => 1300, 'pic' => 'chanel-dress.jpg', 'brandLink' => 'http://www.chanel.com'),
    array('title' => 'Karl Lagerfeld Dress', 'brand' => 'Karl', 'price' => 1200, 'pic' => 'karl-lagerfeld-dress.jpg', 'brandLink' =>'http://www.karl.com/bg' ),
    array('title' => 'Moschino', 'brand' => 'MOSCHINO', 'price' => 300, 'pic' => 'moschino-t-shirt.jpeg', 'brandLink' => 'https://www.moschino.com/bg' ),
    array('title' => 'Dior Dress', 'brand' => 'Dior', 'price' => 2300, 'pic' => 'dior-dress.jpg', 'brandLink' => 'http://www.dior.com/home/en_int')
);
?>
 <h1>Our Collection</h1>

<ul>
<?php
foreach ($clothes as $item) {
    $link = "http://localhost/clothesshop/product.php?title=" . $item['title'];
?>
    <li>
        Title: <a href="<?php echo $link; ?>"> <?php echo  $item['title']; ?></a>
        Brand: <a href="<?php echo $item['brandLink'];?>"><?php echo $item['brand']; ?></a>
        Price: <?php echo $item['price']; ?>
        <img src='<?php echo $item['pic'] ?>' height='100' width='100'/>
    </li>
<?php
}
?>
</ul>
