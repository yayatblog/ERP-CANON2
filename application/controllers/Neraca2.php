<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Neraca2 extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_neraca');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Neraca Lain';
        $data['neraca'] = $this->m_neraca->tampil_data();
        $this->load->view('templates2/header',$topik);
        $this->load->view('neraca2/index',$data);
        $this->load->view('templates2/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Neraca Lain';

        $this->form_validation->set_rules('tgl','Tgl','required');
        $this->form_validation->set_rules('no_faktur','No_Faktur','required');
        $this->form_validation->set_rules('transaksi','Transaksi','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/header',$data);
            $this->load->view('neraca/tambah');
        }else {
            $this->m_neraca->tambahDataNeraca();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('neraca');
        }
        
    }
    // public function detail($id){
    //     $topik['judul'] = 'Detail Data Karyawan';
    //     $data['neraca'] = $this->m_neraca->getPengirimanById($id);
    //     $this->load->view('templates2/header',$topik);
    //     $this->load->view('neraca/detail',$data);
    // }
    public function hapus($id){
        $this->m_neraca->hapusDataNeraca($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('neraca');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Neraca Lain';
        $data['neraca'] = $this->m_neraca->getNeracaById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('tgl','Tgl','required');
        $this->form_validation->set_rules('no_faktur','No_Faktur','required');
        $this->form_validation->set_rules('transaksi','Transaksi','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/header',$topik);
            $this->load->view('neraca/edit',$data);
        }else {
            $this->m_neraca->ubahDataNeraca();
            $this->session->set_flashdata('flash','Diubah');
            redirect('neraca');
        }
}
}