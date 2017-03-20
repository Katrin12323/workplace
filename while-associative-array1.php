<?php

function showChildInfo($childArray) {
    if (array_key_exists('fname', $childArray)) {

        echo "<li>" .  $childArray['fname'] . " </li><br />";

    } elseif (array_key_exists('lastname', $childArray)) {

        echo  "<li>" . $childArray['lastname'] . " </li><br />";

    } elseif (array_key_exists('age', $childArray)) {

        echo  "<li>" . $childArray['age'] . " year old </li><br />";

    } elseif (array_key_exists('name', $childArray)) {

        echo "<li> Mother's name: " . $childArray['name'] . " </li><br />";

    } elseif (array_key_exists('telephone', $childArray)) {

        echo  "<li> Telephone number: " . $childArray['telephone'] . " </li><br />";
    }
}

 $nursery = array(
     array('fname' =>'Stefan'),
     array('lastname' => 'Kabakov'),
     array('age' => 1),
     array('name' => 'Katrin Beleva'),
     array('telephone' => '0889470255')
 );
  $i = 0;
 echo "<h2> Child:  </h2>";
  echo "<ul>";

  while ($i < count($nursery)) {
      showChildInfo($nursery[$i]);
      $i++;

  }
  echo "</ul>";
