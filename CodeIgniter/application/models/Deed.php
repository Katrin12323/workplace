<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deed extends CI_Model
{
    public $personalNumber;
    public $type;
    public $actNumber;
    public $deedNumber;

    public function insertDeed()
    {
        $this->db->insert('deeds', $this);
    }

    public function searchByPersonalNumber($personalNumber) {
        $query = $this->db->get_where('deeds', array('personalNumber' => $personalNumber));

        return $query->result_array();
    }

    public function getAllDeeds()
    {
        $query = $this->db->get('deeds');

        return $query->result_array();
    }

    public function getById($id)
    {
        $query = $this->db->get_where('deeds', array('id' => $id));

        return $query->first_row();
    }

    public function deleteById($id)
    {
        $this->db->delete('deeds', array('id' => $id));
    }

    public function updateById($id)
    {
        $this->db->update('deeds', $this, array('id' => $id));
    }
}