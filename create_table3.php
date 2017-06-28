<?php
$connection = new mysqli('localhost', 'root', 'xaxanepozna', 'workplace');
if ($connection->connect_error) {
    echo "Connection failed" .$connection->connect_error;
    exit;
}
$query = 'CREATE TABLE ship (
id INT NOT NULL,
name VARCHAR(255) NOT NULL,
yearOfBuilding VARCHAR(255) NOT NULL,
volume VARCHAR(255) NOT NULL,
creator VARCHAR(255) NOT NULL,
captain VARCHAR(255) NOT  NULL
)';
mysqli_query($connection, $query);

echo mysqli_error($connection);