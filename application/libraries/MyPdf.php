<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypdf {
 
    protected $ci;

    public function __construct()
    {
        $this->ci & get_instance();
    }
    public function  generate($view,$data = array())
    {
        $html = $this->ci->load->view($view,$data,TRUE);
    }
}