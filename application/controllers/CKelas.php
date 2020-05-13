<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CKelas extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->library('session');
        $this->load->model('MKelas');
        $this->load->model('MGedung');
        $this->load->model('MReservasi');
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
		$this->load->view('VMenu');
    }

    public function masukAjukanReservasi(){
        $this->load->view('VAjukanReservasi');
    }

    public function masukLihatReservasi(){

    }

    public function masukLihatJadwal(){
        $this->ambilGedung();
        $this->load->view('VGedung');
    }
    
    public function Logout(){
        $this->load->view('VLogin');
    }

    public function ambilKelasPilihan(){
        $this->session->set_userdata('idKelasPilihan', $this->input->post('tampungid'));
        redirect(site_url('CJadwal'));
    }

    public function tambahReservasi(){
        $id_akun = $this->session->userdata('id_akun');
        $id_kelas = $this->session->userdata('idKelasPilihan');
        $alasan = $this->input->post('alasan');
        $hari = $this->input->post('hari');
        $waktu = $this->input->post('waktu');
        $status = "Pending";
        $this->MReservasi->addReservasi($id_akun, $id_kelas, $hari, $waktu, $status, $alasan);
        redirect(site_url('CKelas'));
    }

    
}
