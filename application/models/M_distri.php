<?php

class M_distri extends CI_Model{
    public function tampil_data($weekending) {
        if (!$weekending) {
            return $this->db->get('distri')->result_array();
        } else {
            return $this->db->get_where('distri', ['weekending' => $weekending])->result_array();
        }
    }

    public function getData($id) {
        return $this->db->get_where('distri', ['id' => $id])->result_array();
    }

    public function tgl_distri($tgl) {
        $this->db->select('weekending');
        $this->db->distinct();
        $this->db->order_by('id', 'DESC');
        $this->db->where_not_in('weekending', 'up');
        return $this->db->get('distri')->result_array();
    }

    public function tambahDataDistri(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "location" => $this->input->post('location',true),
            "manager" => $this->input->post('manager',true),
            "profit" => $this->input->post('profit',true),
            "weekending" => "up"
        ];
        
        $this->db->insert('distri',$data);
    }

    public function editDataDistri() {
        $data = [
            "nama" => $this->input->post('nama2',true),
            "location" => $this->input->post('location2',true),
            "manager" => $this->input->post('manager2',true),
            "profit" => $this->input->post('profit2',true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('distri',$data);
    }

    public function hapusDataDistri($id){
        $this->db->where('id',$id);
        $this->db->delete('distri');
    }
}