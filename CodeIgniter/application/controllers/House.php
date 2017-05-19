<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class House extends CI_Controller {

    public function index() {

        $this->load->view('AddNewProperty');
    }

    public function addNewHouse() {

        $data['address'] = $this->input->post('address');
        $data['area'] = $this->input->post('area');
        $data['propertyType'] = $this->input->post('propertyType');

            $this->load->view('NewPropertyAdded', $data);
    }


}