<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Juice_distri extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_distri');
        $this->load->library('form_validation');
    }
    public function index() {
        $topik['judul'] = 'Halaman Menu Juice Distributor';
        // $data['produk'] = $this->m_juice->get_by_role();
        // if ($this->input->post('keyword')) {
        //     $data['produk'] = $this->m_jurnalumum->cariDataBarang();
        // }

        // Cek ada / tidaknya tanggal weekending
        // $weekending = $this->input->post('weekending') != "" ? $this->input->post('weekending') : null;

        $weekending = null;
        $tgl = null;
        $data['distri'] = $this->m_distri->tampil_data($weekending);
        $data['tgl_distri'] = $this->tgl_distri($tgl);
        // if ($this->input->post('keyword')) {
        //     $data['gudang'] = $this->m_gudang->cariDataGudang();
        // }
        $this->load->view('templates/header',$topik);
        $this->load->view('distri/index',$data);
        $this->load->view('templates/footer');
    }

    public function tampil_data($weekending = NULL) {
        echo json_encode($this->m_distri->tampil_data($weekending));
    }

    public function tgl_distri($tgl = NULL) {
        return $this->m_distri->tgl_distri($tgl);
    }

    public function getData($id) {
        echo json_encode($this->m_distri->getData($id));
    }

    public function tambah() {

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('location','Location','required');
        $this->form_validation->set_rules('manager','Manager','required');
        $this->form_validation->set_rules('profit','Profit','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('distri/tambah');
        } else {
            $this->m_distri->tambahDataDistri();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('juice_distri');
        }
    }

    public function edit() {

        $this->form_validation->set_rules('nama2','Nama','required');
        $this->form_validation->set_rules('location2','Location','required');
        $this->form_validation->set_rules('manager2','Manager','required');
        $this->form_validation->set_rules('profit2','Profit','required');

        $this->m_distri->editDataDistri();
        $this->session->set_flashdata('flash','Diedit');
        redirect('juice_distri');
    }
   
    public function hapus($id){
        $this->m_distri->hapusDataDistri($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('juice_distri');
    }
    
}