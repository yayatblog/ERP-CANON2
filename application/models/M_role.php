<?php

class M_role extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tbl_role')->result_array();
    }
    // public function tambahDataUser(){
    //     $data = [
    //         "username" => $this->input->post('username',true),
    //         "email" => $this->input->post('email',true),
    //         "password" => $this->input->post('password',true),
    //     ];
    //     $this->db->insert('tbl_user',$data);
    // }
    // public function getUserById($id){
    //     return $this->db->get_where('user',['id'=>$id])->row_array();
    // }
    // public function hapusDataUser($id){
    //     $this->db->where('id',$id);
    //     $this->db->delete('tbl_user');
    // }
    // public function ubahDataUser(){
    //     $data = [
    //         "name" => $this->input->post('name',true),
    //         "description" => $this->input->post('description',true),


    //     ];
    //     $this->db->where('id',$this->input->post('id'));
    //     $this->db->update('user',$data);
    // }
}