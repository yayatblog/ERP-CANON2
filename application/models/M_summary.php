<?php

class M_summary extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('summary')->result_array();
    }

    public function getData($weekending) {
        $this->db->where('tgl', $weekending);
        // $this->db->where('manager.no_invoice, inout_manager.no_invoice');
        return $this->db->get('manager')->result_array();
    }

    public function getDataInOut($weekending) {
        $this->db->select('keterangan, debit, kredit');
        $this->db->where('tgl', $weekending);
        return $this->db->get('inout_manager')->result_array();
    }

    public function getSUMPcs($weekending) {
        $this->db->select('SUM(qty) as totalqty');
        $this->db->where('tgl', $weekending);
        return $this->db->get('manager')->result_array();
    }

    public function tambahDataSummary(){
        $data = [
            "kode" => $this->input->post('kode',true),
            "nama" => $this->input->post('nama',true),
            "harga_manager" => $this->input->post('harga_manager',true),
            "total_pcs" => $this->input->post('total_pcs',true),
            "keterangan" => $this->input->post('keterangan',true),
            "debit" => $this->input->post('debit',true),
            "kredit" => $this->input->post('kredit',true)
        ];
        $this->db->insert('summary',$data);
    }
    public function getSummaryById($id){
        return $this->db->get_where('summary',['id'=>$id])->row_array();
    }
    public function hapusDataSummary($id){
        $this->db->where('id',$id);
        $this->db->delete('summary');
    }
    public function ubahDataSummary(){
        $data = [
            "kode" => $this->input->post('kode',true),
            "nama" => $this->input->post('nama',true),
            "alamat" => $this->input->post('alamat',true),
            "telepon" => $this->input->post('telepon',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('summary',$data);
    }
}
