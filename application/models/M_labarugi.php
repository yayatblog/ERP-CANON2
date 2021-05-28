<?php

class M_labarugi extends CI_Model{
    public function tampil_data(){
        return $this->db->get('labarugi')->result_array();
    }
    public function tambahDataKategori(){
        $data = [
            "name" => $this->input->post('name',true),
            "description" => $this->input->post('description',true),

        ];
        $this->db->insert('tbl_category',$data);
    }
    public function getKategoriById($id){
        return $this->db->get_where('tbl_category',['id'=>$id])->row_array();
    }
    public function hapusDataKategori($id){
        $this->db->where('id',$id);
        $this->db->delete('tbl_category');
    }
    public function ubahDataKategori(){
        $data = [
            "name" => $this->input->post('name',true),
            "description" => $this->input->post('description',true),

        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('tbl_category',$data);
    }
}