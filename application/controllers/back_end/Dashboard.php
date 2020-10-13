<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        //if ($this->session->userdata('status') != "login") {
            //redirect(base_url("admin/Login_admin"));
        //}
        //$this->load->model("M_index");
            //date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $this->temp->load('back_end/partials', 'back_end/index');
    }

}
