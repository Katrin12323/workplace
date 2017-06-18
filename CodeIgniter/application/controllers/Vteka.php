<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vteka extends CI_Controller
{
    public function index()
    {
        $this->twig->display('vteka/vteka_form');
    }

    public function saveVideotape() {
        $this->load->model('videotape');

        $this->videotape->title = $this->input->post('title');
        $this->videotape->year = $this->input->post('year');
        $this->videotape->country = $this->input->post('country');
        $this->videotape->genre = $this->input->post('genre');
        $this->videotape->shortDescription = $this->input->post('shortDescription');
        $this->videotape->mainActors = $this->input->post('mainActors');
        $this->videotape->quantity = $this->input->post('quantity');

        $this->videotape->insertVideotape();

        $data['videotape'] = $this->videotape;

        $this->twig->display('vteka/vteka_list', $data);
    }

    public function listVideotape() {

        $this->load->model('videotape');

        $data['videotapes'] = $this->videotape->getVideotape();

        $this->twig->display('vteka/allVideotapes', $data);

    }

    public function deleteVideoTape($id)
    {
        $this->load->model('videotape');

        $this->videotape->deleteById($id);

        $data['videotapes'] = $this->videotape->getVideotape();

        $this->twig->display('vteka/allVideotapes', $data);
    }
}