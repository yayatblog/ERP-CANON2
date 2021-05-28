<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnalumum extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_jurnalumum');
        $this->load->library('form_validation');
    }
    public function index() {
        $topik['judul'] = 'Halaman Menu Jurnal Umum';
        // $data['produk'] = $this->m_jurnalumum->get_by_role();
        // if ($this->input->post('keyword')) {
        //     $data['produk'] = $this->m_jurnalumum->cariDataBarang();
        // }
        // $data['jurnalumum'] = $this->m_jurnalumum->tampil_data();
        // if ($this->input->post('keyword')) {
        //     $data['gudang'] = $this->m_gudang->cariDataGudang();
        // }
        $data['account'] = $this->getAllAccount();
        $data['weekending'] = $this->getWeekending();
        $this->load->view('templates/header',$topik);
        $this->load->view('jurnalumum/index', $data);
        $this->load->view('templates/footer');
    }

    public function getWeekending() {
        return $this->m_jurnalumum->getWeekending();
    }

    public function getLatestJPId() {
        echo json_encode($this->m_jurnalumum->getLatestJPId());
    }

    public function getLatestJRId() {
        echo json_encode($this->m_jurnalumum->getLatestJRId());
    }

    public function getData($weekending = NULL) {
        echo json_encode($this->m_jurnalumum->tampil_data($weekending));
    }
    
    public function getAllAccount() {
        return $this->m_jurnalumum->getAllAccount();
    }

    public function getAccountName($kode) {
        echo json_encode($this->m_jurnalumum->getAccountName($kode));
    }

    public function getDataById($id) {
        echo json_encode($this->m_jurnalumum->getDataById($id));
    }

    public function getDataByWord($word) {
        echo json_encode($this->m_jurnalumum->getDataByWord($word));
    }

    public function tambah(){
        
        $data['judul'] = 'Form Tambah Data';

        $this->form_validation->set_rules('tgl','Tanggal','required');
        $this->form_validation->set_rules('transaksi','Transaksi','required');
        $this->form_validation->set_rules('no_bukti','No_Bukti','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');
        $this->form_validation->set_rules('kode_debit','Kode_Debit','required');
        $this->form_validation->set_rules('kode_kredit','Kode_Kredit','required');
        $this->form_validation->set_rules('nama_akundebit','Nama_Akundebit','required');
        $this->form_validation->set_rules('didebit','Didebit','required');
        $this->form_validation->set_rules('nama_akunkredit','Nama_Akunkredit','required');
        $this->form_validation->set_rules('dikredit','Dikredit','required');


        if ($this->form_validation->run() == FALSE) {
            redirect('jurnalumum');
        }else {
            $this->m_jurnalumum->tambahDataJurnal();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('jurnalumum');
        }
    }
    public function edit() {
        $this->form_validation->set_rules('tgl2','Tanggal','required');
        $this->form_validation->set_rules('transaksi2','Transaksi','required');
        $this->form_validation->set_rules('no_bukti2','No_Bukti','required');
        $this->form_validation->set_rules('jumlah2','Jumlah','required');
        $this->form_validation->set_rules('kode_debit2','Kode_Debit','required');
        $this->form_validation->set_rules('kode_kredit2','Kode_Kredit','required');
        $this->form_validation->set_rules('nama_akundebit2','Nama_Akundebit','required');
        $this->form_validation->set_rules('didebit2','Didebit','required');
        $this->form_validation->set_rules('nama_akunkredit2','Nama_Akunkredit','required');
        $this->form_validation->set_rules('dikredit2','Dikredit','required');

        if ($this->form_validation->run() == FALSE) {
            redirect('jurnalumum');
        }else {
            $this->m_jurnalumum->ubahDataJurnal();
            $this->session->set_flashdata('flash','Diubah');
            redirect('jurnalumum');
        }

    }
    public function hapus($id) {
        $this->m_jurnalumum->hapusDataJurnal($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('jurnalumum');
    }
    
}