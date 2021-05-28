<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History2 extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // $this->load->model('m_gudang');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu History';
        // $data['gudang'] = $this->m_gudang->tampil_data();
        // if ($this->input->post('keyword')) {
        //     $data['gudang'] = $this->m_gudang->cariDataGudang();
        // }
        $this->load->view('templates2/header',$topik);
        $this->load->view('history2/index');
        $this->load->view('templates2/footer');
    }
}