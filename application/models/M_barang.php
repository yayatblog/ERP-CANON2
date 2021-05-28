<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model
{
    // private $_table = "tbl_product";

    // public $id;
    // public $product_id;
    // public $nama;
    // public $kode;
    // public $id_role;
    // public $hargajual;
    // public $hargabeli;
    // public $detail;
    public $image = "default.jpg";

    // public function rules()
    // {
    //     return [
    //         ['field'=>'nama',
    //         'label'=>'Nama',
    //         'rules'=>'required'],

    //         ['field'=>'kode',
    //         'label'=>'Kode',
    //         'rules'=>'required'],

    //         ['field'=>'id_role',
    //         'label'=>'Id_role',
    //         'rules'=>'numeric'],

    //         ['field' => 'hargajual',
    //         'label' => 'Hargajual',
    //         'rules'=>'numeric'],

    //         ['field' => 'hargabeli',
    //         'label' => 'Hargabeli',
    //         'rules'=>'numeric'],

    //         ['field' => 'detail',
    //         'label' => 'Detail',
    //         'rules'=>'required'],
    //     ];
    // }
    // public function tampil_data(){
    //     // return $this->db->get('produk')->result();
    //     return $this->db->get('produk')->result_array();
    // }
	
	function show_barang(){
		$hasil=$this->db->query("SELECT * FROM produk");
		 return $hasil;
	}
	
	function tampil_barang(){
    $username=$this->session->userdata("username");
     $this->db->where('users.username',"$username");
	  $this->db->select('*');
	 $this->db->from('users');
	 $this->db->join('produk','produk.kode_id=users.kode_id');
	 $query = $this->db->get();
	 return $query->result_array();
	}
	
	public function search()
			{
			$this->db->where('kategori =',$this->input->post('kategori'));
			$this->db->where('gudang =',$this->input->post('gudang'));
			$this->db->from('produk');
			$query=$this->db->get();
			return $query;
			}
			
			public function search_kode()
			{
			$this->db->where('kode =',$this->input->post('kode'));
			$this->db->where('nama =',$this->input->post('nama'));
			$this->db->from('produk');
			$query=$this->db->get();
			return $query;
			}
    
	
    public function get_by_role(){
        $this->db->select('produk.*, tbl_category.name as nm_kategori');
        $this->db->from('produk, tbl_category');
        $this->db->where('produk.kategori=tbl_category.kode');
        $query = $this->db->get();
        return $query->result_array();
    }
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	public function transferGudang(){
        $data = [
            "tgl"=>$this->input->post('tgl',true),
            "no_transfer"=>$this->input->post('no_transfer',true),
            "keterangan"=>$this->input->post('keterangan',true),
            "kode"=>$this->input->post('kode',true),
            "barang"=>$this->input->post('barang',true),
            "gudang_asal"=>$this->input->post('gudang_asal',true),
            "gudang_tujuan"=>$this->input->post('gudang_tujuan',true),
            "qty"=>$this->input->post('qty',true),
            "kode_id"=>$this->input->post('kode_id',true),
            
        ];
        $this->db->insert('tf_gudang',$data);
    }
    
	public function returnGudang(){
        $data = [
            "tanggal"=>$this->input->post('tanggal',true),
            "no_faktur"=>$this->input->post('no_faktur',true),
            "keterangan"=>$this->input->post('keterangan',true),
            "kode"=>$this->input->post('kode',true),
            "barang"=>$this->input->post('barang',true),
            "gudang_asal"=>$this->input->post('gudang_asal',true),
            "gudang_tujuan"=>$this->input->post('gudang_tujuan',true),
            "jumlah"=>$this->input->post('jumlah',true),
            "kode_id"=>$this->input->post('kode_id',true),
            
        ];
        $this->db->insert('return_gudang',$data);
    }
	
	public function itemRusak(){
        $data = [
            "tanggal"=>$this->input->post('tanggal',true),
            "no_faktur"=>$this->input->post('no_faktur',true),
            "keterangan"=>$this->input->post('keterangan',true),
            "kode"=>$this->input->post('kode',true),
            "barang"=>$this->input->post('barang',true),
            "gudang_asal"=>$this->input->post('gudang_asal',true),
            "supplier_tujuan"=>$this->input->post('supplier_tujuan',true),
            "jumlah"=>$this->input->post('jumlah',true),
            "kode_id"=>$this->input->post('kode_id',true),
            
        ];
        $this->db->insert('return_supplier',$data);
    }
	
    public function tambahDataProduct(){
        $data = [
            // "product_id"=>$this->input->post('product_id',true),
            "nama"=>$this->input->post('nama',true),
            "kode"=>$this->input->post('kode',true),
            "kategori"=>$this->input->post('kategori',true),
            "manager"=>$this->input->post('manager',true),
            "gudang"=>$this->input->post('gudang',true),
            "qty"=>$this->input->post('qty',true),
            "unitbagus"=>$this->input->post('unitbagus',true),
            "unitrusak"=>$this->input->post('unitrusak',true),
            "hpp"=>$this->input->post('hpp',true),
            "sebelumpajak"=>$this->input->post('sebelumpajak',true),
            "ppn"=>$this->input->post('ppn',true),
            "setelahpajak"=>$this->input->post('setelahpajak',true),
            "hargasetoran"=>$this->input->post('hargasetoran',true),
            "jumlah"=>$this->input->post('jumlah',true)
            // "image"=>$this->image = $this->_uploadImage()
        ];
        $this->db->insert('produk',$data);
    }
    // private function _uploadImage()
    // {
    //     $config['upload_path']          = './upload/product/';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['file_name']            = '';
    //     $config['overwrite']            = true;
    //     $config['max_size']             = 1024;

    //     $this->load->library('upload',$config);

    //     if ($this->upload->do_upload('image')) {
    //         return $this->upload->data("file_name");
    //     }
    //     return "default.jpg";
    // }
    public function getProdukById($id){
        return $this->db->get_where('produk',['id'=>$id])->row_array();
    }
    public function ubahDataProduct(){
        $data = [
            "nama"=>$this->input->post('nama',true),
            "kode"=>$this->input->post('kode',true),
            "kategori"=>$this->input->post('kategori',true),
            "manager"=>$this->input->post('manager',true),
            "gudang"=>$this->input->post('gudang',true),
            "qty"=>$this->input->post('qty',true),
            "unitbagus"=>$this->input->post('unitbagus',true),
            "unitrusak"=>$this->input->post('unitrusak',true),
            "hpp"=>$this->input->post('hpp',true),
            "sebelumpajak"=>$this->input->post('sebelumpajak',true),
            "ppn"=>$this->input->post('ppn',true),
            "setelahpajak"=>$this->input->post('setelahpajak',true),
            "hargasetoran"=>$this->input->post('hargasetoran',true),
            "jumlah"=>$this->input->post('jumlah',true)
            // "image"=>$this->image = $this->_uploadImage()
            // "image"=>$this->image = $this->_uploadImage()
        ];
        // if (!empty($_FILES["image"]["name"])) {
        //     $this->image = $this->_uploadImage();
        // }else{
        //     $this->image = $post["old_image"];
        // }
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('produk',$data);
        // $post = $this->input->post();
        // $this->product_id = $post["product_id"];
        // $this->name = $post["name"];
        // $this->kode = $post["kode"];
        // $this->id_role = $post["id_role"];
        // $this->hargajual = $post["hargajual"];
        // $this->hargabeli = $post["hargabeli"];
        // $this->detail = $post["detail"];
        
        
        // $this->db->update($this->_table,$this,array('id' =>$post['id']));
    }
    public function hapusDataProduk($id){
        $this->db->where('id',$id);
        $this->db->delete('produk');
    }
    public function hitungJumlahAsset(){

    $query = $this->db->get('produk');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
    }

    public function cariDataBarang(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('kode',$keyword);
        return $this->db->get('produk')->result_array();
        // $this->db->select('
        // produk.*,tbl_category.id AS id_role,tbl_category.name');
        // return $this->db->get('produk')->result_array();

    }
	
	function get_option() {
		 $this->db->select('*');
		 $this->db->from('tbl_category');
		 $query = $this->db->get();
		 return $query->result();
		}
		
		function get_option1() {
		 $this->db->select('*');
		 $this->db->from('gudang');
		 $query = $this->db->get();
		 return $query->result();
		}
		
		function get_option_kategori() {
		 $this->db->select('name as kategori');
		 $this->db->from('tbl_category');
		 $query = $this->db->get();
		 return $query->result();
		}
		
		function get_option_gudang() {
		 $this->db->select('nama as gudang');
		 $this->db->from('gudang');
		 $query = $this->db->get();
		 return $query->result();
		}
}