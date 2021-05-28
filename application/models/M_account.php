<?php

class M_Account extends CI_Model{
    public function tampil_data($weekending) {
        if (!$weekending) {
            $this->db->order_by('kode', 'ASC');
            return $this->db->get('chartofaccount')->result_array();
        } else {
            $this->db->select('chartofaccount.*, account_log.saldo_awal, account_log.saldo_akhir');
            $this->db->from('chartofaccount');
            $this->db->join('account_log', 'chartofaccount.kode = account_log.kode');
            $this->db->where('account_log.tanggal', $weekending);

            if ($weekending == "up") {
                $this->db->where('account_log.tutup_buku', 'T');
            } else {
                $this->db->where('account_log.tutup_buku', 'Y');
            }

            return $this->db->get()->result_array();
        }
    }

    public function get_tgl() {
        $this->db->select('tanggal');
        $this->db->where('tutup_buku', 'Y');
        $this->db->distinct();
        $this->db->order_by('id', 'DESC');
        return $this->db->get('account_log')->result_array();   
    }

    public function getDataById($id) {
        $this->db->where('id', $id);
        return $this->db->get('chartofaccount')->row_array();
    }

    public function tambahDataAccount(){
        $data = [
            "kode" => $this->input->post('kode',true),
            "nama" => $this->input->post('nama',true),
            "jenis" => $this->input->post('jenis',true),
            "nominal" => $this->input->post('nominal',true),
            "saldo_default" => $this->input->post('saldo_default',true),
            "akun_user" => "T"
        ];

        $data2 = [
            "tanggal" => "up",
            "kode" => $this->input->post('kode',true),
            "saldo_awal" => $this->input->post('saldo_default',true),
            "saldo_akhir" => $this->input->post('saldo_default',true),
            "selisih" => 0,
            "tutup_buku" => "T"
        ];

        $this->db->insert('chartofaccount', $data);
        $this->db->insert('account_log', $data2);
    }
    public function getAccountById($id){
        return $this->db->get_where('chartofaccount',['id' => $id])->row_array();
    }
    public function hapusDataAccount($id) {
        $this->db->select('kode');
        $this->db->where('id', $id);
        $kode = $this->db->get('chartofaccount')->row_array();

        $this->db->where('id', $id);
        $this->db->delete('chartofaccount');

        $this->db->where('kode', $kode['kode']);
        $this->db->delete('account_log');

        $this->db->where('kode', $kode['kode']);
        $this->db->delete('bukubesar');
    }
    public function ubahDataAccount() {
        $data = [
            "kode" => $this->input->post('kode2',true),
            "nama" => $this->input->post('nama2',true),
            "jenis" => $this->input->post('jenis2',true),
            "nominal" => $this->input->post('nominal2',true),
            "saldo_awal" => $this->input->post('saldo_awal2',true),
            "saldo_akhir" => $this->input->post('saldo_akhir2',true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('chartofaccount', $data);
    }

    public function tutup_buku($tgl) {
        $this->db->set('tutup_buku', "Y");
        $this->db->where('tutup_buku', "T");
        $this->db->update('jurnalumum');

        $this->db->set('tgl', $tgl);
        $this->db->where('tgl', 'up');
        $this->db->update('toplead');

        $this->db->set('weekending', $tgl);
        $this->db->where('weekending', 'up');
        $this->db->update('juice');

        $this->db->set('weekending', $tgl);
        $this->db->where('weekending', 'up');
        $this->db->update('distri');

        $this->db->set('tgl', $tgl);
        $this->db->where('tgl', 'up');
        $this->db->update('topasmen');

        $this->db->set('tgl', $tgl);
        $this->db->where('tgl', 'up');
        $this->db->update('hotnews');
    }
}