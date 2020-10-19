<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        if ($this->session->userdata('status') != "login_acc") {
            redirect(base_url("back_end/Authentication"));
        }
        $this->load->model("M_agenda");
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['agenda']=$this->M_agenda->getAll()->result();
        $this->temp->load('back_end/partials', 'back_end/agenda/agenda', $data);
    }

    public function add()
    {
        $this->M_agenda->rulesNew();
        if ($this->form_validation->run() == false) {
            $data = [
                'page' => 'add',
                'kode' => $this->M_agenda->kode()
            ];
            $this->temp->load('back_end/partials', 'back_end/agenda/form_agenda', $data);
        } else {
            $this->M_agenda->addNew();
            $this->session->set_flashdata('pesan', '<div class="alert alert-outline alert-success">Data berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('back_end/Agenda');
        }
    }

    public function edit($id)
    {
        $this->M_agenda->rulesEdit();
        $query = $this->M_agenda->getAll($id);
        if ($this->form_validation->run() == false) {
            if ($query->num_rows() > 0) {
                $agenda = $query->row();
                $data = [
                    'page' => 'edit',
                    'row' => $agenda
                ];
                $this->temp->load('back_end/partials', 'back_end/agenda/form_agenda', $data);
            }
        } else {
            $post = $this->input->post(null, true);
            if (isset($_POST['edit'])) {
                $this->M_agenda->editData($post);
                $this->session->set_flashdata('pesan', '<div class="alert alert-outline alert-success" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Data!</strong> berhasil disimpan.
                                            </div>');
                redirect('back_end/Agenda');
            }
        }
    }

    public function edit_img($id)
    {
        $this->M_agenda->rulesEdit();
        $query = $this->M_agenda->getAll($id);
        if ($this->form_validation->run() == false) {
            if ($query->num_rows() > 0) {
                $agendaa = $query->row();
                $data = [
                    'row' => $agendaa
                ];
                $this->temp->load('back_end/partials', 'back_end/agenda/form_edit_img', $data);
            }
        } else {
            $post = $this->input->post(null, true);
            if (isset($_POST['edit1'])) {
                $this->M_agenda->editimg($post);
                $this->session->set_flashdata('pesan', '<div class="alert alert-outline alert-success" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Data!</strong> berhasil disimpan.
                                            </div>');
                redirect('back_end/Agenda');
            }
        }
    }

    public function delete($id=null)
    {
        $this->M_agenda->deleteData($id);
        redirect('back_end/Agenda');
    }

    public function print()
    {
        $data['agenda_print']=$this->M_agenda->getAll()->result();
        $this->temp->load('back_end/print/partials.html', 'back_end/print/agenda.html', $data);
    }
}

/* End of file Controllername.php */
