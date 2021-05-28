<?php

class Team2 extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_team');
    }
    public function index(){
        $topik['judul'] = 'Team Page Client';
		$data['team']=$this->M_team->tampil_team();
		
        $this->load->view('templates2/header',$topik);
        $this->load->view('team2/index',$data);
        $this->load->view('templates2/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Team';
        $data['jabatan'] = ['Logitic','Finance & Accounting','Administration','Inventory','General Affair','IT','HRD','Messenger','Resepsionist'];
        
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('tgl_lahir','Tgl_Lahir','required');
        $this->form_validation->set_rules('jabatan','Jabatan','required');
        $this->form_validation->set_rules('thn_gabung','Thn_gabung','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('kota','Kota','required');
        $this->form_validation->set_rules('no_telp','No_telp','required');
        $this->form_validation->set_rules('email','Email','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('team2/tambah',$data);
        }else {
            $this->M_team->tambahDataTeam();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('team2');
        }
        
    }
}