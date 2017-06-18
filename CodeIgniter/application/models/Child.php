<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Child extends CI_Model
{
    public $firstName;
    public $lastName;
    public $personalNumber;
    public $years;
    public $diseases;

    public function insertChild()
    {
        $this->db->insert('children', $this);
    }

    public function getAllChild()
    {
        $query=$this->db->get('children');

        return $query->result_array();
    }

    public function getById($id)
    {
        $query = $this->db->get_where('children', array('id' => $id));

        return $query->first_row();
    }

    public function searchByPersonalNumber($personalNumber)
    {
        $query = $this->db->get_where('children', array('personalNumber' => $personalNumber));

        return $query->first_row();
    }

    public function deleteChildById($id)
    {
        $this->db->delete('children', array('id' => $id));
    }

    public function update($id)
    {
        $this->db->update('children', $this, array('id' => $id));
    }

}