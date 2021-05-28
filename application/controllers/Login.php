<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_login');
        $this->load->library('form_validation');
    }
    public function index() {
        $topik['judul'] = 'Halaman Menu Login';
        $this->load->view('login',$topik);
    }
    public function login_aksi(){
        $username = $this->input->post('username',true);
        $password = $this->input->post('password',true);

        //Rule validasi
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if ($this->form_validation->run() != FALSE) {
            $where = ['username' => $username];
            $cekUsername = $this->m_login->cek_login($where)->num_rows();
            $data = $this->m_login->cek_login($where)->result()[0];

            if ($cekUsername > 0) {
                if (password_verify($password, $data->password) && $data->activated === "1") {
                    $sess_data = array(
                        'username' => $username,
						 'password' => $password,
						 'kode_id' => $data->kode_id,
                        'name' => $data->first_name,
                        'jabatan' => $data->jabatan,
                        'gudang' => $data->gudang,
                        'id_role' => $data->id_role,
                        'photo' => $data->photo,
                        'login' => 'OK'
                    );
                    $this->session->set_userdata($sess_data);
                    if ($role == 1) {
                        redirect(base_url('dashboard'));
                    } else {
                        redirect(base_url('dashboard2'));
                    }
                } else {
                    redirect(base_url('login'));
                }
            }
            
        } else {
            redirect(base_url('login'));
        }
    }
    public function logout(){
        $this->session->session_destroy();
        redirect('login');
    }
}