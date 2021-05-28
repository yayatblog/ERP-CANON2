<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {
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
        $this->load->view('templates/header',$topik);
        $this->load->view('history/index');
        $this->load->view('templates/footer');
    }
}