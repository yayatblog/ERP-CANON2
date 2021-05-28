<?php

class M_deposit extends CI_Model
{
    public function tampil_data($weekending, $jabatan) {
        if (!$weekending && !$jabatan) {
            return "";
        } else if (!$weekending) {
            return "";
        } else if (!$jabatan) {
            return "";
        } else {
            return $this->db->get_where('deposit', ['jabatan' => $jabatan, 'tgl' => $weekending])->result_array();
        }
    }

    public function tampil_deposit($weekending, $jabatan) {
        $this->db->select('SUM(jumlah_pengeluaran) as pengeluaran, SUM(total_deposit) as grand_total');
        return $this->db->get_where('deposit', ['jabatan' => $jabatan, 'tgl' => $weekending])->result_array();
    }

    public function changestatus($id, $status) {
        $this->db->set('status', $status);
        $this->db->where('id', $id);
        $this->db->update('deposit');
    }
	
	function tampil_data1(){
    $username=$this->session->userdata("username");
     $this->db->where('users.username',"$username");
	  $this->db->select('deposit.id,deposit.tgl,deposit.manager,deposit.cabang,deposit.jumlah_deposit,deposit.jumlah_pengeluaran,deposit.total_deposit,deposit.status,deposit.kode_id');
	 $this->db->from('users');
	 $this->db->join('deposit','deposit.kode_id=users.kode_id');
	 $query = $this->db->get();
	 return $query->result_array();
	}
    public function tambahDataDeposit(){
        $data = [
            "tgl" => $this->input->post('tgl',true),
            "manager" => $this->input->post('manager',true),
            "cabang" => $this->input->post('cabang',true),
            "jumlah_deposit" => $this->input->post('jumlah_deposit',true),
            "jumlah_pengeluaran" => $this->input->post('jumlah_pengeluaran',true),
            "total_deposit" => $this->input->post('total_deposit',true),
            "status" => $this->input->post('status',true),
			 "kode_id" => $this->input->post('kode_id',true),

        ];
        $this->db->insert('deposit',$data);
    }

    public function getDepositById($id){
         return $this->db->get_where('deposit',['id'=>$id])->row_array();
    }
    public function hapusDataDeposit($id){
        $this->db->where('id',$id);
        $this->db->delete('deposit');
    }
    public function ubahDataDeposit(){
         $data = [
         "tgl" => $this->input->post('tgl',true),
            "manager" => $this->input->post('manager',true),
            "cabang" => $this->input->post('cabang',true),
            "jumlah_deposit" => $this->input->post('jumlah_deposit',true),
            "jumlah_pengeluaran" => $this->input->post('jumlah_pengeluaran',true),
            "total_deposit" => $this->input->post('total_deposit',true),
            "status" => $this->input->post('status',true),
			 "kode_id" => $this->input->post('kode_id',true),
            
        ];
         $this->db->where('id',$this->input->post('id'));
        $this->db->update('deposit',$data);
     }
}
