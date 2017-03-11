<?php

if ("Katrin" == $_GET['username'] && "xaxanepozna" == $_GET['password']) {
    echo "Hi Katrin!";
}

//Да се добави проверка в която се тества дали подадените параметри в $_GET са Spas за username и 5453 за password
//Нека се изписва на екрана Hi Spas! в такъв случай

 elseif  ("Spas" == $_GET['username'] && '5453' == $_GET['password']) {
     echo "Hi Spas!";
 }
