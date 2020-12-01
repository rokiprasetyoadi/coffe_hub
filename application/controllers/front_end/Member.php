<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        $this->load->model("M_member");
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
       $this->temp->load('front_end/partials', 'front_end/akun/member');
    }

    public function register()
    {
        $this->M_member->rulesNew();
        if ($this->form_validation->run() == false) {
            $data = [
                'kode' => $this->M_member->kode(),
            ];
            $this->temp->load('front_end/partials', 'front_end/akun/register', $data);
        } else {
            $this->M_member->regAccount();
            $this->session->set_flashdata('pesan', '<div class="alert alert-outline alert-success">Create Account Success, Please Sign In<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('signin');
        }
    }

    public function signin()
    {
        $this->temp->load('front_end/partials', 'front_end/akun/signin');
    }

    public function act_signin()
    {
        $member_username = $this->input->post('member_username');
        $member_password = $this->input->post('member_password');
        $where = array(
            'member_username' => $member_username,
            'member_password' => md5($member_password)
            );
        $cek = $this->M_member->cek_signin("member", $where)->row_array();
        if ($cek > 0) {
            $data_session = array(
                'member_id' => $cek['member_id'],
                'member_username' => $cek['member_username'],
                'member_nama' => $cek['member_nama'],
                'member_email' => $cek['member_email'],
                'member_alamat' => $cek['member_alamat'],
                'member_nohp' => $cek['member_nohp'],
                'status' => "SignIn_DoNe"
                );

            $this->session->set_userdata($data_session);

            redirect(base_url("home"));
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Username / Password salah!</div>');
            redirect('signin');
        }
    }

    public function signout()
    {
        $this->session->sess_destroy();
        redirect(base_url('home'));
    }

}
