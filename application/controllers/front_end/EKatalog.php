<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EKatalog extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        $this->load->model("M_ekatalog");
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
    	$data['katalogall']=$this->M_ekatalog->getAll()->result();
        $this->temp->load('front_end/partials', 'front_end/ekatalog', $data);
    }

}
