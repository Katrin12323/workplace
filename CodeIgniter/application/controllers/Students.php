<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller
{
    public function index()
    {
        $this->load->view('students_form');
    }

    public function saveStudent()
    {
        $this->load->model('student');
        $this->student->firstName = $this->input->post('firstName');
        $this->student->lastName = $this->input->post('lastName');
        $this->student->class = $this->input->post('class');
        $this->student->success = $this->input->post('success');

        $this->student->insertStudent();

        $this->load->view('after_student_insert');
    }
}

