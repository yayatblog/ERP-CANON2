<?php

class M_penerimaan extends CI_Model{
    function tampil_data(){
        $hasil=$this->db->query("SELECT * FROM penerimaan");
		 return $hasil;
    }
	
	function tampil_data_akun(){
        $hasil=$this->db->query("SELECT * FROM akun_pembayaran");
		 return $hasil;
    }
	
	function get_option() {
		 $this->db->select('*');
		 $this->db->from('akun_pembayaran');
		 $query = $this->db->get();
		 return $query->result();
		}
	
	function tampil_supplier(){
        $hasil=$this->db->query("SELECT * FROM supplier");
		 return $hasil;
    }
	
	function tampil_barang(){
        $hasil=$this->db->query("SELECT * FROM produk");
		 return $hasil;
    }
	
	function tampil_total_qty(){
        $hasil=$this->db->query("SELECT SUM(`total_qty`) AS sum_total_qty FROM `penerimaan`");
		 return $hasil;
    }
	
	function tampil_total_harga(){
        $hasil=$this->db->query("SELECT SUM(`harga`) AS sum_total_harga FROM `penerimaan`");
		 return $hasil;
    }
	
	function tampil_cetak(){
	 $this->db->select('*');
	 $this->db->from('penerimaan');
	 $this->db->order_by('id', 'DESC');
	 $this->db->limit(1);
	 $query = $this->db->get();
	 return $query->result();
	}
	
    public function tampil(){
     $hasil=$this->db->query("SELECT * FROM `penerimaan` ORDER BY id DESC  LIMIT 1");
		 return $hasil;
			}
		 public function kode1(){
		  $this->db->select('RIGHT(penerimaan.no_lpb,2) as no_lpb', FALSE);
		  $this->db->order_by('no_lpb','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('penerimaan');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->no_lpb) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('d'); 
			  $batas = str_pad($kode, 4, "LPB", STR_PAD_LEFT);    
			  $kodetampil = ""."".$tgl.$batas;  //format kode
			  return $kodetampil;  
		 }
	
	public function tampil_datamitra(){
        $hasil=$this->db->query("SELECT * FROM daftarmitra");
		 return $hasil;
    }
    public function tambahDataPenerimaan(){
        $data = [
            "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "qty" => $this->input->post('qty',true),
            "isi_karton" => $this->input->post('isi_karton',true),
            "total_qty" => $this->input->post('total_qty',true),
            "harga" => $this->input->post('harga',true),
            "no_sj" => $this->input->post('no_sj',true),
			"tanggal" => $this->input->post('tanggal',true),
            "no_lpb" => $this->input->post('no_lpb',true),
            "no_po" => $this->input->post('no_po',true),
            "no_kontiner" => $this->input->post('no_kontiner',true),
            "no_polisi" => $this->input->post('no_polisi',true),
            "nama_supir" => $this->input->post('nama_supir',true),
            "no_segel" => $this->input->post('no_segel',true),
			"gudang" => $this->input->post('gudang',true),
			"supplier" => $this->input->post('supplier',true)
        ];
        $this->db->insert('penerimaan',$data);
    }
	
	
	
	
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function input_data_akun($data,$table){
		$this->db->insert($table,$data);
	}
	
	
    public function getPenerimaanById($id){
        return $this->db->get_where('penerimaan',['id'=>$id])->row_array();
    }
    public function hapusDataPenerimaan($id){
        $this->db->where('id',$id);
        $this->db->delete('penerimaan');
    }
	
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
    }
	
    public function ubahDataPenerimaan(){
        $data = [
             "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "qty" => $this->input->post('qty',true),
            "isi_karton" => $this->input->post('isi_karton',true),
            "total_qty" => $this->input->post('total_qty',true),
            "harga" => $this->input->post('harga',true),
            "no_sj" => $this->input->post('no_sj',true),
			"tanggal" => $this->input->post('tanggal',true),
            "no_lpb" => $this->input->post('no_lpb',true),
            "no_po" => $this->input->post('no_po',true),
            "no_kontiner" => $this->input->post('no_kontiner',true),
            "no_polisi" => $this->input->post('no_polisi',true),
            "nama_supir" => $this->input->post('nama_supir',true),
            "no_segel" => $this->input->post('no_segel',true),
			"gudang" => $this->input->post('gudang',true),
			"supplier" => $this->input->post('supplier',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('penerimaan',$data);
    }
    public function cariDataKaryawan(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('jabatan',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('penerimaan')->result_array();
    }
}