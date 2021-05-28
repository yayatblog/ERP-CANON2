<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendapatan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_pendapatanlain');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Pendapatan Lain';
        $data['pendapatanlain'] = $this->m_pendapatanlain->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('pendapatanlain/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Pendapatan Lain';

        $this->form_validation->set_rules('tgl','Tgl','required');
        $this->form_validation->set_rules('no_faktur','No_Faktur','required');
        $this->form_validation->set_rules('transaksi','Transaksi','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('pendapatanlain/tambah');
        }else {
            $this->m_pendapatanlain->tambahDataPendapatan();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('pendapatan');
        }
        
    }
    // public function detail($id){
    //     $topik['judul'] = 'Detail Data Karyawan';
    //     $data['pendapatanlain'] = $this->m_pendapatanlain->getPengirimanById($id);
    //     $this->load->view('templates/header',$topik);
    //     $this->load->view('pendapatanlain/detail',$data);
    // }
    public function hapus($id){
        $this->m_pendapatanlain->hapusDataPendapatan($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('pendapatan');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Pendapatan Lain';
        $data['pendapatanlain'] = $this->m_pendapatanlain->getPendapatanById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('tgl','Tgl','required');
        $this->form_validation->set_rules('no_faktur','No_Faktur','required');
        $this->form_validation->set_rules('transaksi','Transaksi','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('pendapatanlain/edit',$data);
        }else {
            $this->m_pendapatanlain->ubahDataPendapatan();
            $this->session->set_flashdata('flash','Diubah');
            redirect('pendapatan');
        }
}
}