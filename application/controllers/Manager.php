<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_manager');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Manager Lain';
        $data['manager'] = $this->m_manager->tampil_data();
        $data['kode_barang'] = $this->m_manager->kode_barang();
        $data['latest_no_invoice'] = $this->m_manager->latest_no_invoice();
        $this->load->view('templates/header',$topik);
        $this->load->view('manager/index',$data);
        $this->load->view('templates/footer');
    }

    public function managerReport() {
        $topik['judul'] = 'Halaman Menu Laporan Manager';
        $data['manager'] = $this->m_manager->tampil_data();
        $data['kode_barang'] = $this->m_manager->kode_barang();
        $this->load->view('templates/header',$topik);
        $this->load->view('managerreport/index',$data);
        $this->load->view('templates/footer');
    }

    public function fetchInOut($no_invoice) {
        $no_invoice = explode("-", $no_invoice);
        $no_invoice = implode("/", $no_invoice);
        echo json_encode($this->m_manager->fetchInOut($no_invoice));
    }

    public function barang($barang = NULL) {
        echo json_encode($this->m_manager->barang($barang));
    }

    public function allMgr($jabatan = NULL) {
        echo json_encode($this->m_manager->allMgr(urldecode($jabatan)));
    }

    public function invoiceMgr($weekending = NULL, $kode_id = NULL) {
        echo json_encode($this->m_manager->invoiceMgr($weekending, urldecode($kode_id)));
    }

    public function getAdditionalData($weekending = NULL, $kode_id = NULL) {
        echo json_encode($this->m_manager->getAdditionalData($weekending, urldecode($kode_id)));
    }

    public function getSaldoUser($akun_simpanan) {
        echo json_encode($this->m_manager->getSaldoUser($akun_simpanan));
    }

    public function getSUMInOut($no_invoice) {
        $no_invoice = explode("-", $no_invoice);
        $no_invoice = implode("/", $no_invoice);
        echo json_encode($this->m_manager->getSUMInOut($no_invoice));
    }

    public function fetchData($weekending = NULL, $jabatan = NULL, $manager = NULL) {
        echo json_encode($this->m_manager->fetchData(urldecode($weekending), urldecode($jabatan), urldecode($manager)));
    }

    public function prosesInvoice($no_invoice) {
        $no_invoice = explode("-", $no_invoice);
        $no_invoice = implode("/", $no_invoice);
        $this->m_manager->prosesInvoice(urldecode($no_invoice));
    }

    public function tambah() {
            $this->m_manager->tambahDataPenjualanManager();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('manager');
    }

    public function tambahInOut() {
        $kode_id = $this->input->post('kode_id');
        $no_invoice = $this->input->post('no_invoice');
        $keterangan = $this->input->post('keterangan');
        $jenis = $this->input->post('jenis');
        $akun = $this->input->post('akun');
        $jumlah = $this->input->post('jumlah');

        $this->m_manager->tambahInOut($kode_id, $no_invoice, $keterangan, $jenis, $jumlah, $akun);
        echo json_encode($no_invoice);
    }

    public function editInOut() {
        $id = $this->input->post('id');
        $keterangan = $this->input->post('keterangan');
        $jenis = $this->input->post('jenis');
        $akun = $this->input->post('akun');
        $jumlah = $this->input->post('jumlah');

        $this->m_manager->editInOut($id, $keterangan, $jenis, $jumlah, $akun);
    }

    public function hapusInOut($id) {
        $this->m_manager->hapusInOut($id);
    }

    public function getInOut($id) {
        echo json_encode($this->m_manager->getInOut($id));
    }


    // public function detail($id){
    //     $topik['judul'] = 'Detail Data Karyawan';
    //     $data['manager'] = $this->m_manager->getPengirimanById($id);
    //     $this->load->view('templates/header',$topik);
    //     $this->load->view('manager/detail',$data);
    // }
    public function hapus($id){
        $this->m_manager->hapusDataManager($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('manager');
    }

    public function getData($id) {
        echo json_encode($this->m_manager->getData($id));
    }

    public function edit($id){
        $topik['judul'] = 'Edit Data Manager Lain';
        $data['manager'] = $this->m_manager->getManagerById($id);

        $this->form_validation->set_rules('tgl','Tgl','required');
        $this->form_validation->set_rules('no_faktur','No_Faktur','required');
        $this->form_validation->set_rules('transaksi','Transaksi','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('manager/edit',$data);
        }else {
            $this->m_manager->ubahDataManager();
            $this->session->set_flashdata('flash','Diubah');
            redirect('manager');
        }
}
}