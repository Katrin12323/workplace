<?php
require './classes/student.php';

$student = new Student($_POST['firstName'], $_POST['lastName'], $_POST['numberInClass'], $_POST['grade'], $_POST['gradeLetter']);
$student->showStudentInfo();


$connectionToDatabase = new mysqli('localhost', 'root', 'xaxanepozna', 'workplace');

if ($connectionToDatabase->connect_error) {
    echo "Connection failed: " . $connectionToDatabase->connect_error;
exit;
} else {
    echo "Connection successfully";
}

$insertQuery = "INSERT INTO students (firstName, lastName, numberInClass, grade, gradeLetter) 
VALUES('$student->getFirstNam()', '$student->getLastName()', '$student->getNumberInClass()', '$student->getGrade()', '$student->getGradeLetter()');";
mysqli_query($connectionToDatabase, $insertQuery);