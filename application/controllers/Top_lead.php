<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top_lead extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_lead');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Top Leader';
        $data['toplead'] = $this->m_lead->tampil_data();
        $data['tgl'] = $this->m_lead->tampil_weekending();
        $this->load->view('templates/header',$topik);                                    
        $this->load->view('toplead/index',$data);
        $this->load->view('templates/footer');
    }

    public function tampil_data2($weekending = NULL) {
        echo json_encode($this->m_lead->tampil_data2($weekending));
    }

    public function getDataById($id) {
        echo json_encode($this->m_lead->getDataById($id));
    }

    public function tambah() {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('gudang','Gudang','required');
        $this->form_validation->set_rules('manager','Manager','required');
        $this->form_validation->set_rules('poin_sendiri','Poin_sendiri','required');
        $this->form_validation->set_rules('poin_team','Poin_team','required');
        $this->form_validation->set_rules('peringkat_langsung','Peringkat_langsung','required');
        $this->form_validation->set_rules('peringkat_tidaklangsung','Peringkat_tidaklangsung','required');
        $this->form_validation->set_rules('jumlah_leader','Jumlah_leader','required');
        $this->form_validation->set_rules('jumlah_distributor','Jumlah_distributor','required');
        $this->form_validation->set_rules('jumlah_retrain','Jumlah_retrain','required');
        $this->form_validation->set_rules('jumlah_observasi','Jumlah_observasi','required');
        $this->form_validation->set_rules('jumlah_team','Jumlah_team','required');

        $this->m_lead->tambahDataToplead();
        $this->session->set_flashdata('flash','Ditambahkan');
        redirect('top_lead');
    
        
    }

    public function edit() {
        
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('gudang','Gudang','required');
        $this->form_validation->set_rules('manager','Manager','required');
        $this->form_validation->set_rules('poin_sendiri','Poin_sendiri','required');
        $this->form_validation->set_rules('poin_team','Poin_team','required');
        $this->form_validation->set_rules('peringkat_langsung','Peringkat_langsung','required');
        $this->form_validation->set_rules('peringkat_tidaklangsung','Peringkat_tidaklangsung','required');
        $this->form_validation->set_rules('jumlah_leader','Jumlah_leader','required');
        $this->form_validation->set_rules('jumlah_distributor','Jumlah_distributor','required');
        $this->form_validation->set_rules('jumlah_retrain','Jumlah_retrain','required');
        $this->form_validation->set_rules('jumlah_observasi','Jumlah_observasi','required');
        $this->form_validation->set_rules('jumlah_team','Jumlah_team','required');

        $this->m_lead->editDataToplead();
        $this->session->set_flashdata('flash','Diedit');
        redirect('top_lead');
    }

    public function hapus($id){
        $this->m_lead->hapusDataToplead($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('top_lead');
    }
}