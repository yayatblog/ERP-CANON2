<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deposit extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_deposit');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Deposit';
        $data['deposit'] = $this->M_deposit->tampil_data('','');
        $this->load->view('templates/header',$topik);
        $this->load->view('deposit/index',$data);
        $this->load->view('templates/footer');
    }

    public function tampil_data($weekending = NULL, $jabatan = NULL) {
        echo json_encode($this->M_deposit->tampil_data(urldecode($weekending), urldecode($jabatan)));
    }

    public function tampil_deposit($weekending = NULL, $jabatan = NULL) {
        echo json_encode($this->M_deposit->tampil_deposit(urldecode($weekending), urldecode($jabatan)));
    }

    public function tambah() {
        $data['judul'] = 'Form Tambah Data Deposit';

        $this->form_validation->set_rules('tgl','Tgl','required');
        $this->form_validation->set_rules('manager','Manager','required');
        $this->form_validation->set_rules('cabang','Cabang','required');
        $this->form_validation->set_rules('jumlah_deposit','Jumlah_Deposit','required');
        $this->form_validation->set_rules('jumlah_pengeluaran','Jumlah_pengeluaran','required');
        $this->form_validation->set_rules('total_deposit','Total_Deposit','required');
        $this->form_validation->set_rules('status','Status','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('deposit/tambah');
        }else {
            $this->M_deposit->tambahDataDeposit();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('deposit');
        }
        
    }

    public function changestatus($id, $status){
        $this->M_deposit->changestatus($id, $status);
        redirect('deposit');
    }

    public function hapus($id){
        $this->M_deposit->hapusDataDeposit($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('deposit');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Daftar Mitra';
        $data['deposit'] = $this->M_deposit->getDepositById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('nama','Nama','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('deposit/edit',$data);
        }else {
            $this->M_deposit->ubahDataDeposit();
            $this->session->set_flashdata('flash','Diubah');
            redirect('deposit');
        }
}
}