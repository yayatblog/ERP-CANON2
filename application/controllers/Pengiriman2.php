<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengiriman2 extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_pengiriman');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Pengiriman Barang';
        $x['data1'] = $this->m_pengiriman->tampil_data();
		$x['kode'] = $this->m_pengiriman->kode();
		$x['data'] = $this->m_pengiriman->tampil_datamitra();
        $this->load->view('templates2/header',$topik);
        $this->load->view('pengiriman2/index',$x);
        $this->load->view('templates2/footer');
    }
	
	public function index_tampil(){
        $topik['judul'] = 'Halaman Menu Pengiriman Barang';
		$x['data2'] = $this->m_pengiriman->tampil_barang();
        $x['data1'] = $this->m_pengiriman->tampil();
		$x['kode'] = $this->m_pengiriman->kode();
		$x['data'] = $this->m_pengiriman->tampil_datamitra();
        $this->load->view('templates2/header',$topik);
        $this->load->view('pengiriman2/tampil',$x);
        $this->load->view('templates2/footer');
    }
	
	public function cetak_faktur(){
		ob_start();
     $data['pengiriman'] = $this->m_pengiriman->tampil_cetak();
	$this->load->view('pengiriman/print_faktur',$data);
	$html = ob_get_contents();
        ob_end_clean();
        require_once('./asset/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Data Pengiriman.pdf', 'D');
		
	}
	
	public function cetak_alamat(){
		ob_start();
     $data['pengiriman'] = $this->m_pengiriman->tampil_cetak();
	$this->load->view('pengiriman/print',$data);
	$html = ob_get_contents();
        ob_end_clean();
        require_once('./asset/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Data Pengiriman.pdf', 'D');
		
	}
	
	function tambah_aksi(){
		$kode_id = $this->input->post('kode_id');
		$nama = $this->input->post('nama');
		$qty_karton = $this->input->post('qty_karton');
		$qty_perkarton = $this->input->post('qty_perkarton');
		$total = $this->input->post('total');
		$gudang_asal = $this->input->post('gudang_asal');
		$gudang_tujuan = $this->input->post('gudang_tujuan');
		$stok = $this->input->post('stok');
		$kepada = $this->input->post('kepada');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$no_telepon = $this->input->post('no_telepon');
		$tanggal = $this->input->post('tanggal');
		$no_do = $this->input->post('no_do');
		$manager_gudang = $this->input->post('manager_gudang');
		$no_kontainer = $this->input->post('no_kontainer');
		$no_segel = $this->input->post('no_segel');
		
	
		$data = array(
			'kode_id' => $kode_id,
			'nama' => $nama,
			'qty_karton' => $qty_karton,
			'qty_perkarton' => $qty_perkarton,
			'total' => $total,
			'gudang_asal' => $gudang_asal,
			'gudang_tujuan' => $gudang_tujuan,
			'stok' => $stok,
			'kepada' => $kepada,
			'alamat' => $alamat,
			'kota' => $kota,
			'no_telepon' => $no_telepon,
			'tanggal' => $tanggal,
			'no_do' => $no_do,
			'manager_gudang' => $manager_gudang,
			'no_kontainer' => $no_kontainer,
			'no_segel' => $no_segel		
			);
		  $this->m_pengiriman->input_data($data,'pengiriman');
		    $this->session->set_flashdata('flash','Ditambahkan');
		   redirect('pengiriman/index_tampil');
			
	}
	
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Pengiriman';
		
		$x['data1'] = $this->m_pengiriman->tampil_data();
		$x['data2'] = $this->m_pengiriman->tampil_barang();
		$x['kode'] = $this->m_pengiriman->kode();
		$x['data'] = $this->m_pengiriman->tampil_datamitra();

        $this->form_validation->set_rules('kode_id','Kode_id','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('qty_karton','Qty_karton','required');
        $this->form_validation->set_rules('qty_perkarton','Qty Perkarton','required');
        $this->form_validation->set_rules('total','Total','required');
		$this->form_validation->set_rules('gudang_asal','Gudang Asal','required');
        $this->form_validation->set_rules('gudang_tujuan','Gudang Tujuan','required');
        $this->form_validation->set_rules('stok','Stok','required');
        $this->form_validation->set_rules('kepada','Kepada','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('kota','Kota','required');
        $this->form_validation->set_rules('no_telepon','No Telepon','required');
        $this->form_validation->set_rules('tanggal','Tanggal','required');
        $this->form_validation->set_rules('no_do','No DO','required');
        $this->form_validation->set_rules('manager_gudang','Manager Gudang','required');
		$this->form_validation->set_rules('no_kontainer','No Kontainer','required');
        $this->form_validation->set_rules('no_segel','No Segel','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/header',$data);
            $this->load->view('pengiriman2/tambah',$x);
			 $this->load->view('templates2/footer');
        }else {
            $this->m_pengiriman->tambahDataPengiriman();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('pengiriman2/index_tampil');
        }
        
    }
    // public function detail($id){
    //     $topik['judul'] = 'Detail Data Karyawan';
    //     $data['pengiriman'] = $this->m_pengiriman->getPengirimanById($id);
    //     $this->load->view('templates/header',$topik);
    //     $this->load->view('pengiriman/detail',$data);
    // }
    public function hapus($id){
        $this->m_pengiriman->hapusDataPengiriman($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('pengiriman2');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Pengiriman';
		
		$x['data2'] = $this->m_pengiriman->tampil_barang();
        //$x['data1'] = $this->m_pengiriman->tampil();
		$x['data'] = $this->m_pengiriman->tampil_datamitra();
		$x['kode'] = $this->m_pengiriman->kode();
		
		$x['pengiriman'] = $this->m_pengiriman->getPengirimanById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('kode_id','Kode_id','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('qty_karton','Qty_karton','required');
        $this->form_validation->set_rules('qty_perkarton','Qty Perkarton','required');
        $this->form_validation->set_rules('total','Total','required');
		$this->form_validation->set_rules('gudang_asal','Gudang Asal','required');
        $this->form_validation->set_rules('gudang_tujuan','Gudang Tujuan','required');
        $this->form_validation->set_rules('stok','Stok','required');
        $this->form_validation->set_rules('kepada','Kepada','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('kota','Kota','required');
        $this->form_validation->set_rules('no_telepon','No Telepon','required');
        $this->form_validation->set_rules('tanggal','Tanggal','required');
        $this->form_validation->set_rules('no_do','No DO','required');
        $this->form_validation->set_rules('manager_gudang','Manager Gudang','required');
		$this->form_validation->set_rules('no_kontainer','No Kontainer','required');
        $this->form_validation->set_rules('no_segel','No Segel','required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/header',$topik);
            $this->load->view('pengiriman2/edit',$x);
			$this->load->view('templates2/footer');
        }else {
            $this->m_pengiriman->ubahDataPengiriman();
            $this->session->set_flashdata('flash','Diubah');
            redirect('pengiriman2');
        }
    }
	
	 public function edit_koreksi($id){
        $topik['judul'] = 'Edit Data Pengiriman';
		
		$x['data2'] = $this->m_pengiriman->tampil_barang();
        //$x['data1'] = $this->m_pengiriman->tampil();
		$x['data'] = $this->m_pengiriman->tampil_datamitra();
		$x['kode'] = $this->m_pengiriman->kode();
		
		$x['pengiriman'] = $this->m_pengiriman->getPengirimanById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('kode_id','Kode_id','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('qty_karton','Qty_karton','required');
        $this->form_validation->set_rules('qty_perkarton','Qty Perkarton','required');
        $this->form_validation->set_rules('total','Total','required');
		$this->form_validation->set_rules('gudang_asal','Gudang Asal','required');
        $this->form_validation->set_rules('gudang_tujuan','Gudang Tujuan','required');
        $this->form_validation->set_rules('stok','Stok','required');
        $this->form_validation->set_rules('kepada','Kepada','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('kota','Kota','required');
        $this->form_validation->set_rules('no_telepon','No Telepon','required');
        $this->form_validation->set_rules('tanggal','Tanggal','required');
        $this->form_validation->set_rules('no_do','No DO','required');
        $this->form_validation->set_rules('manager_gudang','Manager Gudang','required');
		$this->form_validation->set_rules('no_kontainer','No Kontainer','required');
        $this->form_validation->set_rules('no_segel','No Segel','required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates2/header',$topik);
            $this->load->view('pengiriman2/edit_koreksi',$x);
			$this->load->view('templates2/footer');
        }else {
            $this->m_pengiriman->ubahDataPengiriman();
            $this->session->set_flashdata('flash','Diubah');
            redirect('pengiriman2');
        }
    }
	
	function update(){
    $id = $this->input->post('id');
		$kode_id = $this->input->post('kode_id');
		$nama = $this->input->post('nama');
		$qty_karton = $this->input->post('qty_karton');
		$qty_perkarton = $this->input->post('qty_perkarton');
		$total = $this->input->post('total');
		$gudang_asal = $this->input->post('gudang_asal');
		$gudang_tujuan = $this->input->post('gudang_tujuan');
		$stok = $this->input->post('stok');
		$kepada = $this->input->post('kepada');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$no_telepon = $this->input->post('no_telepon');
		$tanggal = $this->input->post('tanggal');
		$no_do = $this->input->post('no_do');
		$manager_gudang = $this->input->post('manager_gudang');
		$no_kontainer = $this->input->post('no_kontainer');
		$no_segel = $this->input->post('no_segel');
		
	
		$data = array(
			'kode_id' => $kode_id,
			'nama' => $nama,
			'qty_karton' => $qty_karton,
			'qty_perkarton' => $qty_perkarton,
			'total' => $total,
			'gudang_asal' => $gudang_asal,
			'gudang_tujuan' => $gudang_tujuan,
			'stok' => $stok,
			'kepada' => $kepada,
			'alamat' => $alamat,
			'kota' => $kota,
			'no_telepon' => $no_telepon,
			'tanggal' => $tanggal,
			'no_do' => $no_do,
			'manager_gudang' => $manager_gudang,
			'no_kontainer' => $no_kontainer,
			'no_segel' => $no_segel
	);

	$where = array(
		'id' => $id
	);

	$this->m_pengiriman->update_data($where,$data,'pengiriman');
	$this->session->set_flashdata('flash','Diubah');
	redirect('pengiriman2/index');
}

function update_koreksi(){
        $id = $this->input->post('id');
		$kode_id = $this->input->post('kode_id');
		$nama = $this->input->post('nama');
		$qty_karton = $this->input->post('qty_karton');
		$qty_perkarton = $this->input->post('qty_perkarton');
		$total = $this->input->post('total');
		$gudang_asal = $this->input->post('gudang_asal');
		$gudang_tujuan = $this->input->post('gudang_tujuan');
		$stok = $this->input->post('stok');
		$kepada = $this->input->post('kepada');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$no_telepon = $this->input->post('no_telepon');
		$tanggal = $this->input->post('tanggal');
		$no_do = $this->input->post('no_do');
		$manager_gudang = $this->input->post('manager_gudang');
		$no_kontainer = $this->input->post('no_kontainer');
		$no_segel = $this->input->post('no_segel');
		
	
		$data = array(
			'kode_id' => $kode_id,
			'nama' => $nama,
			'qty_karton' => $qty_karton,
			'qty_perkarton' => $qty_perkarton,
			'total' => $total,
			'gudang_asal' => $gudang_asal,
			'gudang_tujuan' => $gudang_tujuan,
			'stok' => $stok,
			'kepada' => $kepada,
			'alamat' => $alamat,
			'kota' => $kota,
			'no_telepon' => $no_telepon,
			'tanggal' => $tanggal,
			'no_do' => $no_do,
			'manager_gudang' => $manager_gudang,
			'no_kontainer' => $no_kontainer,
			'no_segel' => $no_segel
	);

	$where = array(
		'id' => $id
	);

	$this->m_pengiriman->update_data($where,$data,'pengiriman');
	$this->session->set_flashdata('flash','Diubah');
	redirect('pengiriman2/index_tampil');
}

}