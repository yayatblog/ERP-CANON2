<?php

class M_ekspedisi extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('daftarekspedisi')->result_array();
    }
    public function tambahDataEkspedisi(){
        $data = [
            "kode" => $this->input->post('kode',true),
            "nama" => $this->input->post('nama',true)
        ];
        $this->db->insert('daftarekspedisi',$data);
    }
    
    public function getEkspedisiById($id){
        return $this->db->get_where('daftarekspedisi',['id'=>$id])->row_array();
    }
    public function hapusDataEkspedisi($id){
        $this->db->where('id',$id);
        $this->db->delete('daftarekspedisi');
    }
    public function ubahDataEkspedisi(){
        $data = [
            "kode" => $this->input->post('kode',true),
            "nama" => $this->input->post('nama',true)
            
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('daftarekspedisi',$data);
    }
}
