<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BMI extends CI_Controller {

    public function index() {
        $this->load->view('BMI-form');
    }

    public function CalculateBMI() {

        $weight = $this->input->post('weight');
        $height = $this->input->post('height');

        $data['BMI'] = $weight/($height * $height);

        if($data['BMI'] < 18.5 ) {
            $data['message'] = "Underweight";

        } elseif($data['BMI']> 18.5 && $data['BMI'] <= 25) {
            $data['message'] = "Normal weight";

        } elseif($data['BMI']> 25 && $data['BMI'] < 30) {
            $data['message'] = "Overweight";

        } elseif($data['BMI'] > 30) {
            $data['message'] = "Obesity";
        }

        $this->load->view('BMI-results', $data);
    }
}

