<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }
    public function index(){
        // $topik['judul'] = 'Halaman Product';
        // $data["crudwithimage"] = $this->product_model->getAll();
		// $data['erpcanon'] = $this->product_model->get_by_role();
        // $this->load->view('templates/header',$topik);
        // $this->load->view('product/index',$data);
        $topik['judul'] = 'Halaman Menu Karyawan';
        $data['erpcanon'] = $this->product_model->get_by_role();
        // $data["crudwithimage"] = $this->product_model->getAll();
        
        $this->load->view('templates/header',$topik);
        $this->load->view('product',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        
        $data['judul'] = 'Form Tambah Data';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('id_role','Id_Role','required');
        $this->form_validation->set_rules('hargajual','Hargajual','required');
        $this->form_validation->set_rules('hargabeli','Hargabeli','required');
        $this->form_validation->set_rules('detail','Detail','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('product/tambah');
        }else {
            $this->product_model->tambahDataProduct();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('products');
        }
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Product';
        $data['crudwithimage'] = $this->product_model->getDosenById($id);

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('id_role','Id_Role','required');
        $this->form_validation->set_rules('hargajual','Hargajual','required');
        $this->form_validation->set_rules('hargabeli','Hargabeli','required');
        $this->form_validation->set_rules('detail','Detail','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('product/edit_form',$data);
        }else {
            $this->product_model->ubahDataProduct();
            $this->session->set_flashdata('flash','Diubah');
            redirect('products');
        }

    }
    // public function hapus($id){
    //     $where = ['id'=>$id];
    //     $this->product_model->hapus_data($where,'tbl_product');
    // }
    public function hapus($id){
        $this->product_model->hapusData($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('products');
    }
}