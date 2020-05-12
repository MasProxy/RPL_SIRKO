<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAkun extends CI_Model {
    public function getid($username, $password){
        $hasil= $this->db->query("SELECT id_akun FROM akun where username = '$username' and password = '$password'");
        return $hasil->row()->id_akun;
    }
}
