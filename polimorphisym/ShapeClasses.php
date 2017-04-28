<?php
    class Shape {

        public function draw ()
        {

        }
}

class Circle extends Shape {

        public function draw()
        {
            echo "_______*****______ <br />";
            echo "______********_____ <br />";
            echo "_____**********___ <br />";
            echo "______********_____ <br />";
            echo "_______******____ <br />";

        }
}

class Square extends Shape {

        public function draw()
        {
            echo "..................<br />";
            echo "..................<br />";
            echo "..................<br />";
            echo "..................<br />";

        }
}

class Triangle extends Shape {

        public function draw()
        {
            echo ".<br />";
            echo "....<br />";
            echo "........<br />";
            echo ".............<br />";
        }
}

if ($_POST['shape'] == 'circle') {
    $shape = new Circle ();

} elseif($_POST['shape'] == 'square') {
    $shape = new Square();

} elseif ($_POST['shape'] == 'triangle') {
    $shape = new Triangle();
}

var_dump($_POST['shape']);

$shape->draw();