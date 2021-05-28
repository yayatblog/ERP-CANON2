<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekspedisi extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_ekspedisi');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Ekspedisi';
        $data['daftarekspedisi'] = $this->M_ekspedisi->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('daftarekspedisi/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Ekspedisi';

        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('nama','Nama','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('daftarekspedisi/tambah');
        }else {
            $this->M_ekspedisi->tambahDataEkspedisi();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('ekspedisi');
        }
        
    }
    public function hapus($id){
        $this->M_ekspedisi->hapusDataEkspedisi($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('ekspedisi');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Daftar Mitra';
        $data['daftarekspedisi'] = $this->M_ekspedisi->getEkspedisiById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('nama','Nama','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('daftarekspedisi/edit',$data);
        }else {
            $this->M_ekspedisi->ubahDataEkspedisi();
            $this->session->set_flashdata('flash','Diubah');
            redirect('ekspedisi');
        }
}
}