<?php
$connection = new mysqli('localhost', 'root', 'xaxanepozna', 'workplace');
if ($connection->connect_error) {
    echo "Connection failed" .$connection->connect_error;
    exit;
}

$query = 'CREATE TABLE city (
id INT NOT NULL,
name VARCHAR(255) NOT NULL,
area VARCHAR(255) NOT NULL,
population VARCHAR(255)  NOT NULL,
climate VARCHAR(255)  NOT NULL,
mayor VARCHAR(255)  NOT NULL
)';
mysqli_query($connection, $query);

echo mysqli_error($connection);