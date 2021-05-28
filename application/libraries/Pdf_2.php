<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

/**
 * 
 */
class Pdf extends Dompdf
{
    protected $ci;
	
	function __construct()
	{
        parent ::__construct();
        $this->ci =& get_instance();

    }
    public function generate($view,$data = array()){
        // $this->load->model('m_barang')
        $dompdf = new Pdf;
        $html = $this->ci->load->view($view,$data,TRUE);
        // $data['produk'] = $this->m_barang->get_by_role();
        $dompdf->loadHtml('<H1>Selamat</h1>');
        //Optional Set up the Paper
        $dompdf->setPaper('A4','landscape');

        // Render the HTML to pdf
        $dompdf->render();
        $dompdf->stream("Laporan.pdf",array("Attachment"=> FALSE));
    }
}
?>