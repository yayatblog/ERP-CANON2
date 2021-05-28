<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_autocomplete($search_data)
    {
        $this->db->select('slug, name');
        $this->db->like('slug', $search_data);
        $this->db->or_like('nama', $search_data);
        return $this->db->get('gudang');
    }
}

?>