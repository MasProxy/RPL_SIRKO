<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MGedung extends CI_Model {
    public function getAllGedung(){
        $hasil= $this->db->query("SELECT * FROM Gedung order by fakultas asc");
        return $hasil->result();
    }
}