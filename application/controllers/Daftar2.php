<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar2 extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_daftar');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Gudang';
        $data['daftarmitra'] = $this->M_daftar->tampil_mitra();
        
        if ($this->input->post('keyword')) {
            $data['daftarmitra'] = $this->M_daftar->cariDataMitra();
        }
        $this->load->view('templates2/header',$topik);
        $this->load->view('daftarmitra2/index',$data);
        $this->load->view('templates2/footer');
    }
	
	 public function index_mitra(){
        $topik['judul'] = 'Halaman Menu Gudang';
        $data['daftarmitra'] = $this->M_daftar->tampil_mitra();
        
        if ($this->input->post('keyword')) {
            $data['daftarmitra'] = $this->M_daftar->cariDataMitra();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('daftarmitra/index_mitra',$data);
        $this->load->view('templates/footer');
    }
	
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Daftar Mitra';
        $data['jabatan'] = ['Logitic','Finance & Accounting','Administration','Inventory','General Affair','IT','HRD','Messenger','Resepsionist'];
        $data['gudang'] = $this->M_daftar->tampil_gudang();

        $this->form_validation->set_rules('kode_id','Kode_id','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('tgl_lahir','Tgl_Lahir','required');
        $this->form_validation->set_rules('jabatan','Jabatan','required');
        $this->form_validation->set_rules('promoter','Promoter','required');
        $this->form_validation->set_rules('thn_gabung','Thn_gabung','required');
        $this->form_validation->set_rules('gudang','Gudang','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('kota','Kota','required');
        $this->form_validation->set_rules('telepon','Telepon','required');
        $this->form_validation->set_rules('email','email','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('daftarmitra/tambah',$data);
        }else {
            $this->M_daftar->tambahDataMitra();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('daftar2');
        }
        
    }
    public function hapus($id){
        $this->M_daftar->hapusDataMitra($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('daftar');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Daftar Mitra';
        $data['daftarmitra'] = $this->M_daftar->getMitraById($id);
        $data['jabatan'] = ['Logitic','Finance & Accounting','Administration','Inventory','General Affair','IT','HRD','Messenger','Resepsionist'];
        $data['gudang'] = $this->M_daftar->tampil_gudang();
        

        $this->form_validation->set_rules('kode_id','Kode_id','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('tgl_lahir','Tgl_Lahir','required');
        $this->form_validation->set_rules('jabatan','Jabatan','required');
        $this->form_validation->set_rules('promoter','Promoter','required');
        $this->form_validation->set_rules('thn_gabung','Thn_gabung','required');
        $this->form_validation->set_rules('gudang','Gudang','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('kota','Kota','required');
        $this->form_validation->set_rules('telepon','Telepon','required');
        $this->form_validation->set_rules('email','email','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('daftarmitra/edit',$data);
        }else {
            $this->M_daftar->ubahDataMitra();
            $this->session->set_flashdata('flash','Diubah');
            redirect('daftar');
        }
}
    
    
}