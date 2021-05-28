<?php

class M_user extends CI_Model{
    public function tampil_data(){
        return $this->db->query("SELECT * FROM users")->result_array();
    }
	
	function tampil_data1(){
    $username=$this->session->userdata("username");
     $this->db->where('username',"$username");
	  $this->db->select('*');
	 $this->db->from('users');
	 $query = $this->db->get();
	 return $query->result_array();
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	function tampil_data2(){
    $username=$this->session->userdata("username");
     $this->db->where('username',"$username");
	  $this->db->select('*');
	 $this->db->from('users');
	 $this->db->limit(1);
	 $query = $this->db->get();
	 return $query->result_array();
	}
	
    public function tambahDataUser(){
        $data = [
            "username" => $this->input->post('username',true),
            "email" => $this->input->post('email',true),
            'password'=>password_hash($this->input->post('password'),PASSWORD_DEFAULT),
            // "password" => $this->input->post('password',true),
			"kode_id" => $this->input->post('kode_id',true),
			"id_role" => $this->input->post('id_role',true),
        ];
        $this->db->insert('users',$data);
    }
    public function getUserById($id){
     return $this->db->get_where('users',['id'=>$id])->row_array();
    }
    public function hapusDataUser($id){
        $this->db->where('id',$id);
        $this->db->delete('users');
    }
     public function ubahDataUser(){
        $data = [
           "username" => $this->input->post('username',true),
            "email" => $this->input->post('email',true),
            "password" => $this->input->post('password',true),
			"kode_id" => $this->input->post('kode_id',true),
			"id_role" => $this->input->post('id_role',true),

        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('users',$data);
     }
}