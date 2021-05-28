<?php

class M_hutang extends CI_Model{
    public function tampil_data(){
        return $this->db->get('hutang')->result_array();
    }
    public function tambahDataHutang(){
        $data = [
            "tgl" => $this->input->post('tgl',true),
            "no_referensi" => $this->input->post('no_referensi',true),
            "jatuh_tempo" => $this->input->post('jatuh_tempo',true),
            "mata_uang" => $this->input->post('mata_uang',true),
            "debit" => $this->input->post('debit',true),
            "kredit" => $this->input->post('kredit',true),
            "saldo" => $this->input->post('saldo',true)
        ];
        $this->db->insert('hutang',$data);
    }
    public function getHutangById($id){
        return $this->db->get_where('hutang',['id'=>$id])->row_array();
    }
    public function hapusDataHutang($id){
        $this->db->where('id',$id);
        $this->db->delete('hutang');
    }
    public function ubahDataHutang(){
        $data = [
            "tgl" => $this->input->post('tgl',true),
            "no_referensi" => $this->input->post('no_referensi',true),
            "jatuh_tempo" => $this->input->post('jatuh_tempo',true),
            "mata_uang" => $this->input->post('mata_uang',true),
            "debit" => $this->input->post('debit',true),
            "kredit" => $this->input->post('kredit',true),
            "saldo" => $this->input->post('saldo',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('hutang',$data);
    }
    public function cariDataKaryawan(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('jabatan',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('hutang')->result_array();
    }
}