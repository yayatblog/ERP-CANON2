<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer_gudang extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_transfergudang');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Transfer Gudang';
        $data['tf_gudang'] = $this->m_transfergudang->tampil_data();
        $this->load->view('templates/header',$topik);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
        $this->load->view('transfergudang/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Transfer Gudang';

        $this->form_validation->set_rules('tgl','Tgl','required');
        $this->form_validation->set_rules('no_transfer','No_transfer','required');
        $this->form_validation->set_rules('keterangan','Keterangan','required');
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('barang','Barang','required');
        $this->form_validation->set_rules('gudang_asal','Gudang_asal','required');
        $this->form_validation->set_rules('gudang_tujuan','Gudang_tujuan','required');
        $this->form_validation->set_rules('qty','Qty','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('transfergudang/tambah');
        }else {
            $this->m_transfergudang->tambahDataTfGudang();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('transfer_gudang');
        }
        
    }
    public function hapus($id){
        $this->m_transfergudang->hapusDataTfGudang($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('transfer_gudang');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Transfer Gudang';
        $data['tf_gudang'] = $this->m_transfergudang->getTfGudangById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('tgl','Tgl','required');
        $this->form_validation->set_rules('no_transfer','No_transfer','required');
        $this->form_validation->set_rules('keterangan','Keterangan','required');
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('barang','Barang','required');
        $this->form_validation->set_rules('gudang_asal','Gudang_asal','required');
        $this->form_validation->set_rules('gudang_tujuan','Gudang_tujuan','required');
        $this->form_validation->set_rules('qty','Qty','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('transfergudang/edit',$data);
        }else {
            $this->m_transfergudang->ubahDataTfGudang();
            $this->session->set_flashdata('flash','Diubah');
            redirect('transfer_gudang');
        }
}
}