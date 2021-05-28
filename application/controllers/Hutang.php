<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hutang extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_hutang');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Hutang';
        $data['hutang'] = $this->m_hutang->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('hutang/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Hutang';

        $this->form_validation->set_rules('tgl','Tgl','required');
        $this->form_validation->set_rules('no_referensi','No_referensi','required');
        $this->form_validation->set_rules('jatuh_tempo','Jatuh_Tempo','required');
        $this->form_validation->set_rules('mata_uang','Mata_uang','required');
        $this->form_validation->set_rules('debit','Debit','required');
        $this->form_validation->set_rules('kredit','Kredit','required');
        $this->form_validation->set_rules('saldo','Saldo','required');




        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('hutang/tambah');
        }else {
            $this->m_hutang->tambahDataHutang();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('hutang');
        }
        
    }
    // public function detail($id){
    //     $topik['judul'] = 'Detail Data Karyawan';
    //     $data['hutang'] = $this->m_hutang->getPengirimanById($id);
    //     $this->load->view('templates/header',$topik);
    //     $this->load->view('hutang/detail',$data);
    // }
    public function hapus($id){
        $this->m_hutang->hapusDataHutang($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('hutang');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Hutang';
        $data['hutang'] = $this->m_hutang->getHutangById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('tgl','Tgl','required');
        $this->form_validation->set_rules('no_referensi','No_referensi','required');
        $this->form_validation->set_rules('jatuh_tempo','Jatuh_Tempo','required');
        $this->form_validation->set_rules('mata_uang','Mata_uang','required');
        $this->form_validation->set_rules('debit','Debit','required');
        $this->form_validation->set_rules('kredit','Kredit','required');
        $this->form_validation->set_rules('saldo','Saldo','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('hutang/edit',$data);
        }else {
            $this->m_hutang->ubahDataHutang();
            $this->session->set_flashdata('flash','Diubah');
            redirect('hutang');
        }
}
}