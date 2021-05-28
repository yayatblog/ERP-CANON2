<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saving_Overrides extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_saving');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Summary';
        $data['overrides'] = $this->m_saving->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('savingoverrides/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Saving Overrides';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('kantor','Kantor','required');
        $this->form_validation->set_rules('summary','Harga_manager','required');
        $this->form_validation->set_rules('saldo_awal','Saldo_awal','required');
        $this->form_validation->set_rules('masuk','Masuk','required');
        $this->form_validation->set_rules('keluar','Keluar','required');
        $this->form_validation->set_rules('total','Total','required');
        $this->form_validation->set_rules('total_saving','Total_saving','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('savingoverrides/tambah');
        }else {
            $this->m_saving->tambahDataSummary();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('saving_overrides');
        }
        
    }
    public function hapus($id){
        $this->m_saving->hapusDataSummary($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('saving_overrides');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Summary';
        $data['overrides'] = $this->m_saving->getSummaryById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('kantor','Kantor','required');
        $this->form_validation->set_rules('summary','Harga_manager','required');
        $this->form_validation->set_rules('saldo_awal','Saldo_awal','required');
        $this->form_validation->set_rules('masuk','Masuk','required');
        $this->form_validation->set_rules('keluar','Keluar','required');
        $this->form_validation->set_rules('total','Total','required');
        $this->form_validation->set_rules('total_saving','Total_saving','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('savingoverrides/edit',$data);
        }else {
            $this->m_saving->ubahDataSummary();
            $this->session->set_flashdata('flash','Diubah');
            redirect('saving_overrides');
        }
}
}