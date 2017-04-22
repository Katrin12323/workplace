<?php
class Student
{
    private $firstName;

    private $lastName;

    private $numberInClass;

    private $grade;

    private $gradeLetter;

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
    
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getNumberInClass()
    {
        return $this->numberInClass;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function getGradeLetter()
    {
        return $this->gradeLetter;
    }

}
