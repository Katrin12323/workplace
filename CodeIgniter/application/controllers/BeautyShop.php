<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeautyShop extends CI_Controller {

    public function index() {
        $data['action'] = 'saveProduct';
        $this->twig->display('beautyShop/beautyForm', $data);
    }

    public function saveProduct() {
        $this->load->model('beautyProduct');

        $this->beautyProduct->brand = $this->input->post('brand');
        $this->beautyProduct->kind = $this->input->post('kind');
        $this->beautyProduct->name = $this->input->post('name');
        $this->beautyProduct->collection = $this->input->post('collection');
        $this->beautyProduct->price = $this->input->post('price');
        $this->beautyProduct->quantity = $this->input->post('quantity');

        $this->beautyProduct->insertNewBeautyProduct();

        $this->twig->display('beautyShop/savedBeautyProduct');
    }

    public function listProducts(){
        $data['baseUrl'] = base_url();
        $this->load->model('beautyProduct');

        $data['beautyProducts'] = $this->beautyProduct->getAllProduct();

        $this->twig->display('beautyShop/allProd', $data);
    }

    public function searchProduct() {
        $this->load->model('beautyProduct');

        $brand = $this->input->post('brand');
        $data['brand'] = $brand;

        if ($brand) {
            $data['beautyProducts']  = $this->beautyProduct->searchByBrand($brand);
        } else {
            $data['beautyProducts'] = array();
        }

        $this->twig->display('beautyShop/allProd', $data);
    }

    public function deleteBeautyProducts($id) {


        $this->load->model('beautyProduct');

        $this->beautyProduct->deleteById($id);

        $data['beautyProducts'] = $this->beautyProduct->getAllProduct();

        $this->twig->display('beautyShop/allProd',$data);

    }

    public function updateForm($id)
    {
        $this->load->model('beautyProduct');
        $data['product'] = $this->beautyProduct->getById($id);
        $data['action'] = 'updateProduct';
        $data['id'] = $id;

        $this->twig->display('beautyShop/beautyForm', $data);
    }

    public function updateProduct($id)
    {
        $this->load->model('beautyProduct');

        $this->beautyProduct->brand = $this->input->post('brand');
        $this->beautyProduct->kind = $this->input->post('kind');
        $this->beautyProduct->name = $this->input->post('name');
        $this->beautyProduct->collection = $this->input->post('collection');
        $this->beautyProduct->price = $this->input->post('price');
        $this->beautyProduct->quantity = $this->input->post('quantity');

        $this->beautyProduct->update($id);

        $data['beautyProducts'] = $this->beautyProduct->getAllProduct();

        $this->twig->display('beautyShop/allProd', $data);
    }
}
