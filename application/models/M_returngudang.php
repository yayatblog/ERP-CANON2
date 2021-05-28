<?php

class M_returngudang extends CI_Model{
    public function tampil_data(){
        return $this->db->get('return_gudang')->result_array();
    }
    public function tambahDataReturn_gudang(){
        $data = [
            "tanggal" => $this->input->post('tanggal',true),
            "no_faktur" => $this->input->post('no_faktur',true),
            "keterangan" => $this->input->post('keterangan',true),
            "kode" => $this->input->post('kode',true),
            "barang" => $this->input->post('barang',true),
            "gudang_asal" => $this->input->post('gudang_asal',true),
            "gudang_tujuan" => $this->input->post('gudang_tujuan',true),
            "jumlah" => $this->input->post('jumlah',true)
        ];
        $this->db->insert('return_gudang',$data);
    }
    public function getReturn_gudangById($id){
        return $this->db->get_where('return_gudang',['id'=>$id])->row_array();
    }
    public function hapusDataReturn_gudang($id){
        $this->db->where('id',$id);
        $this->db->delete('return_gudang');
    }
    public function ubahDataReturn_gudang(){
        $data = [
            "tanggal" => $this->input->post('tanggal',true),
            "no_faktur" => $this->input->post('no_faktur',true),
            "keterangan" => $this->input->post('keterangan',true),
            "kode" => $this->input->post('kode',true),
            "barang" => $this->input->post('barang',true),
            "gudang_asal" => $this->input->post('gudang_asal',true),
            "gudang_tujuan" => $this->input->post('gudang_tujuan',true),
            "jumlah" => $this->input->post('jumlah',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('return_gudang',$data);
    }
    // public function cariDataKaryawan(){
    //     $keyword = $this->input->post('keyword',true);
    //     $this->db->like('nama',$keyword);
    //     $this->db->or_like('jabatan',$keyword);
    //     $this->db->or_like('alamat',$keyword);
    //     return $this->db->get('return_gudang')->result_array();
    // }
}