<?php


class TarifKirim extends CI_Controller
{
    public function index(){
        $topik['judul'] = 'Halaman Menu Karyawan';
        $data['tarif'] = $this->m_tarif->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('daftarkirim/index',$data);
        $this->load->view('templates/footer');
    }
}
