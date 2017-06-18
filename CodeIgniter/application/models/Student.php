<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    public $id;
    public $firstName;
    public $lastName;
    public $class;
    public $success;

    public function insertStudent()
    {
        $this->db->insert('students', $this);
    }
}