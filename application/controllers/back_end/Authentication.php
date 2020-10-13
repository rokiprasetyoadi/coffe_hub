<?php
class Authentication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }

    public function index()
    {
        $this->load->view('back_end/auth/login');
    }

    public function act_login()
    {
        $admin_username = $this->input->post('admin_username');
        $admin_password = $this->input->post('admin_password');
        $where = array(
            'admin_username' => $admin_username,
            'admin_password' => md5($admin_password)
            );
        $cek = $this->M_auth->cek_login("admin", $where)->row_array();
        if ($cek > 0) {
            $data_session = array(
                'admin_username' => $cek['admin_username'],
                'admin_nama' => $cek['admin_nama'],
                'admin_email' => $cek['admin_email'],
                'status' => "login_acc"
                );

            $this->session->set_userdata($data_session);

            redirect(base_url("admin"));
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Username / Password salah!</div>');
            redirect('back_end/Authentication');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('back_end/Authentication'));
    }
}
