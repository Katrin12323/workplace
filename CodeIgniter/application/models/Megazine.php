<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Megazine extends CI_Model {

    public function insertNewMagazine() {
        $this->db->insert('magazines', $this);
    }

    public function searchByName($name) {
        $query = $this->db->get_where('magazines', array('name' => $name));

        return $query->result_array();
    }

    public function getById($id)
    {
        $query = $this->db->get_where('magazines', array('id' => $id));

        return $query->first_row();
    }

    public function getAllMagazines() {
        $query = $this->db->get('magazines');

        return $query->result_array();
    }

    public function deleteById($id) {
        $this->db->delete('magazines', array('id' => $id));
    }

    public function updateById($id,$magazine )
    {
        $this->db->update('magazines',$magazine, array('id' => $id));
    }

}
