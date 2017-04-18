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
