<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager2 extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_manager');
		$this->load->model('M_user');
        $this->load->library('form_validation');
    }

    public function index(){
        $topik['judul'] = 'Halaman Menu Manager Lain';
        $data['manager'] = $this->M_manager->tampil_data1();
        $data['kode_barang'] = $this->M_manager->kode_barang();
        $data['users'] = $this->M_user->tampil_data2();
        $this->load->view('templates2/header',$topik);
        $this->load->view('manager2/index',$data);
        $this->load->view('templates2/footer');
    }

    public function tampil_data() {
        echo json_encode($this->M_manager->tampil_data1());
    }

    public function barang($barang = NULL) {
        echo json_encode($this->M_manager->barang($barang));
    }

    public function cari() {
        $topik['judul'] = 'Halaman Menu Cari';
        $data['manager'] = $this->M_manager->tampil_data();
        $this->load->view('templates2/header',$topik);
        $this->load->view('manager2/cari',$data);
        $this->load->view('templates2/footer');
    }

    public function tambah(){
        $data['judul'] = 'Form Tambah Data Manager Lain';
        $data['users'] = $this->M_user->tampil_data2();
        $this->form_validation->set_rules('tgl','Tgl','required');
        $this->form_validation->set_rules('no_faktur','No_Faktur','required');
        $this->form_validation->set_rules('transaksi','Transaksi','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/header',$data);
            $this->load->view('manager2/tambah');
        } else {
            $this->M_manager->tambahDataDownLine();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('manager2');
        }
        
    }

    public function tambahDataPenjualanManager() {
        $this->M_manager->tambahDataPenjualanManager();
        $this->session->set_flashdata('flash','Ditambahkan');
        redirect('manager2');
    }

    // public function detail($id){
    //     $topik['judul'] = 'Detail Data Karyawan';
    //     $data['manager'] = $this->M_manager->getPengirimanById($id);
    //     $this->load->view('templates/header',$topik);
    //     $this->load->view('manager/detail',$data);
    // }
    public function hapus($id){
        $this->M_manager->hapusDataManager($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('manager');
    }

    public function edit($id){
        $topik['judul'] = 'Edit Data Manager Lain';
        $data['manager'] = $this->M_manager->getManagerById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('tgl','Tgl','required');
        $this->form_validation->set_rules('no_faktur','No_Faktur','required');
        $this->form_validation->set_rules('transaksi','Transaksi','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/header',$topik);
            $this->load->view('manager/edit',$data);
        } else {
            $this->M_manager->ubahDataManager();
            $this->session->set_flashdata('flash','Diubah');
            redirect('manager');
        }
}
}