<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Model
{
    public $brand;
    public $model;
    public $year;
    public $color;

    public function insertCar()
    {

        $this->db->insert('cars', $this);
    }
    public function searchByBrand($brand)
    {

        $query = $this->db->get_where('cars', array('brand' => $brand));

        return $query->result_array();

    }

    public function searchByModel($model)
    {

        $query = $this->db->get_where('cars', array('model' => $model));

        return $query->result_array();
    }

    public function searchByBrandAndModel($brand, $model)
    {
        $query = $this->db->get_where('cars', array('brand' => $brand, 'model' => $model));

        return $query->result_array();
    }

      public function getCars() {

          $query = $this->db->get('cars');

          return $query->result_array();
      }

}

