<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supermarket extends CI_Controller {

    public function index() {

        $this->twig->display('supermarket/productForm');
    }

    public function saveProduct() {
        $this->load->model('product');

        $this->product->productName = $this->input->post('productName');
        $this->product->price = $this->input->post('price');
        $this->product->barcode = $this->input->post('barcode');
        $this->product->quantity = $this->input->post('quantity');

        $this->product->insertProduct();

        $data['product'] = $this->product;

        $this->twig->display('supermarket/show_product',$data);
    }

        public function search()
        {
            $this->twig->display('supermarket/searchproduct');
        }

        public function searchProduct()
        {
            $this->load->model('product');

            $productName = $this->input->post('productName');
            $barcode = $this->input->post('barcode');

            if ($productName && $barcode) {
                $data['products'] = $this->product->searchByNameAndBarcode ($productName,$barcode);

            } elseif ($barcode) {
                $data['products'] = $this->product->searchByBarcode($barcode);

            } elseif ($productName) {
                $data['products'] = $this->product->searchByProductName($productName);

            } else {
                $data['products'] = array();
            }

            $this->twig->display('supermarket/showSearchedProducts', $data);
        }

        public function deleteByProduct ($id) {
            $this->load->model('product');

            $this->product->deleteById ($id);

            }

}
