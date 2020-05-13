<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MReservasi extends CI_Model {
    public function getReservasi($id){
        $hasil= $this->db->query("SELECT * FROM reservasi where id = '$id'");
        return $hasil->result();
    }
    
    public function finishReservasi($id, $status){
        $this->db->query("UPDATE reservasi SET status_reservasi = '$status' where id = '$id'");
    }

    public function addReservasi($id_akun, $id_kelas, $hari, $waktu, $status, $alasan){
        $this->db->query("INSERT INTO reservasi(id_akun, id_kelas, hari, waktu, status_reservasi, alasan)
        VALUES ('$id_akun', '$id_kelas', '$hari', '$waktu', '$status', '$alasan')");
    }

    public function getUserReservasi($id_akun){
        //$this->db->query("SELECT * JOIN ");
    }
}
