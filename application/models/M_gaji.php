<?php

class M_gaji extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('gaji')->result_array();
    }
    public function tambahDataGaji(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "jabatan" => $this->input->post('jabatan',true),
            "jumlah_anak" => $this->input->post('jumlah_anak',true),
            "status" => $this->input->post('status',true),
            "gapok" => $this->input->post('gapok',true),
            "tunjangan_jabatan" => $this->input->post('tunjangan_jabatan',true),
            "gaji_diterima" => $this->input->post('gaji_diterima',true)

        ];
        $this->db->insert('gaji',$data);
    }
    
    public function getGajiById($id){
        return $this->db->get_where('gaji',['id'=>$id])->row_array();
    }
    public function hapusDataGaji($id){
        $this->db->where('id',$id);
        $this->db->delete('gaji');
    }
    public function ubahDataGaji(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "jabatan" => $this->input->post('jabatan',true),
            "jumlah_anak" => $this->input->post('jumlah_anak',true),
            "status" => $this->input->post('status',true),
            "gapok" => $this->input->post('gapok',true),
            "tunjangan_jabatan" => $this->input->post('tunjangan_jabatan',true),
            "gaji_diterima" => $this->input->post('gaji_diterima',true)
            
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('gaji',$data);
    }
}
