<?php

class M_transfergudang extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('tf_gudang')->result_array();
    }
    public function tambahDataTfGudang(){
        $data = [
            "tgl" => $this->input->post('tgl',true),
            "no_transfer" => $this->input->post('no_transfer',true),
            "keterangan" => $this->input->post('keterangan',true),
            "kode" => $this->input->post('kode',true),
            "barang" => $this->input->post('barang',true),
            "gudang_asal" => $this->input->post('gudang_asal',true),
            "gudang_tujuan" => $this->input->post('gudang_tujuan',true),
            "qty" => $this->input->post('qty',true)
        ];
        $this->db->insert('tf_gudang',$data);
    }
    public function getTfGudangById($id){
        return $this->db->get_where('tf_gudang',['id'=>$id])->row_array();
    }
    public function hapusDataTfGudang($id){
        $this->db->where('id',$id);
        $this->db->delete('tf_gudang');
    }
    public function ubahDataTfGudang(){
        $data = [
            "tgl" => $this->input->post('tgl',true),
            "no_transfer" => $this->input->post('no_transfer',true),
            "keterangan" => $this->input->post('keterangan',true),
            "kode" => $this->input->post('kode',true),
            "barang" => $this->input->post('barang',true),
            "gudang_asal" => $this->input->post('gudang_asal',true),
            "gudang_tujuan" => $this->input->post('gudang_tujuan',true),
            "qty" => $this->input->post('qty',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('tf_gudang',$data);
    }
}
