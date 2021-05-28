<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan2 extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_pengeluaran');
		$this->load->model('M_user');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Penjualan';
        $data['pengeluaran'] = $this->m_pengeluaran->tampil_data1();
        $this->load->view('templates2/header',$topik);
        $this->load->view('penjualan2/index',$data);
        $this->load->view('templates2/footer');
    }
   
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Penjualan';
         $data['users'] = $this->M_user->tampil_data2();
        $this->form_validation->set_rules('tgl','Tgl','required');
        $this->form_validation->set_rules('uraian','Uraian','required');
        $this->form_validation->set_rules('reff','Reff','required');
        $this->form_validation->set_rules('batasan','Batasan','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');
        $this->form_validation->set_rules('no_akun','No_akun','required');
		$this->form_validation->set_rules('kode_id','Kode ID','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/header',$data);
            $this->load->view('penjualan2/tambah');
        }else {
            $this->m_pengeluaran->tambahDataPengeluaran();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('pengeluaran2');
        }
        
    }
    // public function detail($id){
    //     $topik['judul'] = 'Detail Data Karyawan';
    //     $data['pengeluaran'] = $this->m_pengeluaran->getPengirimanById($id);
    //     $this->load->view('templates2/header',$topik);
    //     $this->load->view('pengeluaran/detail',$data);
    // }
    public function hapus($id){
        $this->m_pengeluaran->hapusDataPengeluaran($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('pengeluaran2');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Penjualan';
        $data['pengeluaran'] = $this->m_pengeluaran->getPengeluaranById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('tgl','Tgl','required');
        $this->form_validation->set_rules('uraian','Uraian','required');
        $this->form_validation->set_rules('reff','Reff','required');
        $this->form_validation->set_rules('batasan','Batasan','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');
        $this->form_validation->set_rules('no_akun','No_akun','required');
		$this->form_validation->set_rules('kode_id','Kode ID','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/header',$topik);
            $this->load->view('pengeluaran2/edit',$data);
        }else {
            $this->m_pengeluaran->ubahDataPengeluaran();
            $this->session->set_flashdata('flash','Diubah');
            redirect('pengeluaran2');
        }
}
}