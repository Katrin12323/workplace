<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal extends CI_Model
{
    public $nameOfTheType;
    public $kind;
    public $habitat;
    public $nameOfTheAnimal;
    public $age;

    public function insertAnimal()
    {

        $this->db->insert('animals', $this);
    }

    public function searchByType($nameOfTheType)
    {

        $query = $this->db->get_where('animals', array('nameOfTheType' => $nameOfTheType));

        return $query->result_array();
    }

    public function searchByHabitat($habitat)
    {
        $query = $this->db->get_where('animals', array('habitat' => $habitat));

        return $query->result_array();
    }

    public function searchByHabitatAndByType($nameOfTheType, $habitat)
    {
        $query = $this->db->get_where('animals', array('nameOfTheType' => $nameOfTheType, 'habitat' => $habitat));

        return $query->result_array();
    }

    public function getById($id)
    {
       $query = $this->db->get_where('animals', array('id' => $id));
        return $query->first_row();
    }

    public function getAllAnimals()
    {
        $query = $this->db->get('animals');

        return $query->result_array();
    }

    public function deleteById($id)
    {
        $this->db->delete('animals', array('id' => $id));
    }

    public function updateAnimal($id)
    {
        $this->db->update('animals', $this, array('id' => $id));
    }
}