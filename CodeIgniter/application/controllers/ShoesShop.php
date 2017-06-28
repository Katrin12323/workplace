<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShoesShop extends CI_Controller
    {
    public function index() {
        $data['action'] = 'saveShoes';
        $this->twig->display('shoesShop/shoeForm');
    }

    public function saveShoes()
    {
        $this->load->model('shoes');

        $this->shoes->brand = $this->input->post('brand');
        $this->shoes->type = $this->input->post('type');
        $this->shoes->size = $this->input->post('size');
        $this->shoes->color = $this->input->post('color');
        $this->shoes->price = $this->input->post('price');
        $this->shoes->quantity = $this->input->post('quantity');

        $this->shoes->insertShoes();

        $this->twig->display('shoesShop/successfullyInsertShoes');
    }

    public function listShoes()
    {
        $data['baseUrl'] = base_url();

        $this->load->model('shoes');

        $data['shoes']=$this->shoes->getAllShoes();

        $this->twig->display('shoesShop/allShoes', $data);
    }

    public function deleteShoes($id)
    {
        $data['baseUrl'] = base_url();

        $this->load->model('shoes');

        $this->shoes->deleteShoesById($id);

        $data['shoes'] = $this->shoes->getAllShoes();

        $this->twig->display('shoesShop/allShoes', $data);
    }

    public function searchShoes()
    {
        $this->load->model('shoes');

        $type = $this->input->post('type');
        $data['type'] = $type;

        if ($type) {
            $data['shoes'] = $this->shoes->searchByType($type);
        } else {
            $data['shoes'] = array();

        }

        $this->twig->display('shoesShop/allShoes', $data);
    }

    public function updateForm($id)
    {
        $data['action'] = 'updateProduct';

        $this->load->model('shoes');
        $data['shoes'] = $this->shoes->getById($id);
        $data['id'] = $id;

        $this->twig->display('shoesShop/shoeForm', $data);
    }

    public function updateProduct($id)
    {
        $this->load->model('shoes');
        $data['baseUrl'] = base_url();
        
        $shoe = array(
            'brand' => $this->input->post('brand'),
            'type' => $this->input->post('type'),
            'size' => $this->input->post('size'),
            'color' => $this->input->post('color'),
            'price' => $this->input->post('price'),
            'quantity' => $this->input->post('quantity')
        );
        
        $this->shoes->update($shoe,$id);

        $data['shoes'] = $this->shoes->getAllShoes();

        $this->twig->display('shoesShop/allShoes', $data);
    }
}
