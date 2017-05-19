<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index() {
        $this->load->view('registerFormForUsers');
    }

    public function registerUser() {

        $data['firstName'] = $this->input->post("firstName");
        $data['lastName']  = $this->input->post("lastName");
        $data['email'] = $this->input->post("email");

        $this->load->view('submited', $data);
    }
}