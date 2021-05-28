<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
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
    // public $image = "default.jpg";

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
    // public function getAll(){
    //     return $this->db->get($this->_table)->result();
    // }
    public function get_by_role(){
        $this->db->select('
        produk.*,tbl_category.id AS id_role,tbl_category.name');
        $this->db->join('tbl_category','produk.id_role = tbl_category.id');
        $this->db->from('produk');
        $query = $this->db->get();
        return $query->result_array();
    }
    // public function getById($id){
    //     return $this->db->get_where($this->_table,["product_id" => $id])->row();
    // }
    public function tambahDataProduct(){
        $data = [
            // "product_id"=>$this->input->post('product_id',true),
            "nama"=>$this->input->post('nama',true),
            "kode"=>$this->input->post('kode',true),
            "id_role"=>$this->input->post('id_role',true),
            "hargajual"=>$this->input->post('hargajual',true),
            "hargabeli"=>$this->input->post('hargabeli',true),
            "detail"=>$this->input->post('detail',true),
            "image"=>$this->image = $this->_uploadImage()
        ];
        $this->db->insert('tbl_product',$data);
    }
    private function _uploadImage()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = '';
        $config['overwrite']            = true;
        $config['max_size']             = 1024;

        $this->load->library('upload',$config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }

    // public function save($data,$table){
    //     $post = $this->input->post();
    //     $this->product_id = $post["product_id"];
    //     $this->nama = $post["nama"];
    //     $this->kode = $post["kode"];
    //     $this->id_role = $post["id_role"];
    //     $this->hargajual = $post["hargajual"];
    //     $this->hargabeli = $post["hargabeli"];
    //     $this->detail = $post["detail"];
    //     $this->image = $this->_uploadImage();
    //     $this->db->insert($table,$data);
    // }
    public function getDosenById($id){
        return $this->db->get_where('tbl_product',['id'=>$id])->row_array();
    }
    public function ubahDataProduct(){
        // $data = [
        //     "product_id"=>$this->input->post('product_id',true),
        //     "nama"=>$this->input->post('nama',true),
        //     "kode"=>$this->input->post('kode',true),
        //     "id_role"=>$this->input->post('id_role',true),
        //     "hargajual"=>$this->input->post('hargajual',true),
        //     "hargabeli"=>$this->input->post('hargabeli',true),
        //     "detail"=>$this->input->post('detail',true),
        //     "image"=>$this->image = $this->_uploadImage()
        // ];
        $post = $this->input->post();
        // $this->product_id = $post["product_id"];
        $this->nama = $post["nama"];
        $this->kode = $post["kode"];
        $this->id_role = $post["id_role"];
        $this->hargajual = $post["hargajual"];
        $this->hargabeli = $post["hargabeli"];
        $this->detail = $post["detail"];
        
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        }else{
            $this->image = $post["old_image"];
        }
        $this->db->update($this->_table,$this,array('id' =>$post['id']));
    }
    // function hapus_barang($kode_barang){
    //     $hasil=$this->db->query("DELETE FROM tbl_product WHERE id='$kode_barang'");
    //     return $hasil;
    // }
    // public function hapus_data($id){    
    //     $this->_deleteImage($id);
    //     return $this->db->delete($this->_table, array("product_id"=>$id));
    // }
    public function hapusData($id){
        $this->db->where('id',$id);
        $this->db->delete('tbl_product');
    }
    
    private function _deleteImage($id)
    {
        $product = $this->getById($id);
        if ($product->image != "default.jpg") {
            $filename = explode(".",$product->image)[0];
            return array_map('unlink',glob(FCPATH."upload/product/$filename.*"));
        }
    }
}