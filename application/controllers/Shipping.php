<?php 
	class Shipping extends CI_Controller{
		private $api_key = 'aa4a560202be1d441ac6202c0924c0cb';
		public function index(){
			$curl = curl_init();
 
			curl_setopt_array($curl, array(
			  CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			    "key: $this->api_key"
			  ),
			));
 
			$response = curl_exec($curl);
			$err = curl_error($curl);
 
			curl_close($curl);
 
			if ($err) {
			  echo "cURL Error #:" . $err;
			} else {
			  return json_decode($response);
			}
		}
 
 
		public function tampil(){
            $topik['judul'] = 'Halaman Daftar Kirim';
            $data['province'] = $this->index();
            $this->load->view('templates/header',$topik);
			$this->load->view('shipping',$data);
		}
	}