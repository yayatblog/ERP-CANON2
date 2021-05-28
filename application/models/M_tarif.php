<?php

class M_tarif extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('daftarkirim')->result_array();
    }
    public function tambahDataKirim(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "jenis" => $this->input->post('jenis',true),
            "tarif" => $this->input->post('tarif',true),
            "waktu" => $this->input->post('waktu',true)
        ];
        $this->db->insert('daftarkirim',$data);
    }
}
