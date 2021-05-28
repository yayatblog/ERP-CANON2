<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asst_Manager2 extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_manager');
		$this->load->model('M_user');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Asisten Manager Lain';
        $data['manager'] = $this->M_manager->tampil_data1();
        $this->load->view('templates2/header',$topik);
        $this->load->view('asst_manager2/index',$data);
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
        }else {
            $this->M_manager->tambahDataManager();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('manager');
        }
        
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
        }else {
            $this->M_manager->ubahDataManager();
            $this->session->set_flashdata('flash','Diubah');
            redirect('manager');
        }
}
}