<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
	Public function __construct() {
		parent::__construct();
		$this->load->model('chats');
		$this->load->model('regis');
	}
    // public function index(){
    // 	$topik['judul'] = 'Halaman Menu Manager Lain';
    //     // $data['manager'] = $this->m_manager->tampil_data();
    //     $this->load->view('templates/header',$topik);
    //     $this->load->view('chat/index');
    //     $this->load->view('templates/footer');
	// }
	public function index() {
		// if ($this->session->userdata('sesi') == FALSE) {
		// 	$this->session->set_flashdata('login', '<div class="alert alert-warning alert-dismissable">
		// 												<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		// 												<i class="fa fa-exclamation-circle">&nbsp;</i> <strong>Anda Harus Login!</strong>
		// 											</div>');
		// 	redirect(base_url());
		// } else {
    		$topik['judul'] = 'Halaman Menu Chat';
			$data['status'] = $this->chats->get_stats()->result();
			$data['chat']   = $this->chats->isi_chat()->result();
			$this->load->view('templates/header',$topik);
			$this->load->view('chat/index', $data);
			$this->load->view('templates/footer');
		}
	// }

	public function kirim() {
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$pesan = array(
					'pengirim' => $this->session->userdata('user'),
					'waktu' => $date,
					'teks' => $this->input->post('pesan')
				 );
		 
		$this->db->insert('chat', $pesan);
		redirect (base_url('message'));
	}

	public function open() { return $this->chats->main(array('status'=>TRUE)); }

	public function maintenance() { return $this->chats->main(array('status'=>FALSE)); }

	public function pending() {
		if ($this->session->userdata('sesi') == FALSE) {
			$this->session->set_flashdata('login', '<div class="alert alert-warning alert-dismissable">
														<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
														<i class="fa fa-exclamation-circle">&nbsp;</i> <strong>Anda Harus Login!</strong>
													</div>');
			redirect(base_url());
		} else {
			$data['orang'] = $this->regis->orang();
			$data['status'] = $this->chats->get_stats()->result();
			$this->load->view('templates/header');
			$this->load->view('pending', $data);
			$this->load->view('templates/footer');
		}
	}

}



// defined('BASEPATH') OR exit('No direct script access allowed');
// require './vendor/autoload.php';


// class Message extends CI_Controller
// {
//     public function __construct(){
//         parent::__construct();
//         // $this->load->model('m_account');
//         // $this->load->library('form_validation');
//     }
//     public function index(){
//         $data = array(
//             'chat' => $this->db->order_by('id','DESC')->get('chat')->result()
//         );
//         $topik['judul'] = 'Halaman Chat';
//         $this->load->view('templates/header',$topik);
//         $this->load->view('chat/index',$data);
//         $this->load->view('templates/footer');
//     }
//     public function store(){
//         $data = array(
//             'nama' =>$this->input->post('nama'),
//             'message' =>$this->input->post('message'),

//         );
//         $options = array(
//             'cluster' => 'ap1',
//             'useTLS' => true
//           );
//           $pusher = new Pusher\Pusher(
//             '1ed3bcc25987442ad769',
//             '2b693309dcb94fb7b088',
//             '1023853',
//             $options
//           );

//           $push = $this->db->order_by('id','DESC');
//           $push = $this->db->get('chat');

//           foreach ($push as $key) {
//               $data_pusher[] = $key;
//           }
        
//           $data['message'] = 'hello world';
//           $pusher->trigger('my-channel', 'my-event', $data);
//         $this->db->insert('chat',$data);
//         if ($this->db->insert('chat',$data)) {
//           $pusher->trigger('my-channel', 'my-event', $data_pusher);
            
//         }
//     }
// }