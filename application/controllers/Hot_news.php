<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hot_news extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_news');
        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Hot_news';
        $data['tgl'] = $this->m_news->weekending();
        $this->load->view('templates/header',$topik);
        $this->load->view('hotnews/index',$data);
        $this->load->view('templates/footer');
    }

    public function getData($weekending = NULL) {
        echo json_encode($this->m_news->getData($weekending));
    }

    public function getDataById($id) {
        echo json_encode($this->m_news->getDataById($id));
    }

    public function tambah() {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('gudang','Gudang','required');
        $this->form_validation->set_rules('manager','Manager','required');
        $this->form_validation->set_rules('subject','Subject','required');

        $this->m_news->tambahDataNews();
        $this->session->set_flashdata('flash','Ditambahkan');
        redirect('hot_news');        
    }
    public function hapus($id){
        $this->m_news->hapusDataNews($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('hot_news');
    }

    public function edit() {
        $this->form_validation->set_rules('nama2','Nama','required');
        $this->form_validation->set_rules('gudang2','Gudang','required');
        $this->form_validation->set_rules('manager2','Manager','required');
        $this->form_validation->set_rules('subject2','Subject','required');

        $this->m_news->ubahDataNews();
        $this->session->set_flashdata('flash','Diubah');
        redirect('hot_news');

    }
}