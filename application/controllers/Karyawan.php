<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_karyawan');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Karyawan';
        $data['karyawan'] = $this->M_karyawan->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('karyawan/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data2['judul'] = 'Form Tambah Data Karyawan';
        
        $this->form_validation->set_rules('kode','kode','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('tgl_lahir','Tgl_Lahir','required');
        $this->form_validation->set_rules('jabatan','Jabatan','required');
        $this->form_validation->set_rules('thn_gabung','Thn_gabung','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('kota','Kota','required');
        $this->form_validation->set_rules('no_telp','No_telp','required');
        $this->form_validation->set_rules('email','Email','required');

        if ($this->form_validation->run() == FALSE) {
            $dariDB = $this->M_karyawan->cekkodekaryawan();
            // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
            $nourut = substr($dariDB, 3, 4);
            $kodeKaryawanSekarang = $nourut + 1;
            $data = array("kode" => $kodeKaryawanSekarang);
            $data['jabatan'] = ['Logitic','Finance & Accounting','Administration','Inventory','General Affair','IT','HRD','Messenger','Resepsionist','Non Aktif'];


            $this->load->view('templates/header',$data2);
            $this->load->view('karyawan/tambah',$data);
            $this->load->view('templates/footer');
        }else {
            $this->M_karyawan->tambahDataKaryawan();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('karyawan');
        }
        
    }
    public function detail($id){
        $topik['judul'] = 'Detail Data Karyawan';
        $data['karyawan'] = $this->M_karyawan->getKaryawanById($id);
        $this->load->view('templates/header',$topik);
        $this->load->view('karyawan/detail',$data);
    }
    public function hapus($id){
        $this->M_karyawan->hapusDataKaryawan($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('karyawan');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Karyawan';
        $data['karyawan'] = $this->M_karyawan->getKaryawanById($id);
        $data['jabatan'] = ['Logitic','Finance & Accounting','Administration','Inventory','General Affair','IT','HRD','Messenger','Resepsionist'];
        
        $this->form_validation->set_rules('kode','kode','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('tgl_lahir','Tgl_Lahir','required');
        $this->form_validation->set_rules('jabatan','Jabatan','required');
        $this->form_validation->set_rules('thn_gabung','Thn_gabung','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('kota','Kota','required');
        $this->form_validation->set_rules('no_telp','No_telp','required');
        $this->form_validation->set_rules('email','Email','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('karyawan/edit',$data);
        }else {
            $this->M_karyawan->ubahDataKaryawan();
            $this->session->set_flashdata('flash','Diubah');
            redirect('karyawan');
        }
}
    // public function edit($id){
    //     $topik['judul'] = 'Edit Data Dosen';
    //     $data['kategori'] = $this->M_kategori->getKategoriById($id);
    //     // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];
       
    //     $this->form_validation->set_rules('kode','Kode','required');
    //     $this->form_validation->set_rules('name','Name','required');
    //     $this->form_validation->set_rules('description','Description','required');

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('templates/header',$topik);
    //         $this->load->view('kategori/edit',$data);
    //     }else {
    //         $this->M_kategori->ubahDataKategori();
    //         $this->session->set_flashdata('flash','Diubah');
    //         redirect('kategori');
    //     }
    // }
   
}