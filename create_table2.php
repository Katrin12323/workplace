<?php
$connection = new mysqli('localhost', 'root', 'xaxanepozna', 'workplace');
if ($connection->connect_error) {
    echo "Connection failed" .$connection->connect_error;
    exit;
}
$query = 'CREATE TABLE doctor (
  id INT NOT NULL,
  firstName VARCHAR(255) NOT NULL,
  lastName VARCHAR(255) NOT NULL,
  age VARCHAR(255) NOT NULL,
  IsHealthyProvided VARCHAR(255) NOT NULL,
  diseases VARCHAR (255) NOT NULL
)';
mysqli_query($connection, $query);

echo mysqli_error($connection);