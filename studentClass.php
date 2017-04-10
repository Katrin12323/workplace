<?php

class Student
{
    public $firstName;

    public $lastName;

    public $numberInClass;

    public $grade;

    public $gradeLetter;

    public function __construct($_firstName, $_lastName, $_numberInClass, $_grade, $_gradeLetter)
    {
        $this->firstName = $_firstName;
        $this->lastName = $_lastName;
        $this->numberInClass = $_numberInClass;
        $this->grade = $_grade;
        $this->gradeLetter = $_gradeLetter;
    }

    public function showStudentInfo()
    {
        echo "You entered the following student information: <br />";
        echo "Student Name: " . $this->firstName . " " . $this->lastName . "<br />";
        echo "Number: " . $this->numberInClass . " in " . $this->grade . " " . $this->gradeLetter ."<br />";
    }

}

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
VALUES('$student->firstName', '$student->lastName', '$student->numberInClass', '$student->grade', '$student->gradeLetter');";
mysqli_query($connectionToDatabase, $insertQuery);