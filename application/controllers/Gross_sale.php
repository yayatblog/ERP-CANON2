<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gross_sale extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_sale');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Gross_sale';
        $data['grosssale'] = $this->m_sale->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('grosssale/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Gross_sale';

        $this->form_validation->set_rules('manager','Manager','required');
        $this->form_validation->set_rules('lokasi','Lokasi','required');
        $this->form_validation->set_rules('gross_sale','Gross_sale','required');
        $this->form_validation->set_rules('profit','Profit','required');
        $this->form_validation->set_rules('pcs','Pcs','required');
        $this->form_validation->set_rules('point','Point','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('grosssale/tambah');
        }else {
            $this->m_sale->tambahDataSale();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('gross_sale');
        }
        
    }
    public function hapus($id){
        $this->m_sale->hapusDataSale($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('gross_sale');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Hot News';
        $data['grosssale'] = $this->m_sale->getSaleById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('manager','Manager','required');
        $this->form_validation->set_rules('location','Location','required');
        $this->form_validation->set_rules('gross_sale','Gross_sale','required');
        $this->form_validation->set_rules('profit','Profit','required');
        $this->form_validation->set_rules('pcs','Pcs','required');
        $this->form_validation->set_rules('point','Point','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('grosssale/edit',$data);
        }else {
            $this->m_sale->ubahDataSale();
            $this->session->set_flashdata('flash','Diubah');
            redirect('gross_sale');
        }
}
}