<?php

function ShowTheTitleOfMovie ($movieTitle) {
    echo "<h3>The film's title is: " . $movieTitle . " </h3> <br/>";
}

ShowTheTitleOfMovie($_POST['movieTitle']);

function ShowMeReviewOfTheFilm ($review) {
    echo  "<h4> A little bit of the film:  <br/>" . $review . "</h4><br/>";
}
ShowMeReviewOfTheFilm($_POST['review']);

function WhoCanWatchTheFilm ($SuitableAge) {
    if ($SuitableAge  == 'no') {
        echo " <h2> PARENTAL CONTROL </h2> <br/>";

    } elseif ($SuitableAge == 'yes') {
        echo "<h2> FAMILY FRIENDLY :)) </h2> <br/>";
    }
}

WhoCanWatchTheFilm($_POST['SuitableAge']);