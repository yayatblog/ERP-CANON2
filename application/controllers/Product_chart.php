<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_chart extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_chart');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Production Chart';
        $data['tgl'] = $this->m_chart->weekending();
        $data['jbtn'] = $this->m_chart->jabatan();
        $data['gdg'] = $this->m_chart->gudang();
        $this->load->view('templates/header',$topik);                                                            
        $this->load->view('productchart/index',$data);
        $this->load->view('templates/footer');
    }

    public function getData($weekending = NULL, $jabatan = NULL, $gudang = NULL) {
        echo json_encode($this->m_chart->getData($weekending, urldecode($jabatan), urldecode($gudang)));
    }

    public function tambah(){
        $data['judul'] = 'Form Tambah Product Chart';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('manager','Manager','required');
        $this->form_validation->set_rules('profit_sabtu','Profit_sabtu','required');
        $this->form_validation->set_rules('profit_minggu','Profit_minggu','required');
        $this->form_validation->set_rules('profit_senin','Profit_senin','required');
        $this->form_validation->set_rules('profit_selasa','Profit_selasa','required');
        $this->form_validation->set_rules('profit_rabu','Profit_rabu','required');
        $this->form_validation->set_rules('profit_kamis','Profit_kamis','required');
        $this->form_validation->set_rules('profit_jumat','Profit_jumat','required');
        $this->form_validation->set_rules('total_profit','Total_profit','required');
        $this->form_validation->set_rules('total_poin','Total_poin','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('productchart/tambah');
        }else {
            $this->m_chart->tambahDataChart();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('product_chart');
        }
        
    }
    public function hapus($id){
        $this->m_chart->hapusDataChart($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('product_chart');
    }
//     public function edit($id){
//         $topik['judul'] = 'Edit Data Supplier';
//         $data['supplier'] = $this->m_chart->getSupplierById($id);
//         // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

//         $this->form_validation->set_rules('kode','Kode','required');
//         $this->form_validation->set_rules('nama','Nama','required');
//         $this->form_validation->set_rules('alamat','Alamat','required');
//         $this->form_validation->set_rules('telepon','Telepon','required');
        

//         if ($this->form_validation->run() == FALSE) {
//             $this->load->view('templates/header',$topik);
//             $this->load->view('supplier/edit',$data);
//         }else {
//             $this->m_chart->ubahDataSupplier();
//             $this->session->set_flashdata('flash','Diubah');
//             redirect('supplier');
//         }
// }
}