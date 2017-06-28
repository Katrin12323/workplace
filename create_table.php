<?php
$connection = new mysqli('localhost', 'root', 'xaxanepozna', 'workplace');
if ($connection->connect_error) {
    echo "Connection failed" .$connection->connect_error;
    exit;
}

$query = 'CREATE TABLE property (
id INT NOT NULL,
type VARCHAR(255) NOT NULL,
area VARCHAR(255) NOT NULL,
adress VARCHAR(255)  NOT NULL,
ownershipOf VARCHAR(255)  NOT NULL,
neighbours VARCHAR(255)  NOT NULL
)';
mysqli_query($connection, $query);

echo mysqli_error($connection);