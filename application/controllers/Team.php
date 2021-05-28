<?php

class Team extends CI_Controller
{
    public function index(){
        $topik['judul'] = 'Team Page';
        $this->load->view('templates2/header',$topik);
        $this->load->view('team');
        $this->load->view('templates2/footer');
    }
}