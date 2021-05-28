<?php

class M_chart extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('product_chart')->result_array();
    }

    public function getData($weekending, $jabatan, $gudang) {
        if ($weekending != "-") {
            $this->db->where('tgl', $weekending);
        }

        if ($jabatan != "-") {
            $this->db->where('jabatan', $jabatan);
        }

        if ($gudang != "-") {
            $this->db->where('gudang', $gudang);
        }

        // if (!$weekending && !$jabatan && !$gudang) {
        //     return "";
        // }

            // $this->db->where('gudang', $gudang);
        return $this->db->get('product_chart')->result_array();
    }

    public function getDataById($id) {
        return $this->db->get_where('product_chart', ['id' => $id])->row_array();
    }

    public function weekending() {
        $this->db->select('tgl');
        $this->db->distinct();
        $this->db->where_not_in('tgl', 'up');
        return $this->db->get('product_chart')->result_array();
    }

    public function jabatan() {
        $this->db->select('nama_jabatan');
        $this->db->where_not_in('nama_jabatan', 'Divisional Manager');
        return $this->db->get('jabatan')->result_array();
    }

    public function gudang() {
        $this->db->select('nama, alamat');
        return $this->db->get('gudang')->result_array();
    }

    public function tambahDataChart(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "manager" => $this->input->post('manager',true),
            "profit_sabtu" => $this->input->post('profit_sabtu',true),
            "profit_minggu" => $this->input->post('profit_minggu',true),
            "profit_senin" => $this->input->post('profit_senin',true),
            "profit_selasa" => $this->input->post('profit_selasa',true),
            "profit_rabu" => $this->input->post('profit_rabu',true),
            "profit_kamis" => $this->input->post('profit_kamis',true),
            "profit_jumat" => $this->input->post('profit_jumat',true),
            "total_profit" => $this->input->post('total_profit',true),
            "total_poin" => $this->input->post('total_poin',true)
        ];
        $this->db->insert('product_chart',$data);
    }
    
    public function getMitraById($id){
        return $this->db->get_where('product_chart',['id'=>$id])->row_array();
    }
    public function hapusDataChart($id){
        $this->db->where('id',$id);
        $this->db->delete('product_chart');
    }
    public function ubahDataMitra(){
        $data = [
            "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "tgl_lahir" => $this->input->post('tgl_lahir',true),
            "jabatan" => $this->input->post('jabatan',true),
            "promoter" => $this->input->post('promoter',true),
            "thn_gabung" => $this->input->post('thn_gabung',true),
            "gudang" => $this->input->post('gudang',true),
            "alamat" => $this->input->post('alamat',true),
            "kota" => $this->input->post('kota',true),
            "telepon" => $this->input->post('telepon',true),
            "email" => $this->input->post('email',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('daftarmitra',$data);
    }
    public function cariDataMitra(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('kategori',$keyword);
        return $this->db->get('daftarmitra')->result_array();
        // $this->db->select('
        // produk.*,tbl_category.id AS id_role,tbl_category.name');
        // return $this->db->get('produk')->result_array();

    }
}
