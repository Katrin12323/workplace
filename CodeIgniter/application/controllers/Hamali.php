<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hamali extends CI_Controller {

    public function index() {

        $this->load->view('usersForm');
    }

    public function  CalculateThePrice() {

        $kilometers = $this->input->post('distanceInKm');
        $kilograms = $this->input->post('luggageInKg');

        if($kilograms <= 1000) {
            $data['price'] = $kilometers * 1;
            $this->load->view('HamaliResults', $data);

        } elseif($kilograms > 1000 && $kilograms <= 2000) {
            $data['price'] = $kilometers * 1.20;
            $this->load->view('HamaliResults',$data);

        } elseif($kilograms > 2000 && $kilograms <= 3000) {
            $data['price'] = $kilometers * 1.40;
            $this->load->view('HamaliResults',$data);

        } elseif($kilograms > 3000) {
            $data['price'] = $kilometers * 2;
            $this->load->view('HamaliResults',$data);
        }

    }

}
