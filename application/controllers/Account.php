<?php

class Account extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_account');
        $this->load->library('form_validation');
    }
    public function index() {
        $topik['judul'] = 'Halaman Menu Chart Of Account';
        // $data['tanggal'] = $this->get_tgl();
        // $data['chartofaccount'] = $this->M_account->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('chartofaccount/index');
        $this->load->view('templates/footer');
    }

    public function tampil_data($weekending = NULL) {
        echo json_encode($this->M_account->tampil_data($weekending));
    }

    public function get_tgl() {
        return $this->M_account->get_tgl();
    }

    public function getDataById($id) {
        echo json_encode($this->M_account->getDataById($id));
    }

    public function tambah() {
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('jenis','Jenis','required');
        $this->form_validation->set_rules('nominal','Nominal','required');
        $this->form_validation->set_rules('saldo_default','Saldo Awal','required');


        if ($this->form_validation->run() == FALSE) {
            redirect('account');
        } else {
            $this->M_account->tambahDataAccount();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('account');
        }
    }

    public function hapus($id) {
        $this->M_account->hapusDataAccount($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('account');
    }
    public function edit() {
        $this->form_validation->set_rules('kode2','Kode','required');
        $this->form_validation->set_rules('nama2','Nama','required');
        $this->form_validation->set_rules('jenis2','Jenis','required');
        $this->form_validation->set_rules('nominal2','Nominal','required');
        $this->form_validation->set_rules('saldo_awal2','Saldo Awal','required');
        $this->form_validation->set_rules('saldo_akhir2','Saldo Akhir','required');

        if ($this->form_validation->run() == FALSE) {
            redirect('account');
        } else {
            $this->M_account->ubahDataAccount();
            $this->session->set_flashdata('flash','Diubah');
            redirect('account');
        }
    }

    public function tutup_buku() {
        $this->M_account->tutup_buku($this->input->post('tgl_tutup_buku'));
        $this->session->set_flashdata('flash','ditutup buku');
        redirect('account');
    }
}
