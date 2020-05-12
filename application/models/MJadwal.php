<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MJadwal extends CI_Model {
    public function getJadwalKelas($id_kelas){
        $hasil= $this->db->query("SELECT kelas.kode_kelas, jadwal.jurusan, jadwal.hari, jadwal.mata_kuliah, jadwal.jam_mulai, jadwal.jam_selesai FROM jadwal INNER JOIN kelas on jadwal.id_kelas=kelas.id
        where id_kelas='$id_kelas' order by jam_mulai asc");
        return $hasil->result();
    }
}
