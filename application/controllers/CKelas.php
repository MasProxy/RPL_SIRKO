<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CKelas extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->library('session');
        $this->load->model('MKelas');
    }

	public function index(){
        $id_gedung=0;
        $this->session->set_userdata('data_kelas', $this->MKelas->getAllKelas($id_gedung));
		$this->load->view('VKelas');
    }
}
