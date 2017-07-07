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

    public function amountFromBasket()
    {
        $this->load->model('beautyProductBasket');

        $data['basketId'] = $this->session->basketId ;

        if($data['basketId'] == NULL) {

            $data['amountFromBasket'] = FALSE;

        } else {
            $data['amountFromBasket'] = $this->beautyProductBasket->getBasketById($this->session->basketId);
        }

        $this->twig->display('beautyShop/infoAboutPurchase', $data);
    }

    public function payPurchase()
    {
        $this->load->model('beautyProductBasket');
        $this->load->model('beautyProduct');

       $id = $this->session->basketId;
        
        $basket = $this->beautyProductBasket->getBasketById($id);

        $basket->paid = 1;

        $this->beautyProductBasket->updateBasket($basket,  $id);

        $this->session->set_userdata('basketId', NULL);
        
        $this->twig->display('beautyShop/afterPay');

        $product = $this->beautyProduct->getById($basket->productId);

        $product->quantity--;

        $this->beautyProduct->update($id);


    }


}
