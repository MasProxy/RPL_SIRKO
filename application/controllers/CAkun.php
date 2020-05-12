<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CAkun extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->library('session');
        $this->load->model('MAkun');
    }

	public function index(){
		$this->load->view('VLogin');
    }
    
    public function verifikasi(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if($this->MAkun->getid($username, $password)!=NULL){
            $this->session->set_userdata('id', $this->MAkun->getid($username, $password));
            $this->session->set_userdata('data_akun', $this->MAkun->getdata($this->session->userdata('id')));
            redirect(site_url('CKelas'));
        }else{
            redirect(site_url());
        }
    }
}
