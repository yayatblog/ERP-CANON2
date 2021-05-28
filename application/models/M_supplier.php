<?php

class M_supplier extends CI_Model
{
    public $kode;
    // public $nama_supplier;

    public function tampil_data(){
        return $this->db->get('supplier')->result_array();
    }
    // public function cekkodesupplier()
    // {
    //     $query = $this->db->query("SELECT MAX(kode_barang) as kodebarang from barang");
    //     $hasil = $query->row();
    //     return $hasil->kodebarang;
    // }
    public function cekkodesupplier(){
        {
            $query = $this->db->query("SELECT MAX(kode) as kode from supplier");
            $hasil = $query->row();
            return $hasil->kode;
        }
    }
    public function tambahDataSupplier(){
        $data = [
            "kode" => $this->input->post('kode',true),
            "nama" => $this->input->post('nama',true),
            "alamat" => $this->input->post('alamat',true),
            "telepon" => $this->input->post('telepon',true)

        ];
        $this->db->insert('supplier',$data);
    }
    public function getSupplierById($id){
        return $this->db->get_where('supplier',['id'=>$id])->row_array();
    }
    public function hapusDataSupplier($id){
        $this->db->where('id',$id);
        $this->db->delete('supplier');
    }
    public function ubahDataSupplier(){
        $data = [
            "kode" => $this->input->post('kode',true),
            "nama" => $this->input->post('nama',true),
            "alamat" => $this->input->post('alamat',true),
            "telepon" => $this->input->post('telepon',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('supplier',$data);
    }
}
