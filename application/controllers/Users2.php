<?php

class Users2 extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_user');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu User';
        $data['users'] = $this->M_user->tampil_data1();
        $this->load->view('templates2/header',$topik);
        $this->load->view('user2/index',$data);
        $this->load->view('templates2/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Data User';
        $data['users'] = $this->M_user->tampil_data2();
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('kode_id','Kode Id','required');
		$this->form_validation->set_rules('id_role','Id Role','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/header',$data);
            $this->load->view('user2/tambah',$data);
        }else {
            $this->M_user->tambahDataUser();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('users2/tambah');
        }
        
    }
    public function hapus($id){
        $this->M_user->hapusDataUser($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('users2');
    }
	
	public function changePassword(){
      $topik['judul'] = 'Halaman Ubah Password';
        $data['users'] = $this->M_user->tampil_data1();
        $this->load->view('templates2/header',$topik);
        $this->load->view('user2/changepassword',$data);
        $this->load->view('templates2/footer');
    }
	
    public function changePassword1()
	{
        $topik['judul'] = 'Halaman Ubah Password';
		$data['users'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('current_password','Current Password','required|trim');
		$this->form_validation->set_rules('new_password1','New Password','required|trim|min_length[3]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2','Confirm New Password','required|trim|min_length[3]|matches[new_password1]');
		
		if ($this->form_validation->run() == false) {
            $this->load->view('templates2/header',$topik);
			$this->load->view('user2/changepassword',$data);
			$this->load->view('templates2/footer');

		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if (!password_verify($current_password, $data['users']['password'])) {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Wrong Current Password!</div>');
				redirect('users/changepassword');
			} else {
				if ($current_password == $new_password) {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">New Password Cannot be the same as current password!</div>');
				redirect('users/changepassword');
			} else {
				// Password sudah ok
				$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

				$this->db->set('password',$password_hash);
				$this->db->where('email',$this->session->userdata('email'));
				$this->db->update('users');

				$this->session->set_flashdata('message','<div class="alert alert-succes" role="alert">Password Changed!</div>');
				redirect('users/changepassword');
			}

		}
		

	}
	}
    public function edit($id){
         $topik['judul'] = 'Edit Data User';
		 
		 
       $data['user'] = $this->M_user->getUserById($id);
    //     // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('kode_id','Kode Id','required');
		$this->form_validation->set_rules('id_role','Id Role','required');

      if ($this->form_validation->run() == FALSE) {
         $this->load->view('templates2/header',$topik);
           $this->load->view('user2/edit',$data);
         }else {
          $this->M_user->ubahDataUser();
           $this->session->set_flashdata('flash','Diubah');
            redirect('users2');
      }
    }
	
	function update(){
    $id = $this->input->post('id');
    $password = $this->input->post('password');
		
		
		$data = array(
			'password' => $password
	);

	$where = array(
		'id' => $id
	);

	$this->M_user->update_data($where,$data,'users');
	$this->session->set_flashdata('flash','Diubah');
	redirect('users2/changePassword');
}

}