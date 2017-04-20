<?php
require './classes/student.php';

$connection = new mysqli ('localhost', 'root' , 'xaxanepozna', 'workplace');
if ($connection->connect_error) {
    echo "Connection failed ". $connection->connect_error;
    exit;
}

$query = "SELECT * FROM students;";
$resultStudents = mysqli_query($connection, $query);
while ($student = $resultStudents->fetch_assoc()) {
    $studentObject = new Student ($student['firstName'], $student['lastName'], $student['numberInClass'], $student['grade'],$student['gradeLetter']);
    $studentObject->showStudentInfo();
    echo "<br/>";
}

