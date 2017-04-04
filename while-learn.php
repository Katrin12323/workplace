<?php

$movies = array(
    array('title' => 'Coco Avant Chanel', 'posterPic' => "http://www.letrip.org/wp-content/uploads/2009/09/dscf4540.jpg", 'hours' => "14:00h, 17:30h 21:00h"),
    array('title' => 'The Notebook', 'posterPic' => "https://images-na.ssl-images-amazon.com/images/M/MV5BMTk3OTM5Njg5M15BMl5BanBnXkFtZTYwMzA0ODI3._V1_UX182_CR0,0,182,268_AL_.jpg", 'hours' => "14:00h, 17:30h 21:00h"),
    array('title' => 'Titanik', 'posterPic' => "https://s-media-cache-ak0.pinimg.com/736x/a2/2b/23/a22b23c46ead24191aba679ac1356ae8.jpg", 'hours' => "15:00h, 18:30h 23:00h"),
    array('title' => 'The game Plan', 'posterPic' => "http://www.gstatic.com/tv/thumb/movieposters/170514/p170514_p_v8_ae.jpg", 'hours' => "15:00h, 18:30h 23:00h"),
);

$i = 0;
while (true) {
    echo $movies[$i]['title'] . "<br />";
    $i++;
}