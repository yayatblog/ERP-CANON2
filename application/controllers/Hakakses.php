<?php

class Hakakses extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_role');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu User';
        $data['tbl_role'] = $this->m_role->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('hakakses/index',$data);
        $this->load->view('templates/footer');
    }
    
}