<?php

class Profil extends CI_Controller
{
    public function index(){
        $topik['judul'] = 'Halaman Profil Perusahaan';
        $this->load->view('templates/header',$topik);
        $this->load->view('landingpage');
        $this->load->view('templates/footer');
    }
}
