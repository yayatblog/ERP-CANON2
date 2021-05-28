<?php

class M_saving extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('overrides')->result_array();
    }
    public function tambahDataSummary(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "kantor" => $this->input->post('kantor',true),
            "summary" => $this->input->post('summary',true),
            "saldo_awal" => $this->input->post('saldo_awal',true),
            "masuk" => $this->input->post('masuk',true),
            "keluar" => $this->input->post('keluar',true),
            "total" => $this->input->post('total',true),
            "total_saving" => $this->input->post('total_saving',true)
        ];
        $this->db->insert('overrides',$data);
    }
    public function getSummaryById($id){
        return $this->db->get_where('overrides',['id'=>$id])->row_array();
    }
    public function hapusDataSummary($id){
        $this->db->where('id',$id);
        $this->db->delete('overrides');
    }
    public function ubahDataSummary(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "kantor" => $this->input->post('kantor',true),
            "summary" => $this->input->post('summary',true),
            "saldo_awal" => $this->input->post('saldo_awal',true),
            "masuk" => $this->input->post('masuk',true),
            "keluar" => $this->input->post('keluar',true),
            "total" => $this->input->post('total',true),
            "total_saving" => $this->input->post('total_saving',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('overrides',$data);
    }
}
