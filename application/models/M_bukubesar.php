<?php

class M_Bukubesar extends CI_Model{
    public function tampil_data($weekending, $kode_akun) {
        if ($weekending && $kode_akun) {
            $this->db->from('bukubesar, chartofaccount');
            $this->db->like('bukubesar.no_bukti', 'JR', 'after');
            $this->db->where('chartofaccount.kode', $kode_akun);
            $this->db->where('bukubesar.kode', $kode_akun);

            if ($weekending != 'up') {
                $this->db->where('bukubesar.tutup_buku', 'Y');
                $this->db->where('bukubesar.weekending', $weekending);
            } else {
                $this->db->where('bukubesar.tutup_buku', 'T');
            }
            
            $this->db->order_by('bukubesar.tgl', 'ASC');
            return $this->db->get()->result_array();
        } else {
            return;
        }
    }

    public function getWeekending() {
        $this->db->select('weekending');
        $this->db->distinct();
        $this->db->where_not_in('weekending', '');
        return $this->db->get('bukubesar')->result_array();
    }

    public function getDefaultSaldo($kode_akun) {
        $this->db->select('saldo_default');
        $this->db->where('kode', $kode_akun);
        return $this->db->get('chartofaccount')->row_array();
    }

    public function getCurrentSaldo($kode_akun) {
        $this->db->select('saldo_akhir');
        $this->db->where('kode', $kode_akun);
        $this->db->where('tanggal', 'up');
        return $this->db->get('account_log')->row_array();
    }

    public function getSUMSaldo($kode_akun) {
        $this->db->select('SUM(debit) as jmldebit, SUM(kredit) as jmlkredit');
        $this->db->where('kode', $kode_akun);
        $this->db->where('tutup_buku', 'T');
        return $this->db->get('bukubesar')->row_array();
    }

    public function tambahDataBukubesar() {
        $data = [
            "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "jenis" => $this->input->post('jenis',true),
            "nominal" => $this->input->post('nominal',true),
            "saldo" => $this->input->post('saldo',true),
            "debit" => $this->input->post('debit',true)
        ];
        $this->db->insert('bukubesar',$data);
    }

    public function getAllAccount() {
        $this->db->select('kode, nama');
        return $this->db->get('chartofaccount')->result_array();
    }
    public function getBukubesarById($id){
        return $this->db->get_where('bukubesar',['id'=>$id])->row_array();
    }
    public function hapusDataBukubesar($id){
        $this->db->where('id',$id);
        $this->db->delete('bukubesar');
    }
    public function ubahDataBukubesar(){
        $data = [
            "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "jenis" => $this->input->post('jenis',true),
            "nominal" => $this->input->post('nominal',true),
            "saldo" => $this->input->post('saldo',true),
            "debit" => $this->input->post('debit',true)

        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('bukubesar',$data);
    }
}