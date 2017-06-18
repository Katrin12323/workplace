<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CaloriesCounter extends CI_Controller {

    public $fats;

    public $proteins;

    public $alcohol;

    public $carbohydrates;

    /**
     * Cubic constructor.
     * @param $fats
     * @param $proteins
     * @param $alcohol
     * @param $carbohydrates
     */
    public function __construct()
    {
        parent::__construct();
        $this->fats = 9;
        $this->proteins = 4;
        $this->alcohol = 7;
        $this->carbohydrates = 4;
    }

    public function index() {

        $this->load->view('Caloriesform');
    }

    public  function counter() {

        $fats = $this->input->post('fats');
        $proteins = $this->input->post('proteins');
        $alcohol = $this->input->post('alcohol');
        $carbohydrates = $this->input->post('carbohydrates');

        $data ['counter'] = $fats*$this->fats +  $proteins*$this->proteins + $alcohol*$this->alcohol + $carbohydrates*$this->carbohydrates;
        $this->load->view('CaloriesResults',$data);


    }
}
