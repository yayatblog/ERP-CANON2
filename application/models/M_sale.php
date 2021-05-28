<?php

class M_sale extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('grosssale')->result_array();
    }
    public function tambahDataSale(){
        $data = [
            "manager" => $this->input->post('manager',true),
            "lokasi" => $this->input->post('lokasi',true),
            "gross_sale" => $this->input->post('gross_sale',true),
            "profit" => $this->input->post('profit',true),
            "pcs" => $this->input->post('pcs',true),
            "point" => $this->input->post('point',true)
        ];
        $this->db->insert('grosssale',$data);
    }
    public function getSaleById($id){
        return $this->db->get_where('overrides',['id'=>$id])->row_array();
    }
    public function hapusDataSale($id){
        $this->db->where('id',$id);
        $this->db->delete('grosssale');
    }
    public function ubahDataSale(){
        $data = [
            "manager" => $this->input->post('manager',true),
            "location" => $this->input->post('location',true),
            "gross_sale" => $this->input->post('gross_sale',true),
            "profit" => $this->input->post('profit',true),
            "pcs" => $this->input->post('pcs',true),
            "point" => $this->input->post('point',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('overrides',$data);
    }
}
