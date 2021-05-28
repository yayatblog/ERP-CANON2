<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perubahanmodal extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_laporanmodal');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Pengiriman Barang';
        $data['laporanmodal'] = $this->m_laporanmodal->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('laporanmodal/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Pengiriman';

        $this->form_validation->set_rules('kode_id','Kode_id','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('qty_karton','Qty_karton','required');
        $this->form_validation->set_rules('qty_perkaton','Qty_perkarton','required');
        $this->form_validation->set_rules('total','Total','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('laporanmodal/tambah');
        }else {
            $this->m_laporanmodal->tambahDataPengiriman();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('laporanmodal');
        }
        
    }
    // public function detail($id){
    //     $topik['judul'] = 'Detail Data Karyawan';
    //     $data['laporanmodal'] = $this->m_laporanmodal->getPengirimanById($id);
    //     $this->load->view('templates/header',$topik);
    //     $this->load->view('laporanmodal/detail',$data);
    // }
    public function hapus($id){
        $this->m_laporanmodal->hapusDataPengiriman($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('laporanmodal');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Pengiriman';
        $data['laporanmodal'] = $this->m_laporanmodal->getPengirimanById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('kode_id','Kode_id','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('qty_karton','Qty_karton','required');
        $this->form_validation->set_rules('qty_perkaton','Qty_perkarton','required');
        $this->form_validation->set_rules('total','Total','required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('laporanmodal/edit',$data);
        }else {
            $this->m_laporanmodal->ubahDataPengiriman();
            $this->session->set_flashdata('flash','Diubah');
            redirect('laporanmodal');
        }
}
}