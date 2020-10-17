<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        $this->load->model("M_agenda");
        $this->load->helper('url');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
    	$data['agendall']=$this->M_agenda->getAll()->result();
        $this->temp->load('front_end/partials', 'front_end/agenda/agenda', $data);
    }

    public function detail_agenda($id)
    {
        $where = array('agenda_id' => $id);
        $data['detail_agenda']=$this->M_agenda->dtl_agenda($where,'agenda')->result();
        $this->temp->load('front_end/partials', 'front_end/agenda/detail_agenda', $data);
    }

}
