<?php
class BeautyShopBasket extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    
    public function addToBasket()
    {
        $productId = $this->input->post('productId');
        $this->load->model('beautyProduct');
        $this->load->model('beautyProductBasket');

        $product = $this->beautyProduct->getById($productId);

        if($this->session->basketId != NULL) {
            
            $basket = $this->beautyProductBasket->getBasketById($this->session->basketId);
            $basket->amount += $product->price;
            $this->beautyProductBasket->updateBasket($basket,$this->session->basketId );
        } else {
            
            $basket = array(
                'productId' => $productId,
                'amount' => $product->price,
                'paid' => 0
            );
            $this->beautyProductBasket->insert($basket);
            $basketId = $this->beautyProductBasket->getLastBasketId();
            $this->session->set_userdata('basketId', $basketId);
        }

        $data['basket'] = $this->beautyProductBasket->getBasketById($this->session->basketId);
        $data['beautyProducts'] = $this->beautyProduct->getAllProduct();

        $this->twig->display('beautyShop/allProd', $data);
    }
}
