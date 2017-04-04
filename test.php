<?php
/**
 * Created by PhpStorm.
 * User: katrinees
 * Date: 24.02.17
 * Time: 22:10
 */

$movie1 = array("movieName" => "Coco avant Chanel", "movieYear" => "1996", "movieDirector" => "John Doe");
$movie2 = array("movieName" => "The Notebook", "movieYear" => "2006", "movieDirector" => "John Not Doe");
$movie3 = array("movieName" => "Pretty woman", "movieYear" => "2009", "movieDirector" => "Coco");

$movies = array($movie1, $movie2, $movie3, $movie3, $movie3);

for($i = 0; $i < count($movies); $i=$i+1) {
    echo "Movie name: " . $movies[$i]['movieName'] . "<br />";
    echo "Movie year: " . $movies[$i]['movieYear'] . "<br />";
    echo "Movie director: " . $movies[$i]['movieDirector'] . "<br />";
}

