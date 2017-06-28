<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller
{
    public function index()
    {
        $data['action'] = 'save';
        $this->load->view('studentsView/students_form');
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
    public function listStudents()
    {
        $data['baseUrl'] = base_url();
        $this->load->model('student');

        $data['student'] = $this->student->getAllStudents();

        $this->twig->display('studentsView/allStudents',$data);
    }

    public function deleteInfo($id)
    {
        $this->load->model('student');

        $this->student->deleteById($id);

        $data['student'] = $this->student->getAllStudents();

        $this->twig->display('studentsView/allStudents',$data);
    }

    public function updateForm($id)
    {
        $this->load->model('students');
        $data['action'] = 'update';

        $data['student'] = $this->student->getById($id);
        $data['id'] = $id;

        $this->twig->display('studentsView/allStudents',$data);
    }

    public function update($id)
    {
       throw new \Exception("bla");
    }

    public function test()
    {
        try {
            $this->update(1);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }

    }

}

