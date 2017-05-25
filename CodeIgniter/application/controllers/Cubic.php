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

        if(is_numeric($width) && is_numeric($height) && is_numeric($length)) {
            $data['result'] = $width * $height * $length;

            $this->load->view('results_cubic', $data);
        } else {
            $this->load->view ('cubic_error');
        }
    }

}