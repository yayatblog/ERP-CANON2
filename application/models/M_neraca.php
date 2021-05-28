<?php

class M_neraca extends CI_Model {
    public function tampil_data($weekending) {
        $this->db->select('chartofaccount.nama');
        $this->db->from('chartofaccount');
        $this->db->where('chartofaccount.kode < ', '9000');
        if ($weekending != "" && $weekending != "-") {
            // if ($weekending = "up") {
            //     $this->db->where('account_log.tutup_buku', 'T');
            // }
            return $this->db->get()->result_array();
        } else {
            return "";
        }
    }
    
    public function tambahDataNeraca() {
        $data = [
            "name" => $this->input->post('name', true),
            "description" => $this->input->post('description', true),

        ];
        $this->db->insert('neraca', $data);
    }
    public function getNeracaById($id) {
        return $this->db->get_where('neraca', ['id' => $id])->row_array();
    }
    public function hapusDataNeraca($id) {
        $this->db->where('id', $id);
        $this->db->delete('neraca');
    }
    public function ubahDataNeraca() {
        $data = [
            "name" => $this->input->post('name', true),
            "description" => $this->input->post('description', true),

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('neraca', $data);
    }
}