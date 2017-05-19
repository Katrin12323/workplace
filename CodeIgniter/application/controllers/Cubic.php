<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cubic extends CI_Controller {

    public function index() {
        $this->load->view('formCubic');
    }

    public function calculate() {
        $width  = $this->input->post('width');
        $height = $this->input->post('height');
        $length = $this->input->post('length');

        $data['result'] = $width*$height*$length;

        $this->load->view('results_cubic', $data);
    }

}