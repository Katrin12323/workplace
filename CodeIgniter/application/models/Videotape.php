<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videotape extends CI_Model {

    public $title;
    public $year;
    public $country;
    public $genre;
    public $shortDescription;
    public $mainActors;
    public $quantity;

    public function insertVideotape() {
        $this->db->insert('vteka', $this);

    }

    public function getVideotape() {

        $query = $this->db->get('vteka');

        return $query->result_array();
    }

    public function deleteById($id)
    {
        $this->db->delete('vteka', array('id' => $id));
    }
}
