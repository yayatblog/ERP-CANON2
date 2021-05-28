<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_sum extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_summary');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Summary';
        $data['summary'] = $this->M_summary->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('sales_summary/index',$data);
        $this->load->view('templates/footer');
    }

    public function getData($weekending) {
        echo json_encode($this->M_summary->getData($weekending));
    }

    public function getDataInOut($weekending) {
        echo json_encode($this->M_summary->getDataInOut($weekending));
    }

    public function getSUMPcs($weekending) {
        echo json_encode($this->M_summary->getSUMPcs($weekending));
    }

    public function tambah(){
        $data['judul'] = 'Form Tambah Data Summary';

        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('harga_manager','Harga_manager','required');
        $this->form_validation->set_rules('total_pcs','Total_pcs','required');
        $this->form_validation->set_rules('keterangan','Keterangan','required');
        $this->form_validation->set_rules('debit','Debit','required');
        $this->form_validation->set_rules('kredit','Kredit','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('sales_summary/tambah');
        }else {
            $this->m_summary->tambahDataSummary();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('sales_sum');
        }
        
    }
    public function hapus($id){
        $this->m_summary->hapusDataSummary($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('sales_sum');
    }
//     public function edit($id){
//         $topik['judul'] = 'Edit Data Summary';
//         $data['summary'] = $this->m_summary->getSummaryById($id);
//         // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

//         $this->form_validation->set_rules('kode','Kode','required');
//         $this->form_validation->set_rules('nama','Nama','required');
//         $this->form_validation->set_rules('alamat','Alamat','required');
//         $this->form_validation->set_rules('telepon','Telepon','required');
        

//         if ($this->form_validation->run() == FALSE) {
//             $this->load->view('templates/header',$topik);
//             $this->load->view('summary/edit',$data);
//         }else {
//             $this->m_summary->ubahDataSummary();
//             $this->session->set_flashdata('flash','Diubah');
//             redirect('summary');
//         }
// }
}