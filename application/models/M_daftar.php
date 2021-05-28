<?php

class M_daftar extends CI_Model
{
    public $kode_id;
    
    public function tampil_data(){
        return $this->db->get('daftarmitra')->result_array();
    }
    public function tampil_gudang(){
        return $this->db->get('gudang')->result_array();
    }
    public function cekkodebarang()
    {
        $query = $this->db->query("SELECT MAX(kode_id) as kode_id from daftarmitra");
        $hasil = $query->row();
        return $hasil->kode_id;
    }
	
	function tampil_mitra(){
    $username=$this->session->userdata("username");
     $this->db->where('users.username',"$username");
	  $this->db->select('daftarmitra.id,daftarmitra.kode_id,daftarmitra.nama,daftarmitra.tgl_lahir,daftarmitra.jabatan,daftarmitra.promoter,daftarmitra.thn_gabung,daftarmitra.gudang,daftarmitra.alamat,daftarmitra.kota,daftarmitra.telepon,daftarmitra.email');
	 $this->db->from('users');
	 $this->db->join('daftarmitra','daftarmitra.kode_id=users.kode_id');
	 $query = $this->db->get();
	 return $query->result_array();
	}
	
    public function getLatestAccount() {
        $this->db->select_max('akun_simpanan', 'akun_simpanan');
        $this->db->select_max('akun_override', 'akun_override');
        $this->db->limit(1);
        return $this->db->get('daftarmitra')->row_array();
    }

    public function tambahDataMitra() {
        $akun = $this->getLatestAccount();
        $data = [
            "kode_id" => $this->input->post('kode_id',true),
            "akun_simpanan" => ($akun['akun_simpanan'] + 1),
            "akun_override" => ($akun['akun_override'] + 1),
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
        $this->db->insert('daftarmitra',$data);
    }
    
    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
    public function getMitraById($id){
        return $this->db->get_where('daftarmitra',['id'=>$id])->row_array();
    }
    public function hapusDataMitra($id){
        $this->db->where('id',$id);
        $this->db->delete('daftarmitra');
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
