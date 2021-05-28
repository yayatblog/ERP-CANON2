<?php

class Labarugi extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_labarugi');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Labarugi';
        $data['labarugi'] = $this->m_labarugi->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('labarugi/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Labarugi';

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('description','Description','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('labarugi/tambah');
        }else {
            $this->m_labarugi->tambahDataLabarugi();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('labarugi');
        }
        
    }
    public function hapus($id){
        $this->m_labarugi->hapusDataLabarugi($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('labarugi');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Dosen';
        $data['labarugi'] = $this->m_labarugi->getLabarugiById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('description','Description','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('labarugi/edit',$data);
        }else {
            $this->m_labarugi->ubahDataLabarugi();
            $this->session->set_flashdata('flash','Diubah');
            redirect('labarugi');
        }
    }
}
