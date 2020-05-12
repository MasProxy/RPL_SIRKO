<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MKelas extends CI_Model {
    public function getAllKelas($id_gedung){
        $hasil= $this->db->query("SELECT * FROM kelas where id_gedung = '$id_gedung' order by lantai asc");
        return $hasil->result();
    }
}
