<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Juice_4u extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_juice');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Juice4U';
        // $data['produk'] = $this->m_juice->get_by_role();
        // if ($this->input->post('keyword')) {
        //     $data['produk'] = $this->m_jurnalumum->cariDataBarang();
        // }
        $data['tgl'] = $this->get_tgl();
        // if ($this->input->post('keyword')) {
        //     $data['gudang'] = $this->m_gudang->cariDataGudang();
        // }
        $this->load->view('templates/header',$topik);
        $this->load->view('juice/index',$data);
        $this->load->view('templates/footer');
    }

    public function get_tgl() {
        return $this->m_juice->get_tgl();
    }

    public function getDataById($id) {
        echo json_encode($this->m_juice->getDataById($id));
    }

    public function tampil_data($weekending = NULL) {
        echo json_encode($this->m_juice->tampil_data($weekending));
    }

    public function tambah(){
        
        $data['judul'] = 'Form Tambah Data';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('lokasi','Lokasi','required');
        $this->form_validation->set_rules('point','Point','required');
        $this->form_validation->set_rules('omzet','Omzet','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('juice/tambah');
        }else {
            $this->m_juice->tambahDataJuice();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('juice_4u');
        }
    }

    public function edit() {
        $this->form_validation->set_rules('nama2','Nama','required');
        $this->form_validation->set_rules('lokasi2','Lokasi','required');
        $this->form_validation->set_rules('point2','Point','required');
        $this->form_validation->set_rules('omzet2','Omzet','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('juice/edit');
        } else {
            $this->m_juice->editDataJuice();
            $this->session->set_flashdata('flash','Diedit');
            redirect('juice_4u');
        }
    }
   
    public function hapus($id){
        $this->m_juice->hapusDataJuice($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('juice_4u');
    }
    
}