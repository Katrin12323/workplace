<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller
{

    public function firstPage()
    {
        $this->load->view("header");
        $this->load->view("page1");
        $this->load->view("footer");
    }

    public function secondPage()
    {
        $this->load->view("header");
        $this->load->view("page2");
        $this->load->view("footer");
    }
}
