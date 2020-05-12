<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CKelas extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->library('session');
        $this->load->model('MKelas');
        $this->load->model('MGedung');
    }

    public function ambilGedung(){
        $this->session->set_userdata('data_gedung', $this->MGedung->getAllGedung());
    }

    public function ambilKelasGedung(){
        $id_gedung = $this->input->post('tampungid');
        $this->session->set_userdata('data_kelas', $this->MKelas->getAllKelas($id_gedung));
        $this->load->view('VKelas');
    }


	public function index(){
        $this->ambilGedung();
		$this->load->view('VGedung');
    }

    public function ambilKelasPilihan(){
        $this->session->set_userdata('idKelasPilihan', $this->input->post('tampungid'));
        redirect(site_url('Cjadwal'));
    }

    
}
