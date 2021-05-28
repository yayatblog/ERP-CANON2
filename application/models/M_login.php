<?php

class M_login extends CI_Model
{
    public function cek_login($where) {
      $this->db->select('users.*, daftarmitra.gudang as gudang, daftarmitra.jabatan as jabatan');
      $this->db->from('users');
      $this->db->where($where);
      $this->db->join('daftarmitra', 'users.username=daftarmitra.nama');

      return $this->db->get();
    }
    public function tampil_data() {
        
    }    
}






