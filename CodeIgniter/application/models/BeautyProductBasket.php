<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeautyProductBasket extends CI_Model
{
    public function updateBasket($basket, $id)
    {
        $this->db->update('beautyShopBasket', $basket, array('id' => $id));
    }
    
    public function insert($basket)
    {
        $this->db->insert('beautyShopBasket', $basket);
    }
    
    public function getLastBasketId()
    {
        $query = $this->db->get('beautyShopBasket');
        return $query->last_row()->id;
    }
    public function getBasketById($basketId)
    {
        $query = $this->db->get_where('beautyShopBasket', array('id' => $basketId ));
        return $query->first_row();
    }
}