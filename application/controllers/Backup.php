<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends CI_Controller {
    // function __construct(){
    //     parent::__construct();
        
    //     $this->load->backup;
    // }
    public function index(){
        $topik['judul'] = 'Halaman Back Up Data'; 
        $this->load->view('templates/header',$topik);
        $this->load->view('backup/index');
    }
    public function backupdb(){
        // Load class utilities from database; 
        $this->load->dbutil();
        // Aturan file ketika file terdownload
        $config = array(
        			'format'	=> 'zip',
        			'filename' => 'erpcanon.sql'
        		);
        $backup =& $this->dbutil->backup($config);

        // Nama database sudah ada tanggal downloadnya
        // $nama_database = 'backup-on-' . date("Y-m-d-H-i-s") . '.zip';
        // $simpan = '/backup'.$nama_database;
        $save = FCPATH.'data/backup-'.date("ymdHis").'-db.zip';

        write_file($save,$backup);
        

        // $this->load->helper('file');
        // write_file($simpan,$backup);

        $this->load->helper('download');
		force_download($save,$backup);        
		// force_download($nama_database,$backup);        
    }
}