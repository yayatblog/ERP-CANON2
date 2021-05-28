<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Return_gudang extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_returngudang');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Return_gudang';
        $data['return_gudang'] = $this->m_returngudang->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('return_gudang/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Return_gudang';

        $this->form_validation->set_rules('tanggal','Tanggal','required');
        $this->form_validation->set_rules('no_faktur','No_Faktur','required');
        $this->form_validation->set_rules('keterangan','Keterangan','required');
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('barang','Barang','required');
        $this->form_validation->set_rules('gudang_asal','Gudang_asal','required');
        $this->form_validation->set_rules('gudang_tujuan','Gudang_tujuan','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('return_gudang/tambah');
        }else {
            $this->m_returngudang->tambahDataReturn_gudang();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('return_gudang');
        }
        
    }
    public function hapus($id){
        $this->m_returngudang->hapusDataReturn_gudang($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('return_gudang');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Return_gudang';
        $data['return_gudang'] = $this->m_returngudang->getReturn_gudangById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('tanggal','Tanggal','required');
        $this->form_validation->set_rules('no_faktur','No_Faktur','required');
        $this->form_validation->set_rules('keterangan','Keterangan','required');
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('barang','Barang','required');
        $this->form_validation->set_rules('gudang_asal','Gudang_asal','required');
        $this->form_validation->set_rules('gudang_tujuan','Gudang_tujuan','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('return_gudang/edit',$data);
        }else {
            $this->m_returngudang->ubahDataReturn_gudang();
            $this->session->set_flashdata('flash','Diubah');
            redirect('return_gudang');
        }
}
}