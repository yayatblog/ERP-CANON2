<?php

class Bukubesar2 extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_bukubesar');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Buku Besar';
        $data['bukubesar'] = $this->m_bukubesar->tampil_data();
        $this->load->view('templates2/header',$topik);
        $this->load->view('bukubesar2/index',$data);
        $this->load->view('templates2/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Chart Of Account';

        $this->form_validation->set_rules('kode_id','Kode_id','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('jenis','Jenis','required');
        $this->form_validation->set_rules('nominal','Nominal','required');
        $this->form_validation->set_rules('saldo','Saldo','required');
        $this->form_validation->set_rules('debit','Debit','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/header',$data);
            $this->load->view('bukubesar/tambah');
        }else {
            $this->m_bukubesar->tambahDataAccount();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('bukubesar');
        }
        
    }
    public function hapus($id){
        $this->m_bukubesar->hapusDataAccount($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('bukubesar');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Chart Of Account';
        $data['bukubesar'] = $this->m_bukubesar->getAccountById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('kode_id','Kode_id','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('jenis','Jenis','required');
        $this->form_validation->set_rules('nominal','Nominal','required');
        $this->form_validation->set_rules('saldo','Saldo','required');
        $this->form_validation->set_rules('debit','Debit','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/header',$topik);
            $this->load->view('bukubesar/edit',$data);
        }else {
            $this->m_bukubesar->ubahDataAccount();
            $this->session->set_flashdata('flash','Diubah');
            redirect('bukubesar');
        }
    }
}
