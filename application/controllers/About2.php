<?php

class About2 extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_daftar');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman About';
        $this->load->view('templates2/header',$topik);
		$data['profile'] = $this->M_daftar->tampil_mitra();
        $this->load->view('about2',$data);
        $this->load->view('templates2/footer');
    }
}