<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deposit2 extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_deposit');
		$this->load->model('M_user');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Deposit';
        $data['deposit'] = $this->M_deposit->tampil_data1();
        $this->load->view('templates2/header',$topik);
        $this->load->view('deposit2/index',$data);
        $this->load->view('templates2/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Deposit';
        $data['users'] = $this->M_user->tampil_data2();
        $this->form_validation->set_rules('tgl','Tgl','required');
        $this->form_validation->set_rules('manager','Manager','required');
        $this->form_validation->set_rules('cabang','Cabang','required');
        $this->form_validation->set_rules('jumlah_deposit','Jumlah_Deposit','required');
        $this->form_validation->set_rules('jumlah_pengeluaran','Jumlah_pengeluaran','required');
        $this->form_validation->set_rules('total_deposit','Total_Deposit','required');
        $this->form_validation->set_rules('status','Status','required');
		$this->form_validation->set_rules('kode_id','Kode Id','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/header',$data);
            $this->load->view('deposit/tambah');
        }else {
            $this->M_deposit->tambahDataDeposit();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('deposit');
        }
        
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

         $this->form_validation->set_rules('tgl','Tgl','required');
        $this->form_validation->set_rules('manager','Manager','required');
        $this->form_validation->set_rules('cabang','Cabang','required');
        $this->form_validation->set_rules('jumlah_deposit','Jumlah_Deposit','required');
        $this->form_validation->set_rules('jumlah_pengeluaran','Jumlah_pengeluaran','required');
        $this->form_validation->set_rules('total_deposit','Total_Deposit','required');
        $this->form_validation->set_rules('status','Status','required');
		$this->form_validation->set_rules('kode_id','Kode Id','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/header',$topik);
            $this->load->view('deposit/edit',$data);
        }else {
            $this->M_deposit->ubahDataDeposit();
            $this->session->set_flashdata('flash','Diubah');
            redirect('deposit');
        }
}
}