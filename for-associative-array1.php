<?php
 $nursery = array(
     array('fname' =>'Stefan'),
     array('lastname' => 'Kabakov'),
     array('age' => 1),
     array('name' => 'Katrin Beleva'),
     array('telephone' => '0889470255')
 );

 echo "<h2> Child:  </h2>";
  echo "<ul>";

  for ($i = 0; $i < count($nursery); $i++) {

      if (array_key_exists('fname', $nursery[$i])) {

          echo "<li>" .  $nursery[$i]['fname'] . " </li><br />";

      } elseif (array_key_exists('lastname', $nursery[$i])) {

          echo  "<li>" . $nursery[$i]['lastname'] . " </li><br />";

      } elseif (array_key_exists('age', $nursery[$i])) {

          echo  "<li>" . $nursery[$i]['age'] . " year old </li><br />";

      } elseif (array_key_exists('name', $nursery[$i])) {

          echo "<li> Mother's name: " . $nursery[$i]['name'] . " </li><br />";

      } elseif (array_key_exists('telephone', $nursery[$i])) {

          echo  "<li> Telephone number: " . $nursery[$i]['telephone'] . " </li><br />";
      }

  }
  echo "</ul>";