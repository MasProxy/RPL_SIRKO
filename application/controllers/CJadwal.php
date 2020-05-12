<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CJadwal extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->library('session');
        $this->load->model('MJadwal');
    }

    public function ambilJadwalKelas(){
        $idkelas= $this->session->userdata('idKelasPilihan');
        $this->session->set_userdata('data_jadwal', $this->MJadwal->getJadwalKelas($idkelas));
    }

	public function index(){
        $this->ambilJadwalKelas();
		$this->load->view('VJadwal');
    }
    
    
}
