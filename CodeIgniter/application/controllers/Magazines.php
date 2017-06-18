<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Magazines extends CI_Controller {

    public function index() {
        $data['action'] = 'saveMagazines';

        $this->twig->display('magazinForm', $data);
    }

    public function saveMagazines() {

        $this->load->model ('megazine');

        $this->megazine->name = $this->input->post('name');
        $this->megazine->price = $this->input->post('price');
        $this->megazine->kind = $this->input->post('kind');
        $this->megazine->quantity = $this->input->post('quantity');

        $this->megazine->insertNewMagazine();

        $this->twig->display('savedMagazine');
    }

    public function searchForm() {
        $data['action'] = 'searchMagazines';

        $this->twig->display('magazinForm', $data);
    }

    public function searchMagazines() {

        $this->load->model('megazine');

        $name = $this->input->post('name');

        if ($name) {
            $data['magazine'] = $this->megazine->searchByName($name);
        }  else {
            $data['magazine'] = array();
        }

        $this->twig->display('seachedMagazines', $data);
    }

    public function listMagazines() {

        $this->load->model('megazine');

        $data['magazine'] = $this->megazine->getAllMagazines();

        $this->twig->display('allMagazines', $data);
        }

    public function deleteMagazine($id) {

        $this->load->model('megazine');

        $this->megazine->deleteById($id);

        $data['magazine'] = $this->megazine->getAllMagazines();

        $this->twig->display('allMagazines', $data);
    }

    public function updateForm($id)
    {
        $this->load->model('megazine');

        $data['magazine'] = $this->megazine->updateById($id);

    }


}