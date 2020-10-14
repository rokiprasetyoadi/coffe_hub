<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ekatalog extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        if ($this->session->userdata('status') != "login_acc") {
            redirect(base_url("back_end/Authentication"));
        }
        $this->load->model("M_ekatalog");
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['ekatalog']=$this->M_ekatalog->getAll()->result();
        $this->temp->load('back_end/partials', 'back_end/ekatalog/ekatalog', $data);
    }

    public function add()
    {
        $this->M_ekatalog->rulesNew();
        if ($this->form_validation->run() == false) {
            $data = [
                'page' => 'add',
                'kode' => $this->M_ekatalog->kode()
            ];
            $this->temp->load('back_end/partials', 'back_end/ekatalog/form_ekatalog', $data);
        } else {
            $this->M_ekatalog->addNew();
            $this->session->set_flashdata('pesan', '<div class="alert alert-outline alert-success">Data berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('back_end/Ekatalog');
        }
    }

    public function edit($id)
    {
        $this->M_ekatalog->rulesEdit();
        $query = $this->M_ekatalog->getAll($id);
        if ($this->form_validation->run() == false) {
            if ($query->num_rows() > 0) {
                $ekatalog = $query->row();
                $data = [
                    'page' => 'edit',
                    'row' => $ekatalog
                ];
                $this->temp->load('back_end/partials', 'back_end/ekatalog/form_ekatalog', $data);
            }
        } else {
            $post = $this->input->post(null, true);
            if (isset($_POST['edit'])) {
                $this->M_ekatalog->editData($post);
                $this->session->set_flashdata('pesan', '<div class="alert alert-outline alert-success" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Data!</strong> berhasil disimpan.
                                            </div>');
                redirect('back_end/Ekatalog');
            }
        }
    }

    public function delete($id=null)
    {
        $this->M_ekatalog->deleteData($id);
        redirect('back_end/Ekatalog');
    }

    //public function print()
    //{
        //$data['tbl_barang']=$this->M_barang->getAll()->result();
        //$this->temp->load('admin/print/partials.html', 'admin/print/barang.html', $data);
    //}
}

/* End of file Controllername.php */
