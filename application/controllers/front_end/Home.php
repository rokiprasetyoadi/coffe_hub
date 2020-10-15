<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        $this->load->model("M_index");
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $this->temp->load('front_end/partials', 'front_end/index');
    }

}