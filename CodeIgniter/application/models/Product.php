<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {

    public $productName;
    public $price;
    public $barcode;
    public $quantity;

    public function insertProduct() {
        $this->db->insert('supermarket', $this);
    }

    public function searchByProductName($productName) {

        $query = $this->db->get_where('supermarket', array('productName' => $productName));

        return $query->result_array();
    }

    public function searchByBarcode($barcode) {
        $query = $this->db->get_where('supermarket', array('barcode' => $barcode));

        return $query->result_array();
    }

    public function searchByNameProductAndBarcode($productName,$barcode ) {
        $query = $this->db->get_where('supermarket', array('productName'=>$productName, 'barcode' => $barcode));

        return $query->result_array();
    }
    public function getVideotape() {

        $query = $this->db->get('vteka');

        return $query->result_array();
    }

    public function deleteById ($id) {

        $this->db->delete('supermarket', array('id' => $id));
    }

}