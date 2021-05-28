<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_daftar');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Gudang';
        $data['daftarmitra'] = $this->m_daftar->tampil_data();
        if ($this->input->post('keyword')) {
            $data['daftarmitra'] = $this->m_daftar->cariDataMitra();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('daftarmitra/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Daftar Mitra';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('kategori','Kategori','required');
        $this->form_validation->set_rules('lead','Lead','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('daftarmitra/tambah');
        }else {
            $this->m_daftar->tambahDataMitra();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('daftar');
        }
        
    }
    public function hapus($id){
        $this->m_daftar->hapusDataMitra($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('daftar');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Daftar Mitra';
        $data['daftarmitra'] = $this->m_daftar->getMitraById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('kategori','Kategori','required');
        $this->form_validation->set_rules('lead','Lead','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('daftarmitra/edit',$data);
        }else {
            $this->m_daftar->ubahDataMitra();
            $this->session->set_flashdata('flash','Diubah');
            redirect('daftar');
        }
}
    
    
}