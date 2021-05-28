<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_jurnalumum extends CI_Model
{

    // public function get_by_role(){
    //     $this->db->select('
    //     produk.*,tbl_category.id AS id_role,tbl_category.name');
    //     $this->db->join('tbl_category','produk.id_role = tbl_category.id');
    //     $this->db->from('produk');
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

    public function tampil_data($weekending) {
        $this->db->order_by('id', 'DESC');
        if ($weekending != "") {
            if ($weekending == "up") {
                return $this->db->get_where('jurnalumum', ['tutup_buku' => "T"])->result_array();
            }
            return $this->db->get_where('jurnalumum', ['tgl' => $weekending, 'tutup_buku' => "Y"])->result_array();
        } else {
            return $this->db->get('jurnalumum')->result_array();
        }
    }

    public function getWeekending() {
        $this->db->select('tgl');
        $this->db->where('tutup_buku', 'Y');
        return $this->db->get('jurnalumum')->result_array();
    }

    public function getAllAccount() {
        $this->db->select('kode, nama');
        $this->db->where('akun_user', 'T');
        return $this->db->get('chartofaccount')->result_array();
    }

    public function getAccountName($kode) {
        $this->db->select('nama');
        $this->db->where('kode', $kode);
        return $this->db->get('chartofaccount')->row_array();
    }

    public function getLatestJPId() {
        $this->db->select('no_bukti');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $this->db->like('no_bukti','JP');
        return $this->db->get('jurnalumum')->row_array();
    }

    public function getLatestJRId() {
        $this->db->select('no_bukti');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $this->db->like('no_bukti','JR');
        return $this->db->get('jurnalumum')->row_array();
    }
    
    public function getDataById($id) {
        $this->db->where('id', $id);
        return $this->db->get('jurnalumum')->row_array();
    }

    public function getDataByWord($word) {
        if ($word && $word != "-") {
            $this->db->like('transaksi', $word);
        }
        $this->db->order_by('id', 'DESC');
        return $this->db->get('jurnalumum')->result_array();
    }

    public function tambahDataJurnal() {
        $debit = $this->cekSaldoAkun($this->input->post('kode_debit',true));
        $kredit = $this->cekSaldoAkun($this->input->post('kode_kredit',true));

        if (!$debit) {
            $this->db->select('saldo_default');
            $this->db->from('chartofaccount');
            $this->db->where('kode', $this->input->post('kode_debit',true));
            $s = $this->db->get()->row_array();
            $saldo_debit = (int)$s['saldo_default'] + (int)$this->input->post('didebit',true);
            $this->tambahLogAkun(0, $saldo_debit, (int)$this->input->post('kode_debit',true));
        } else {
            $saldo_debit = (int)$debit['saldo_akhir'] + (int)$this->input->post('didebit',true);
            $this->tambahLogAkun($debit['saldo_akhir'], $saldo_debit, (int)$this->input->post('kode_debit',true));
        }

        if (!$kredit) {
            $this->db->select('saldo_default');
            $this->db->from('chartofaccount');
            $this->db->where('kode', $this->input->post('kode_kredit',true));
            $s = $this->db->get()->row_array();
            $saldo_kredit = (int)$s['saldo_default'] - (int)$this->input->post('dikredit',true);
            $this->tambahLogAkun(0, $saldo_kredit, (int)$this->input->post('kode_kredit',true));
        } else {
            $saldo_kredit = (int)$kredit['saldo_akhir'] - (int)$this->input->post('dikredit',true);
            $this->tambahLogAkun($kredit['saldo_akhir'], $saldo_kredit, (int)$this->input->post('kode_kredit',true));
        }

        $date = date_create($this->input->post('tgl', true));

        $data = [
            // "product_id"=>$this->input->post('product_id',true),
            "tgl" => $this->input->post('tgl', true),
            "transaksi" => $this->input->post('transaksi',true),
            "no_bukti" => $this->input->post('no_bukti',true),
            "jumlah" => $this->input->post('jumlah',true),
            "kode_debit" => $this->input->post('kode_debit',true),
            "kode_kredit" => $this->input->post('kode_kredit',true),
            "nama_akundebit" => $this->input->post('nama_akundebit',true),
            "didebit" => $this->input->post('didebit',true),
            "nama_akunkredit" => $this->input->post('nama_akunkredit',true),
            "dikredit" => $this->input->post('dikredit',true),
            "tutup_buku" => "T"
        ];

        $data2 = [[
            // "product_id"=>$this->input->post('product_id',true),
            "tgl" => date_format($date, 'Y-m-d'),
            "kode" => $this->input->post('kode_debit',true),
            "transaksi" => $this->input->post('transaksi',true),
            "no_bukti" => $this->input->post('no_bukti',true),
            "debit" => $this->input->post('didebit',true),
            "kredit" => null,
            "tutup_buku" => "T"
          
            // "image"=>$this->image = $this->_uploadImage()
        ],[
            // "product_id"=>$this->input->post('product_id',true),
            "tgl" => date_format($date, 'Y-m-d'),
            "kode" => $this->input->post('kode_kredit',true),
            "transaksi" => $this->input->post('transaksi',true),
            "no_bukti" => $this->input->post('no_bukti',true),
            "debit" => null,
            "kredit" => $this->input->post('dikredit',true),
            "tutup_buku" => "T"
          
            // "image"=>$this->image = $this->_uploadImage()
        ]];

        $this->db->insert('jurnalumum', $data);
        $this->db->insert_batch('bukubesar', $data2);
    }

    public function cekSaldoAkun($kode) {
        $this->db->select('saldo_awal, saldo_akhir, selisih');
        $this->db->from('account_log');
        $this->db->where('kode', $kode);
        $this->db->where('tanggal', 'up');
        return $this->db->get()->row_array();
    }

    public function tambahLogAkun($saldo_awal, $saldo_debkre, $kode) {

        $data_acclog = [
            'saldo_awal' => $saldo_awal,
            'saldo_akhir' => $saldo_debkre,
            'selisih' => $saldo_awal - $saldo_debkre
        ];

        $this->db->where('kode', $kode);
        $this->db->where('tanggal', 'up');
        $this->db->update('account_log', $data_acclog);
        return;
    }
    
    public function getJurnalById($id){
        return $this->db->get_where('jurnalumum',['id'=>$id])->row_array();
    }
    public function ubahDataJurnal() {
        $debit = $this->cekSaldoAkun($this->input->post('kode_debit2',true));
        $kredit = $this->cekSaldoAkun($this->input->post('kode_kredit2',true));

        if (!$debit) {
            $this->db->select('saldo_default');
            $this->db->from('chartofaccount');
            $this->db->where('kode', $this->input->post('kode_debit2',true));
            $s = $this->db->get()->row_array();
            $saldo_debit = (int)$s['saldo_default'] + (int)$this->input->post('didebit2',true);
            $this->tambahLogAkun(0, $saldo_debit, (int)$this->input->post('kode_debit2',true));
        } else {
            $saldo_debit = (int)$debit['saldo_awal'] + (int)$this->input->post('didebit2',true);
            $this->tambahLogAkun($debit['saldo_awal'], $saldo_debit, (int)$this->input->post('kode_debit2',true));
        }

        if (!$kredit) {
            $this->db->select('saldo_default');
            $this->db->from('chartofaccount');
            $this->db->where('kode', $this->input->post('kode_kredit2',true));
            $s = $this->db->get()->row_array();
            $saldo_kredit = (int)$s['saldo_default'] - (int)$this->input->post('dikredit2',true);
            $this->tambahLogAkun(0, $saldo_kredit, (int)$this->input->post('kode_kredit2',true));
        } else {
            $saldo_kredit = (int)$kredit['saldo_awal'] - (int)$this->input->post('dikredit2',true);
            $this->tambahLogAkun($kredit['saldo_awal'], $saldo_kredit, (int)$this->input->post('kode_kredit2',true));
        }

        $this->db->where('no_bukti', $this->input->post('no_bukti2',true));
        $this->db->delete('bukubesar');

        $date = date_create($this->input->post('tgl2', true));

        $data2 = [[
            // "product_id"=>$this->input->post('product_id',true),
            "tgl" => date_format($date, 'Y-m-d'),
            "kode" => $this->input->post('kode_debit2',true),
            "transaksi" => $this->input->post('transaksi2',true),
            "no_bukti" => $this->input->post('no_bukti2',true),
            "debit" => $this->input->post('didebit2',true),
            "kredit" => null,
            "tutup_buku" => "T"
          
            // "image"=>$this->image = $this->_uploadImage()
        ],[
            // "product_id"=>$this->input->post('product_id',true),
            "tgl" => date_format($date, 'Y-m-d'),
            "kode" => $this->input->post('kode_kredit2',true),
            "transaksi" => $this->input->post('transaksi2',true),
            "no_bukti" => $this->input->post('no_bukti2',true),
            "debit" => null,
            "kredit" => $this->input->post('dikredit2',true),
            "tutup_buku" => "T"
          
            // "image"=>$this->image = $this->_uploadImage()
        ]];
        
        $this->db->insert_batch('bukubesar', $data2);
        
        $data = [
            "transaksi"=>$this->input->post('transaksi2',true),
            "no_bukti"=>$this->input->post('no_bukti2',true),
            "jumlah"=>$this->input->post('jumlah2',true),
            "kode_debit"=>$this->input->post('kode_debit2',true),
            "kode_kredit"=>$this->input->post('kode_kredit2',true),
            "nama_akundebit"=>$this->input->post('nama_akundebit2',true),
            "didebit"=>$this->input->post('didebit2',true),
            "nama_akunkredit"=>$this->input->post('nama_akunkredit2',true),
            "dikredit"=>$this->input->post('dikredit2',true)
        ];

        // if (!empty($_FILES["image"]["name"])) {
        //     $this->image = $this->_uploadImage();
        // }else{
        //     $this->image = $post["old_image"];
        // }
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('jurnalumum',$data);
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

    public function deleteBukubesarLog($kode_akun, $no_bukti) {
        $this->db->where('kode', $kode_akun);
        $this->db->where('no_bukti', $no_bukti);
        $this->db->delete('bukubesar');
    }

    public function deleteAccountLog($kode_akun, $debkre, $jenis) {
        $this->db->select('saldo_awal, saldo_akhir, selisih');
        $this->db->where('kode', $kode_akun);
        $this->db->where('tanggal', 'up');
        $acclog = $this->db->get('account_log')->row_array();

        if ($jenis == 'debit') {
            $saldo_akhir = $acclog['saldo_akhir'] - $debkre;
        } else {
            $saldo_akhir = $acclog['saldo_akhir'] + $debkre;
        }

        $data = [
            'saldo_awal' => $acclog['saldo_akhir'],
            'saldo_akhir' => $saldo_akhir,
            'selisih' => $acclog['saldo_akhir'] - $saldo_akhir
        ];

        $this->db->where('kode', $kode_akun);
        $this->db->update('account_log', $data);
    }

    public function hapusDataJurnal($id) {
        $this->db->select('kode_debit, kode_kredit, no_bukti, didebit, dikredit');
        $this->db->where('id', $id);
        $kode = $this->db->get('jurnalumum')->row_array();

        $this->deleteBukubesarLog($kode['kode_debit'], $kode['no_bukti']);
        $this->deleteBukubesarLog($kode['kode_kredit'], $kode['no_bukti']);

        $this->deleteAccountLog($kode['kode_debit'], $kode['didebit'], 'debit');
        $this->deleteAccountLog($kode['kode_kredit'], $kode['dikredit'], 'kredit');

        $this->db->where('id', $id);
        $this->db->delete('jurnalumum');
    }
    // public function cariDataBarang(){
    //     $keyword = $this->input->post('keyword',true);
    //     $this->db->like('nama',$keyword);
    //     $this->db->or_like('kode',$keyword);
    //     return $this->db->get('jurnalumum')->result_array();
    //     // $this->db->select('
    //     // produk.*,tbl_category.id AS id_role,tbl_category.name');
    //     // return $this->db->get('produk')->result_array();

    // }
}