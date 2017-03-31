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

}

$student = new Student($_POST['firstName'], $_POST['lastName'], $_POST['numberInClass'], $_POST['grade'], $_POST['gradeLetter']);

echo "You entered the following student information: <br />";
echo "Student Name: " . $student->firstName . " " . $student->lastName . "<br />";
echo "Number: " . $student->numberInClass . " in " . $student->grade . " " . $student->gradeLetter ."<br />";