<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard2 extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_barang');
        $this->load->model('M_kategori');
        $this->load->model('M_gudang');
        $this->load->model('M_karyawan');
        // $this->check_login();
		if ($this->session->userdata('id_role') != 2) {
            redirect('auth/login', 'refresh');
        }
    }
	public function index()
	{
        $topik['judul'] = 'Halaman Dashboard';
		$this->load->view('templates2/header',$topik);
        $this->load->view('dashboard2');
        $this->load->view('templates2/footer');
	}
}
