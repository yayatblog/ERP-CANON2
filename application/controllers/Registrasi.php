<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // $this->load->model('m_login');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Registrasi';
        // $data['login'] = $this->m_login->tampil_data();
        // $this->load->view('templates/header',$topik);
        $this->load->view('registrasi',$topik);
        // $this->load->view('templates/footer');
    }
}