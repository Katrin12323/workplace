<?php
class BeautyShopBasket extends CI_Controller {

    /**
     * PostBasket constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
}
