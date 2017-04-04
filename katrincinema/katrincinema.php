<?php
/**
 * Created by PhpStorm.
 * User: katrinees
 * Date: 09.03.17
 * Time: 12:40
 */
$cinema = array(
    array('movie' => 'Красавицата и звярът', 'genre' => 'романтичен/фентъзи', 'moviePic' => 'beautyandthebeast.jpg'),
    array('movie' => 'Джон Уик 2', 'genre' => 'екшън', 'moviePic' => 'johnwick.jpg'),
    array('movie' => 'Логан Върколакът', 'genre' => 'екшън/драма', 'moviePic' => 'logan.jpg'),
    array('movie' => 'Между шамарите', 'genre' => 'комедия', 'moviePic' => 'fistfight.jpg'),
    array('movie' => 'Училището: най - лошите ми години', 'genre' => 'комедия', 'moviePic' => 'moddleschool.jpg'),
    array('movie' => 'Часът на чудовището', 'genre' => 'драма/фантастика', 'moviePic' => 'amonstercalls.jpg'),
    array('movie' => 'Лейди Макбет', 'genre' => 'драма', 'moviePic' => 'ladymacbet.jpg'),
);


echo "<h1>This is Katrin's cinema</h1>";

echo "<ul>";
foreach ($cinema as $movie) {
    $link = "http://localhost/katrincinema/movie.php?movie=" . $movie['movie'];
    echo "<li>Title: <a href='$link'>" . $movie['movie'] . "</a> Genre: " . $movie['genre'] . "</li>";
}
echo "</ul>";