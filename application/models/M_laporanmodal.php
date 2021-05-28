<?php

class M_laporanmodal extends CI_Model{
    public function tampil_data(){
        return $this->db->get('laporanmodal')->result_array();
    }
    public function tambahDataLaporanmodal(){
        $data = [
            "name" => $this->input->post('name',true),
            "description" => $this->input->post('description',true),

        ];
        $this->db->insert('laporanmodal',$data);
    }
    public function getLaporanmodalById($id){
        return $this->db->get_where('laporanmodal',['id'=>$id])->row_array();
    }
    public function hapusDataLaporanmodal($id){
        $this->db->where('id',$id);
        $this->db->delete('laporanmodal');
    }
    public function ubahDataLaporanmodal(){
        $data = [
            "name" => $this->input->post('name',true),
            "description" => $this->input->post('description',true),

        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('laporanmodal',$data);
    }
}