<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeautyProduct extends CI_Model {

    public $brand;
    public $kind;
    public $name;
    public $collection;
    public $price;
    public $quantity;

    public function insertNewBeautyProduct() {

        $this->db->insert('beautyShop',$this);
    }

    public function getById($id)
    {
        $query = $this->db->get_where('beautyShop', array('id' => $id));

        return $query->first_row();
    }

    public function getAllProduct(){

        $query = $this->db->get('beautyShop');

        return $query->result_array();
    }

    public function searchByBrand($brand) {

        $query = $this->db->get_where('beautyShop', array('brand' => $brand));

        return $query->result_array();
    }

    public function deleteById($id) {
        $this->db->delete('beautyShop', array('id' =>$id));
    }

    public function update($id)
    {
        $this->db->update('beautyShop', $this, array('id' => $id));
    }

}