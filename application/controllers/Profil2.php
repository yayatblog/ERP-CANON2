<?php

class Profil2 extends CI_Controller
{
	public function __construct(){
        parent::__construct();
        $this->load->model('M_daftar');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Profil Perusahaan';
        $this->load->view('templates2/header',$topik);
		$data['profile'] = $this->M_daftar->tampil_mitra();
        $this->load->view('landingpage2',$data);
        $this->load->view('templates/footer');
    }
	
	
	function update(){
    $id = $this->input->post('id');
    $nama = $this->input->post('nama');
	 $alamat = $this->input->post('alamat');
	  $email = $this->input->post('email');
		
		
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'email' => $email
	);

	$where = array(
		'id' => $id
	);

	$this->M_daftar->update_data($where,$data,'daftarmitra');
	$this->session->set_flashdata('flash','Diubah');
	redirect('Profil2');
}
}
