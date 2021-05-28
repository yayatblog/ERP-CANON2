<?php

class M_karyawan extends CI_Model{
    public $kode;

    public function tampil_data(){
        return $this->db->get('karyawan')->result_array();
    }
    public function cekkodekaryawan(){
        $query = $this->db->query("SELECT MAX(kode) as kode from karyawan");
        $hasil = $query->row();
        return $hasil->kode;
      }
    public function tambahDataKaryawan(){
        $data = [
            
            "kode" => $this->input->post('kode',true),
            "nama" => $this->input->post('nama',true),
            "tgl_lahir" => $this->input->post('tgl_lahir',true),
            "jabatan" => $this->input->post('jabatan',true),
            "thn_gabung" => $this->input->post('thn_gabung',true),
            "alamat" => $this->input->post('alamat',true),
            "kota" => $this->input->post('kota',true),
            "no_telp" => $this->input->post('no_telp',true),
            "email" => $this->input->post('email',true),

        ];
        $this->db->insert('karyawan',$data);
    }
    public function hitungJumlahAsset(){

    $query = $this->db->get('karyawan');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
    }
    // public function getKaryawanById($id){
    //     return $this->db->get_where('karyawan',['id'=>$id])->row_array();
    // }
    public function hapusDataKaryawan($id){
        $this->db->where('id',$id);
        $this->db->delete('karyawan');
    }
    public function getKaryawanById($id){
        return $this->db->get_where('karyawan',['id'=>$id])->row_array();
    }
    public function ubahDataKaryawan(){
        $data = [
            "kode" => $this->input->post('kode',true),
            "nama" => $this->input->post('nama',true),
            "tgl_lahir" => $this->input->post('tgl_lahir',true),
            "jabatan" => $this->input->post('jabatan',true),
            "thn_gabung" => $this->input->post('thn_gabung',true),
            "alamat" => $this->input->post('alamat',true),
            "kota" => $this->input->post('kota',true),
            "no_telp" => $this->input->post('no_telp',true),
            "email" => $this->input->post('email',true)

        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('karyawan',$data);
    }
    public function cariDataKaryawan(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('jabatan',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('karyawan')->result_array();
    }
}