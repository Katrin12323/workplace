<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shoes extends CI_Model {

    public $brand;

    public $type;

    public $size;

    public $color;

    public $price;

    public $quantity;

    public function insertShoes()
    {
        $this->db->insert('shoesShop', $this);
    }

    public function getAllShoes()
    {
        $query = $this->db->get('shoesShop');

        return $query->result_array();
    }

    public function deleteShoesById($id)
    {
        $this->db->delete('shoesShop', array('id' => $id));
    }

    public function searchByType($type)
    {
        $query = $this->db->get_where('shoesShop', array('type' => $type));

        return $query->result_array();
    }

    public function getById($id)
    {
        $query = $this->db->get_where('shoesShop', array('id' =>$id));

        return $query->first_row();
    }

    public function update($id)
    {
        $this->db->update('shoesShop', $this, array('id' => $id));
    }
}

