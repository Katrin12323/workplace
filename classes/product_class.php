<?php
class Product {

    public $productName;

    public $category;

    public $price;

    public $description;

    public function __construct($_productName, $_category, $_price, $_description) {

        $this->productName=$_productName;
        $this->category=$_category;
        $this->price=$_price;
        $this->description=$_description;
    }
    public function showMeProductInfo () {
        echo "Name of the product: " . $this->productName . "</br> ";
        echo "Product's category: " . $this->category . "</br>";
        echo "Price of the product: " . $this->price . "</br>";
        echo "Description of the product: " .$this->description . "</br>";
    }
}

