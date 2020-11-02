<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        $this->load->model("M_agenda");
        $this->load->library("pagination");
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        //konfigurasi pagination
        $config['base_url'] = site_url('front_end/Agenda/index'); //site url
        $config['total_rows'] = $this->db->count_all('agenda'); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->M_agenda->agenda_page($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();

    	//$data['agendall']=$this->M_agenda->getAll()->result();
        $this->temp->load('front_end/partials', 'front_end/agenda/agenda', $data);
    }

    public function detail_agenda($id)
    {
        $where = array('agenda_id' => $id);
        $data['detail_agenda']=$this->M_agenda->dtl_agenda($where,'agenda')->result();
        $this->temp->load('front_end/partials', 'front_end/agenda/detail_agenda', $data);
    }

}
