<?php
/**
 * Created by PhpStorm.
 * User: katrinees
 * Date: 09.03.17
 * Time: 12:40
 */
$cinema = array(
    array('movie' => 'Красавицата и звярът', 'genre' => 'романтичен/фентъзи', 'moviePic' => 'beautyandthebeast.jpg', 'hours' => '14:00h 17:30h 20:00h'),
    array('movie' => 'Джон Уик 2', 'genre' => 'екшън', 'moviePic' => 'johnwick.jpg', 'hours' => '14:00h 17:30h 20:00h'),
    array('movie' => 'Логан Върколакът', 'genre' => 'екшън/драма', 'moviePic' => 'logan.jpg', 'hours' => '14:00h 17:30h 20:00h'),
    array('movie' => 'Между шамарите', 'genre' => 'комедия', 'moviePic' => 'fistfight.jpg', 'hours' => '14:00h 17:30h 20:00h'),
    array('movie' => 'Училището: най - лошите ми години', 'genre' => 'комедия', 'moviePic' => 'middleschool.jpg', 'hours' => '14:00h 17:30h 20:00h'),
    array('movie' => 'Часът на чудовището', 'genre' => 'драма/фантастика', 'moviePic' => 'amonstercalls.jpg', 'hours' => '14:00h 17:30h 20:00h'),
    array('movie' => 'Лейди Макбет', 'genre' => 'драма', 'moviePic' => 'ladymacbet.jpg', 'hours' => '14:00h 17:30h 20:00h'),
);


foreach ($cinema as $movie) {
    if ($movie['movie'] == $_GET['movie']) {
        echo "Title: " . $movie['movie'] . "<br />";
        echo "Genre: " . $movie['genre'] . "<br />";
        echo "Hours: " . $movie['hours'] . "<br />";
    }
}
