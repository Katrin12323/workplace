<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Casino extends CI_Controller {

    public $bet;

    public function __construct()
    {
        parent::__construct();
        $this->bet = rand(1, 10);

    }

    public function index() {
        $this->load->view('betForm');
    }

    public function winOrLose() {

        $usersBet = $this->input->post('bet');
        $usersNumber = $this->input->post('number');

        if($usersNumber == $this->bet) {
            $data['userWon'] = $usersBet * 10;

            $this->load->view('BetResults', $data);

        } elseif (abs($this->bet - $usersNumber) <= 2) {
            $data['userWon'] = $usersBet * 2;

            $this->load->view('BetResults', $data);

        } else {
            $data['usersBet'] = $usersBet;
            $this->load->view('betLost', $data);

        }

    }
}