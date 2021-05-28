<?php

class Kategori extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_kategori');
        $this->load->database();
        $this->load->library('form_validation');

    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Kategori';
        $data['kategori'] = $this->M_kategori->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('kategori/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data2['judul'] = 'Form Tambah Data Kategori';

        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('description','Description','required');

        if ($this->form_validation->run() == FALSE) {
            
            $dariDB = $this->M_kategori->cekkodekategori();
            // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
            $nourut = substr($dariDB, 3, 3);
            $kodeKategoriSekarang = $nourut + 1;
            $data = array("kode" => $kodeKategoriSekarang);
            
            $this->load->view('templates/header',$data2);
            $this->load->view('kategori/tambah',$data);
            $this->load->view('templates/footer');
        }else {
            $this->M_kategori->tambahDataKategori();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('kategori');
        }
        
    }
    public function hapus($id){
        $this->M_kategori->hapusDataKategori($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('kategori');

    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Dosen';
        $data['kategori'] = $this->M_kategori->getKategoriById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];
       
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('description','Description','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('kategori/edit',$data);
        }else {
            $this->M_kategori->ubahDataKategori();
            $this->session->set_flashdata('flash','Diubah');
            redirect('kategori');
        }
    }
}
