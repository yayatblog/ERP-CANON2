<?php 

defined('BASEPATH') or exit('No direct script access allowed');


class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
    }

    public function check_account()
    {
        //validasi login
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');

        //ambil data dari database untuk validasi login
        $query = $this->Auth_model->check_account($email, $password);

        if ($query === 1) {
            $this->session->set_flashdata('alert', '<p class="box-msg">
        			<div class="info-box alert-danger">
        			<div class="info-box-icon">
        			<i class="fa fa-warning"></i>
        			</div>
        			<div class="info-box-content" style="font-size:14">
        			<b style="font-size: 20px">GAGAL</b><br>Email yang Anda masukkan tidak terdaftar.</div>
        			</div>
        			</p>
            ');
        } elseif ($query === 2) {
            $this->session->set_flashdata('alert', '<p class="box-msg">
              <div class="info-box alert-info">
              <div class="info-box-icon">
              <i class="fa fa-info-circle"></i>
              </div>
              <div class="info-box-content" style="font-size:14">
              <b style="font-size: 20px">GAGAL</b><br>Akun yang Anda masukkan tidak aktif, silakan hubungi Administrator.</div>
              </div>
              </p>'
            );
        } 
        else {
            //membuat session dengan nama userData yang artinya nanti data ini bisa di ambil sesuai dengan data yang login
            $userdata = array(
              'is_login'    => true,
              'id'          => $query->id,
              'password'    => $query->password,
              'id_role'     => $query->id_role,
              'username'    => $query->username,
              'first_name'  => $query->first_name,
              'last_name'   => $query->last_name,
              'email'       => $query->email,
            //   'phone'       => $query->phone,
            //   'photo'       => $query->photo,
              'created_on'  => $query->created_on,
              'last_login'  => $query->last_login
            );
            $this->session->set_userdata($userdata);
            return true;
        }
    }
    public function login()
    {
        $topik['judul'] = 'Halaman Menu Login';
        // $this->load->view('templates/header',$topik);
        $this->load->view('login',$topik);
        // $this->load->view('templates/footer');
        // $site = $this->Konfigurasi_model->listing();
        // $data = array(
        //     'title'     => 'Login | '.$site['nama_website'],
        //     'favicon'   => $site['favicon'],
        //     'site'      => $site
        // );
        //melakukan pengalihan halaman sesuai dengan levelnya
        if ($this->session->userdata('id_role') == "1") {
            redirect('dashboard');
                   // Untuk Admin
        }
        if ($this->session->userdata('id_role') == "2") {
            // redirect('pembina');
            redirect('dashboard2');

            // Untuk Karyawan
        }
        

        //proses login dan validasi nya
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[22]');
            $error = $this->check_account();

            if ($this->form_validation->run() && $error === true) {
                $data = $this->Auth_model->check_account($this->input->post('email'), $this->input->post('password'));

                //jika bernilai TRUE maka alihkan halaman sesuai dengan level nya
                if ($data->id_role == '1') {
                    redirect('dashboard');
                    // Untuk Admin
                }if ($data->id_role == '2') {
                    redirect('dashboard2');
                    // Untuk Karyawan
                    // redirect('pembina');
            } 
            } else {
                // $this->template->load('authentication/layouts/template', 'authentication/login', $data);
                $this->load->view('login');
            }
        }
        // } else {
        //     // $this->template->load('authentication/layouts/template', 'authentication/login', $data);
        //     $this->load->view('login');

        // }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
    public function registrasi(){
        // $site = $this->Konfigurasi_model->listing();
        // $daya = array(
        //     'title'     => 'Login'
        // );
        $topik['judul'] = 'Halaman Registrasi';
        // $this->load->view('registrasi',$topik);

        //trim untuk membuat spasi tidak masuk ke database
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|matches[password2]',[
            'matches' =>'Password Don`t Match'
        ]);
        $this->form_validation->set_rules('password2','Password','required|matches[password]');
        $this->form_validation->set_rules('first_name','First_Name','required|trim');
        $this->form_validation->set_rules('last_name','Last_Name','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email');
        // $this->form_validation->set_rules('phone','Phone','required|trim');


        if ($this->form_validation->run() == false) {
            // $this->load->view('registrasi');
            $this->load->view('registrasi',$topik);

        }else {
            // echo "Data Berhasil Ditambahkan";
            $data = [
                'id_role'=>'2',
                'username'=>$this->input->post('username'),
                'password'=>password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                // 'password'=>$this->input->post('password'),
                // 'password_reset_key'=>$this->input->post('password_reset_key'),
                'first_name'=>$this->input->post('first_name'),
                'last_name'=>$this->input->post('last_name'),
                'email'=>$this->input->post('email'),
                // 'phone'=>$this->input->post('phone'),
                // 'photo'=>'1526456245974.png',
                'activated'=>'1',
                'last_login'=>date('Y-m-d H:i:s'),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ];
            $this->db->insert('tbl_user',$data);
            redirect('auth/login');
        }
}
}
