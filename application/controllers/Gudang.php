<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_gudang');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Gudang';
        $data['gudang'] = $this->M_gudang->tampil_data();
        if ($this->input->post('keyword')) {
            $data['gudang'] = $this->M_gudang->cariDataGudang();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('gudang/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data2['judul'] = 'Form Tambah Data Gudang';

        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('alamat','Alamat','required');

        if ($this->form_validation->run() == FALSE) {
            $dariDB = $this->M_gudang->cekkodegudang();
            // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
            $nourut = substr($dariDB, 3, 3);
            $kodeGudangSekarang = $nourut + 1;
            $data = array("kode" => $kodeGudangSekarang);

            $this->load->view('templates/header',$data2);
            $this->load->view('gudang/tambah',$data);
            $this->load->view('templates/footer');
        }else {
            $this->M_gudang->tambahDataGudang();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('gudang');
        }
        
    }
    public function hapus($id){
        $this->M_gudang->hapusDataGudang($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('gudang');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Daftar Mitra';
        $data['gudang'] = $this->M_gudang->getGudangById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('gudang/edit',$data);
        }else {
            $this->M_gudang->ubahDataGudang();
            $this->session->set_flashdata('flash','Diubah');
            redirect('gudang');
        }
}
        
}