<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MKelas extends CI_Model {
    public function getAllKelasGedung($id_gedung){
        $hasil= $this->db->query("SELECT * FROM kelas where id_gedung = '$id_gedung' order by lantai asc");
        return $hasil->result();
    }
    
    public function getAllKelas(){
        $hasil= $this->db->query("SELECT * FROM kelas  order by lantai and id_gedung asc");
        return $hasil->result();
    }
}
