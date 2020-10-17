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
        $this->temp->load('front_end/partials', 'front_end/ekatalog/ekatalog', $data);
    }

    public function detail_ekatalog($id)
    {
        $where = array('catalog_id' => $id);
        $data['detail_ekatalog']=$this->M_ekatalog->dtl_katalog($where,'e_catalog')->result();
        $this->temp->load('front_end/partials', 'front_end/ekatalog/detail_ekatalog', $data);
    }

}
