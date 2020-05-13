<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CJadwal extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->library('session');
        $this->load->model('MJadwal');
        $this->load->model('MKelas');
    }

    public function ambilJadwalKelas(){
        $idkelas= $this->session->userdata('idKelasPilihan');
        $this->session->set_userdata('data_jadwal', $this->MJadwal->getJadwalKelas($idkelas));
    }

	public function index(){
        $this->ambilJadwalKelas();
		$this->load->view('VJadwal');
    }
    
    public function masukEditJadwal(){
        $id = $this->input->post('tampungid');
        $this->session->set_userdata('id_jadwal', $id);
        $this->session->set_userdata('data_jadwal_pilihan', $this->MJadwal->getJadwalKelasPilihan($id));
        $this->session->set_userdata('data_semua_kelas', $this->MKelas->getAllKelas());
        $this->load->view('VEditJadwal');
    }

    public function editJadwal(){
        $id_jadwal = $this->session->userdata('id_jadwal');
        $id_kelas = $this->input->post('kelas');
        $hari = $this->input->post('hari');
        $jam_mulai = $this->input->post('jam_mulai');
        $jam_selesai = $this->input->post('jam_selesai');
        $this->MJadwal->updateJadwal($id_jadwal, $id_kelas, $jam_mulai, $jam_selesai, $hari);
        redirect(site_url('CJadwal'));
    }
}
