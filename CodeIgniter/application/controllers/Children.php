<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Children extends CI_Controller
{
    public function index()
    {
        $data['action'] = 'saveNewChild';
        $data['baseUrl'] = base_url();
        $this->twig->display('children/childForm');
    }

    public function saveNewChild() {

        $this->load->model('child');
        $data['baseUrl'] = base_url();

        $this->child->firstName = $this->input->post('firstName');
        $this->child->lastName = $this->input->post('lastName');
        $this->child->personalNumber = $this->input->post('personalNumber');
        $this->child->years = $this->input->post('years');
        $this->child->diseases = $this->input->post('diseases');

        $this->child->insertChild();

        $data['firstName'] = $this->child->firstName;
        $data['lastName'] =  $this->child->lastName;
        $data['personalNumber'] =  $this->child->personalNumber;

        $this->twig->display('children/after_insert_child',$data);
    }

    public function listChild()
    {
        $this->load->model('child');

        $data['children'] = $this->child->getAllChild();

        $data['baseUrl'] = base_url();

        $this->twig->display('children/allChild', $data);
    }

    public function search() {
        $data['baseUrl'] = base_url();
        $this->twig->display('children/searchChild');
    }

    public function searchChild() {
        $data['baseUrl'] = base_url();
        $this->load->model('child');
        $personalNumber = $this->input->post('personalNumber');

        $data['child'] = $this->child->searchByPersonalNumber($personalNumber);

        $this->twig->display('children/show_child',$data);
    }

    public function deleteChild($id)
    {
        $data['baseUrl'] = base_url();
        $this->load->model('child');

        $this->child->deleteChildById($id);

        $data['children'] = $this->child->getAllChild();

        $this->twig->display('children/allChild', $data);
    }

    public function updateForm($id)
    {
        $data['action'] = 'updateChildInfo';
        $this->load->model('child');
        $data['baseUrl'] = base_url();
        $data['child'] = $this->child->getById($id);
        $data['id'] = $id;

        $this->twig->display('children/childForm', $data);
    }

    public function updateChildInfo($id)
    {
        $this->load->model('child');
        $this->child->firstName = $this->input->post('firstName');
        $this->child->lastName = $this->input->post('lastName');
        $this->child->personalNumber = $this->input->post('personalNumber');
        $this->child->years = $this->input->post('years');
        $this->child->diseases = $this->input->post('diseases');
        $data['baseUrl'] = base_url();
        $this->child->update($id);

        $data['children'] = $this->child->getAllChild();
        $this->twig->display('children/allChild', $data);
    }
}