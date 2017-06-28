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
    public function getById($id)
    {
        $query = $this->db->get_where('students', array('id' => $id));

        return $query->first_row();
    }

    public function getAllStudents()
    {
        $query = $this->db->get('students');
        
        return $query->result_array();
    }
    
    public function deleteById($id) 
    {
        $this->db->delete('students', array('id' => $id));
    }
}