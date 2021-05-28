<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kartu_stok2 extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_barang');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Stok_akhir';
        // $data['produk'] = $this->M_barang->tampil_data();
        $data['produk'] = $this->M_barang->tampil_barang();
        $this->load->view('templates2/header',$topik);
        $this->load->view('kartustok2/index',$data);
        $this->load->view('templates2/footer');
    }
//     public function tambah(){
//         $data['judul'] = 'Form Tambah Data Stok_akhir';

//         $this->form_validation->set_rules('kode','Kode','required');
//         $this->form_validation->set_rules('nama','Nama','required');
//         $this->form_validation->set_rules('alamat','Alamat','required');
//         $this->form_validation->set_rules('telepon','Telepon','required');

//         if ($this->form_validation->run() == FALSE) {
//             $this->load->view('templates/header',$data);
//             $this->load->view('barang/tambah');
//         }else {
//             $this->M_barang->tambahDataStok_akhir();
//             $this->session->set_flashdata('flash','Ditambahkan');
//             redirect('barang');
//         }
        
//     }
//     public function hapus($id){
//         $this->M_barang->hapusDataStok_akhir($id);
//         $this->session->set_flashdata('flash2','Dihapus');
//         redirect('barang');
//     }
//     public function edit($id){
//         $topik['judul'] = 'Edit Data Stok_akhir';
//         $data['barang'] = $this->M_barang->getStok_akhirById($id);
//         // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

//         $this->form_validation->set_rules('kode','Kode','required');
//         $this->form_validation->set_rules('nama','Nama','required');
//         $this->form_validation->set_rules('alamat','Alamat','required');
//         $this->form_validation->set_rules('telepon','Telepon','required');
        

//         if ($this->form_validation->run() == FALSE) {
//             $this->load->view('templates/header',$topik);
//             $this->load->view('barang/edit',$data);
//         }else {
//             $this->M_barang->ubahDataStok_akhir();
//             $this->session->set_flashdata('flash','Diubah');
//             redirect('barang');
//         }
// }
}