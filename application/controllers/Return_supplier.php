<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Return_supplier extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_returnsupplier');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Return_supplier';
        $data['return_supplier'] = $this->m_returnsupplier->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('return_supplier/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Return_supplier';

        $this->form_validation->set_rules('tanggal','Tanggal','required');
        $this->form_validation->set_rules('no_faktur','No_Faktur','required');
        $this->form_validation->set_rules('keterangan','Keterangan','required');
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('barang','Barang','required');
        $this->form_validation->set_rules('gudang_asal','Gudang_asal','required');
        $this->form_validation->set_rules('supplier_tujuan','Supplier_tujuan','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('return_supplier/tambah');
        }else {
            $this->m_returnsupplier->tambahDataReturn_supplier();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('return_supplier');
        }
        
    }
    public function hapus($id){
        $this->m_returnsupplier->hapusDataReturn_supplier($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('return_supplier');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Return_supplier';
        $data['return_supplier'] = $this->m_returnsupplier->getReturn_supplierById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('tanggal','Tanggal','required');
        $this->form_validation->set_rules('no_faktur','No_Faktur','required');
        $this->form_validation->set_rules('keterangan','Keterangan','required');
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('barang','Barang','required');
        $this->form_validation->set_rules('gudang_asal','Gudang_asal','required');
        $this->form_validation->set_rules('supplier_tujuan','Supplier_tujuan','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('return_supplier/edit',$data);
        }else {
            $this->m_returnsupplier->ubahDataReturn_supplier();
            $this->session->set_flashdata('flash','Diubah');
            redirect('return_supplier');
        }
}
}