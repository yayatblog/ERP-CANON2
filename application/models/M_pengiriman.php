<?php

class M_pengiriman extends CI_Model{
    function tampil_data(){
        $hasil=$this->db->query("SELECT * FROM pengiriman");
		 return $hasil;
    }
	
	function tampil_barang(){
        $hasil=$this->db->query("SELECT * FROM produk");
		 return $hasil;
    }
	
	function tampil_cetak(){
	 $this->db->select('*');
	 $this->db->from('pengiriman');
	 $this->db->order_by('id', 'DESC');
	 $this->db->limit(1);
	 $query = $this->db->get();
	 return $query->result();
	}
	
    public function tampil(){
     $hasil=$this->db->query("SELECT * FROM `pengiriman` ORDER BY id DESC  LIMIT 1");
		 return $hasil;
			}
	
	public function kode(){
		  $this->db->select('RIGHT(daftarmitra.id,2) as id', FALSE);
		  $this->db->order_by('id','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('daftarmitra');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('d/'); 
			  $batas = str_pad($kode, 4, "PP/", STR_PAD_LEFT);    
			  $kodetampil = ""."".$tgl.$batas;  //format kode
			  return $kodetampil;  
		 }
	
	public function tampil_datamitra(){
        $hasil=$this->db->query("SELECT * FROM daftarmitra");
		 return $hasil;
    }
	
	
	function tampil_datamitra1(){
    $username=$this->session->userdata("username");
     $this->db->where('users.username',"$username");
	  $this->db->select('*');
	 $this->db->from('users');
	 $this->db->join('pengiriman','pengiriman.kode_id=users.kode_id');
	 $query = $this->db->get();
	 return $query->result_array();
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
    public function tambahDataPengiriman(){
        $data = [
            "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "qty_karton" => $this->input->post('qty_karton',true),
            "qty_perkarton" => $this->input->post('qty_perkarton',true),
            "total" => $this->input->post('total',true),
			"gudang_asal" => $this->input->post('gudang_asal',true),
            "gudang_tujuan" => $this->input->post('gudang_tujuan',true),
            "stok" => $this->input->post('stok',true),
            "kepada" => $this->input->post('kepada',true),
            "alamat" => $this->input->post('alamat',true),
			"kota" => $this->input->post('kota',true),
            "no_telepon" => $this->input->post('no_telepon',true),
            "tanggal" => $this->input->post('tanggal',true),
            "no_do" => $this->input->post('no_do',true),
            "manager_gudang" => $this->input->post('manager_gudang',true),
			"no_kontainer" => $this->input->post('no_kontainer',true),
            "no_segel" => $this->input->post('no_segel',true)
        ];
        $this->db->insert('pengiriman',$data);
    }
    public function getPengirimanById($id){
        return $this->db->get_where('pengiriman',['id'=>$id])->row_array();
    }
	
	
    public function hapusDataPengiriman($id){
        $this->db->where('id',$id);
        $this->db->delete('pengiriman');
    }
    public function ubahDataPengiriman(){
        $data = [
           "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "qty_karton" => $this->input->post('qty_karton',true),
            "qty_perkarton" => $this->input->post('qty_perkarton',true),
            "total" => $this->input->post('total',true),
			"gudang_asal" => $this->input->post('gudang_asal',true),
            "gudang_tujuan" => $this->input->post('gudang_tujuan',true),
            "stok" => $this->input->post('stok',true),
            "kepada" => $this->input->post('kepada',true),
            "alamat" => $this->input->post('alamat',true),
			"kota" => $this->input->post('kota',true),
            "no_telepon" => $this->input->post('no_telepon',true),
            "tanggal" => $this->input->post('tanggal',true),
            "no_do" => $this->input->post('no_do',true),
            "manager_gudang" => $this->input->post('manager_gudang',true),
			"no_kontainer" => $this->input->post('no_kontainer',true),
            "no_segel" => $this->input->post('no_segel',true),
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('pengiriman',$data);
    }
    public function cariDataKaryawan(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('jabatan',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('pengiriman')->result_array();
    }
}