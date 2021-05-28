<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang2 extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_barang');
		 $this->load->model('M_user');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Produk';
        $data['produk'] = $this->M_barang->tampil_barang();
        if ($this->input->post('keyword')) {
            $data['produk'] = $this->M_barang->cariDataBarang();
        }
    
        $this->load->view('templates2/header',$topik);
        $this->load->view('barang2/index');
        $this->load->view('templates2/footer');
    }
	
	
	public function index_show(){
        $topik['judul'] = 'Halaman Menu Produk';
        $data['produk'] = $this->M_barang->tampil_barang();
        if ($this->input->post('keyword')) {
            $data['produk'] = $this->M_barang->cariDataBarang();
        }
    
        $this->load->view('templates2/header',$topik);
        $this->load->view('barang2/index_show',$data);
        $this->load->view('templates2/footer');
    }
    public function tambah(){
        
        $data['judul'] = 'Form Tambah Data';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('id_role','Id_Role','required');
        $this->form_validation->set_rules('manager','Manager','required');
        $this->form_validation->set_rules('gudang','Gudang','required');
        $this->form_validation->set_rules('qty','Qty','required');
        $this->form_validation->set_rules('unitbagus','Unitbagus','required');
        $this->form_validation->set_rules('unitrusak','Unitrusak','required');
        $this->form_validation->set_rules('hpp','Hpp','required');
        $this->form_validation->set_rules('sebelumpajak','Sebelumpajak','required');
        $this->form_validation->set_rules('ppn','Ppn','required');
        $this->form_validation->set_rules('setelahpajak','Setelahpajak','required');
        $this->form_validation->set_rules('hargasetoran','Hargasetoran','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');


        // $this->form_validation->set_rules('image','Image','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('barang2/tambah');
        }else {
            $this->M_barang->tambahDataProduct();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('barang');
        }
    }
    public function transfergudang($id){
        $topik['judul'] = 'Form Transfer Gudang';
        $data['produk'] = $this->M_barang->getProdukById($id);
        $data['users'] = $this->M_user->tampil_data2();
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('id_role','Id_Role','required');
        $this->form_validation->set_rules('manager','Manager','required');
        $this->form_validation->set_rules('gudang','Gudang','required');
        $this->form_validation->set_rules('qty','Qty','required');
        $this->form_validation->set_rules('unitbagus','Unitbagus','required');
        $this->form_validation->set_rules('unitrusak','Unitrusak','required');
        $this->form_validation->set_rules('hpp','Hpp','required');
        $this->form_validation->set_rules('sebelumpajak','Sebelumpajak','required');
        $this->form_validation->set_rules('ppn','Ppn','required');
        $this->form_validation->set_rules('setelahpajak','Setelahpajak','required');
        $this->form_validation->set_rules('hargasetoran','Hargasetoran','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('barang2/transferantargudang',$data);
        }else {
            $this->M_barang->ubahDataProduct();
            $this->session->set_flashdata('flash','Di Tambah');
            redirect('barang2/index_show');
        }

    }
	
	public function returngudang($id){
        $topik['judul'] = 'Form Return Gudang';
        $data['produk'] = $this->M_barang->getProdukById($id);
        $data['users'] = $this->M_user->tampil_data2();
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('id_role','Id_Role','required');
        $this->form_validation->set_rules('manager','Manager','required');
        $this->form_validation->set_rules('gudang','Gudang','required');
        $this->form_validation->set_rules('qty','Qty','required');
        $this->form_validation->set_rules('unitbagus','Unitbagus','required');
        $this->form_validation->set_rules('unitrusak','Unitrusak','required');
        $this->form_validation->set_rules('hpp','Hpp','required');
        $this->form_validation->set_rules('sebelumpajak','Sebelumpajak','required');
        $this->form_validation->set_rules('ppn','Ppn','required');
        $this->form_validation->set_rules('setelahpajak','Setelahpajak','required');
        $this->form_validation->set_rules('hargasetoran','Hargasetoran','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('barang2/returngudang',$data);
        }else {
            $this->M_barang->ubahDataProduct();
            $this->session->set_flashdata('flash','Di Tambah');
            redirect('barang2/index_show');
        }

    }
	
	
	public function itemrusak($id){
        $topik['judul'] = 'Form Item Rusak';
        $data['produk'] = $this->M_barang->getProdukById($id);
        $data['users'] = $this->M_user->tampil_data2();
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('id_role','Id_Role','required');
        $this->form_validation->set_rules('manager','Manager','required');
        $this->form_validation->set_rules('gudang','Gudang','required');
        $this->form_validation->set_rules('qty','Qty','required');
        $this->form_validation->set_rules('unitbagus','Unitbagus','required');
        $this->form_validation->set_rules('unitrusak','Unitrusak','required');
        $this->form_validation->set_rules('hpp','Hpp','required');
        $this->form_validation->set_rules('sebelumpajak','Sebelumpajak','required');
        $this->form_validation->set_rules('ppn','Ppn','required');
        $this->form_validation->set_rules('setelahpajak','Setelahpajak','required');
        $this->form_validation->set_rules('hargasetoran','Hargasetoran','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('barang2/itemrusak',$data);
        }else {
            $this->M_barang->ubahDataProduct();
            $this->session->set_flashdata('flash','Di Tambah');
            redirect('barang2/index_show');
        }

    }
	
	
	
    public function hapus($id){
        $this->M_barang->hapusDataProduk($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('barang2');
    }
    public function transfer_gudang(){
        
        $data['judul'] = 'Form Transfer Gudang';

        $this->form_validation->set_rules('tgl','Tanggal','required');
        $this->form_validation->set_rules('no_transfer','no transfer','required');
        $this->form_validation->set_rules('keterangan','keterangan','required');
        $this->form_validation->set_rules('kode','kode','required');
        $this->form_validation->set_rules('barang','barang','required');
        $this->form_validation->set_rules('gudang_asal','gudang asal','required');
        $this->form_validation->set_rules('gudang_tujuan','gudang tujuan','required');
        $this->form_validation->set_rules('qty','qty','required');
        $this->form_validation->set_rules('kode_id','Kode Id','required');
        


        // $this->form_validation->set_rules('image','Image','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/header',$data);
            $this->load->view('barang2/transferantargudang');
        }else {
            $this->M_barang->transferGudang();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('barang2/index_show');
        }
    }
    public function return_gudang(){
        
        $data['judul'] = 'Form Return Gudang';

        $this->form_validation->set_rules('tanggal','Nama','required');
        $this->form_validation->set_rules('no_faktur','No Faktur','required');
        $this->form_validation->set_rules('keterangan','Keterangan','required');
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('barang','Barang','required');
        $this->form_validation->set_rules('gudang_asal','Gudang Asal','required');
        $this->form_validation->set_rules('gudang_tujuan','Gudang Tujuan','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');
        $this->form_validation->set_rules('kode_id','Kode Id','required');
        


        // $this->form_validation->set_rules('image','Image','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/header',$data);
            $this->load->view('barang2/returngudang');
        }else {
            $this->M_barang->returnGudang();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('barang2/index_show');
        }
    }
    public function item_rusak(){
        
        $data['judul'] = 'Form Item Rusak';

        $this->form_validation->set_rules('tanggal','Tanggal','required');
        $this->form_validation->set_rules('no_faktur','No Faktur','required');
        $this->form_validation->set_rules('keterangan','keterangan','required');
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('barang','Barang','required');
        $this->form_validation->set_rules('gudang_asal','Gudang Asal','required');
        $this->form_validation->set_rules('supplier_tujuan','Supplier  Tujuan','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');
        $this->form_validation->set_rules('kode_id','Kode Id','required');
       


        // $this->form_validation->set_rules('image','Image','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/header',$data);
            $this->load->view('barang2/itemrusak');
        }else {
            $this->M_barang->itemRusak();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('barang2/index_show');
        }
    }
    
}