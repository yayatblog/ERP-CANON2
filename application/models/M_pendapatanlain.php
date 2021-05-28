<?php

class M_pendapatanlain extends CI_Model{
    public function tampil_data(){
        return $this->db->get('pendapatanlain')->result_array();
    }
    public function tambahDataPendapatan(){
        $data = [
            "tgl" => $this->input->post('tgl',true),
            "no_faktur" => $this->input->post('no_faktur',true),
            "transaksi" => $this->input->post('transaksi',true),
            "jumlah" => $this->input->post('jumlah',true)
            
        ];
        $this->db->insert('pendapatanlain',$data);
    }
    public function getPendapatanById($id){
        return $this->db->get_where('pendapatanlain',['id'=>$id])->row_array();
    }
    public function hapusDataPendapatan($id){
        $this->db->where('id',$id);
        $this->db->delete('pendapatanlain');
    }
    public function ubahDataPendapatan(){
        $data = [
            "tgl" => $this->input->post('tgl',true),
            "no_faktur" => $this->input->post('no_faktur',true),
            "transaksi" => $this->input->post('transaksi',true),
            "jumlah" => $this->input->post('jumlah',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('pendapatanlain',$data);
    }
    public function cariDataKaryawan(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('jabatan',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('pendapatanlain')->result_array();
    }
}