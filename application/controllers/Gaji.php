<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_gaji');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Gaji';
        $data['gaji'] = $this->m_gaji->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('gajikaryawan/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Gaji';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('jabatan','Jabatan','required');
        $this->form_validation->set_rules('jumlah_anak','Jumlah_anak','required');
        $this->form_validation->set_rules('status','Status','required');
        $this->form_validation->set_rules('gapok','Gapok','required');
        $this->form_validation->set_rules('tunjangan_jabatan','Tunjangan_jabatan','required');
        $this->form_validation->set_rules('gaji_diterima','Gaji_diterima','required');



        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('gajikaryawan/tambah');
        }else {
            $this->m_gaji->tambahDataGaji();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('gaji');
        }
        
    }
    public function hapus($id){
        $this->m_gaji->hapusDataGaji($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('gaji');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Daftar Mitra';
        $data['gaji'] = $this->m_gaji->getGajiById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('jabatan','Jabatan','required');
        $this->form_validation->set_rules('jumlah_anak','Jumlah_anak','required');
        $this->form_validation->set_rules('status','Status','required');
        $this->form_validation->set_rules('gapok','Gapok','required');
        $this->form_validation->set_rules('tunjangan_jabatan','Tunjangan_jabatan','required');
        $this->form_validation->set_rules('gaji_diterima','Gaji_diterima','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('gajikaryawan/edit',$data);
        }else {
            $this->m_gaji->ubahDataGaji();
            $this->session->set_flashdata('flash','Diubah');
            redirect('gaji');
        }
}
}