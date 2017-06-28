<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Magazines extends CI_Controller {

    public function index() {
        $data['action'] = 'saveMagazines';

        $this->twig->display('megazines/magazinForm', $data);
    }

    public function saveMagazines() {

        $this->load->model ('megazine');

        $this->megazine->name = $this->input->post('name');
        $this->megazine->price = $this->input->post('price');
        $this->megazine->kind = $this->input->post('kind');
        $this->megazine->quantity = $this->input->post('quantity');

        $this->megazine->insertNewMagazine();

        $this->twig->display('megazines/savedMagazine');
    }

    public function searchMagazines() {

        $this->load->model('megazine');

        $name = $this->input->post('name');

        if ($name) {
            $data['magazine'] = $this->megazine->searchByName($name);
        } else {
            $data['magazine'] = array();
        }

        $this->twig->display('megazines/allMagazines', $data);
    }

    public function listMagazines() {

        $this->load->model('megazine');

        $data['magazine'] = $this->megazine->getAllMagazines();

        $this->twig->display('megazines/allMagazines', $data);
        }

    public function deleteMagazine($id) {

        $this->load->model('megazine');

        $this->megazine->deleteById($id);

        $data['magazine'] = $this->megazine->getAllMagazines();

        $this->twig->display('megazines/allMagazines', $data);
    }

    public function updateForm($id)
    {
        $data['action'] = 'updateMagazine';
        $this->load->model('megazine');

        $data['magazine'] = $this->megazine->getById($id);
        $data['id'] = $id;

        $this->twig->display('megazines/magazinForm', $data);
    }

    public function updateMagazine ($id)
    {
        $this->load->model('megazine');
        $magazine = array(
        'name' => $this->input->post('name'),
        'price' => $this->input->post('price'),
        'kind' => $this->input->post('kind'),
        'quantity' => $this->input->post('quantity')
    );
         $this->megazine->updateById($id, $magazine);

        $data['magazine'] = $this->megazine->getAllMagazines();

        $this->twig->display('megazines/allMagazines', $data);
    }
}