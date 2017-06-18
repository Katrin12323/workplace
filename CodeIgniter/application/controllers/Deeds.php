<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deeds extends CI_Controller
{
    public function index() {
        $data['action'] = 'saveDeed';
        $this->twig->display('deedRegisterView/deedsAdmin');
        $data['button'] = 'Save this Deeds';
    }

    public function saveDeed () {

        $this->load->model('deed');
        $this->deed->personalNumber = $this->input->post('personalNumber');
        $this->deed->type = $this->input->post('type');
        $this->deed->actNumber = $this->input->post('actNumber');
        $this->deed->deedNumber = $this->input->post('deedNumber');

        $this->deed->insertDeed();

        $data['actNumber'] = $this->deed->actNumber;
        $data['deedNumber'] = $this->deed->deedNumber;

        $this->twig->display('deedRegisterView/after_deed_insert', $data);

    }

    public function searchForm() {
        $this->twig->display('deedRegisterView/searchDeeds');
    }

    public function searchDeeds() {

        $this->load->model('deed');
        $personalNumber = $this->input->post('personalNumber');


        $data['deeds'] = $this->deed->searchByPersonalNumber($personalNumber);


        $this->twig->display('deedRegisterView/showDeeds', $data);
    }

    public function listDeeds()
    {
        $this->load->model('deed');

        $data['deeds'] = $this->deed->getAllDeeds();

        $this->twig->display('deedRegisterView/showDeeds', $data);
    }

    public function deleteDeed($id)
    {
        $this->load->model('deed');

        $this->deed->deleteById($id);

        $data['deeds'] = $this->deed->getAllDeeds();

        $this->twig->display('deedRegisterView/showDeeds', $data);
    }

    public function editForm($id)
    {
        $data['button'] = 'Edit this Deed';
        $data['action'] = 'editDeed';
        $this->load->model('deed');


        $data['deed'] = $this->deed->getById($id);
        $data['id'] = $id;

        $this->twig->display('deedRegisterView/deedsAdmin', $data);
    }

    public function editDeed($id)
    {
        $this->load->model('deed');

        $this->deed->personalNumber = $this->input->post('personalNumber');
        $this->deed->type = $this->input->post('type');
        $this->deed->actNumber = $this->input->post('actNumber');
        $this->deed->deedNumber = $this->input->post('deedNumber');

        $this->deed->updateById($id);

        $data['deeds'] = $this->deed->getAllDeeds();

        $this->twig->display('deedRegisterView/showDeeds',$data);
    }

}