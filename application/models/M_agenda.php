<?php class M_agenda extends CI_Model
{
    private $_table = "agenda";
    public $agenda_id;

    public function getAll($id = null)
    {
        $this->db->from('agenda');

        if ($id != null) {
            $this->db->where('agenda_id', $id);
        }

        $query = $this->db->get();
        return $query;
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["agenda_id" => $id])->row();
    }

    public function rulesNew()
    {
        $data = [
            [
                'field' => 'agenda_id',
                'label' => 'ID Agenda',
                'rules' => 'required|is_unique[agenda.agenda_id]'
            ],
            [
                'field' => 'agenda_nama',
                'label' => 'Nama Agenda',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($data);
    }

    public function rulesEdit()
    {
        $data = [
            [
                'field' => 'agenda_id',
                'label' => 'ID Agenda',
                'rules' => 'required'
            ],
            [
                'field' => 'agenda_nama',
                'label' => 'Nama Agenda',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($data);
    }

    public function kode()
    {
        $this->db->select('RIGHT(agenda.agenda_id,2) as id', false);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('agenda'); //cek dulu apakah ada sudah ada kode di tabel.

        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia
            $data = $query->row();
            $kode = intval($data->id) + 1;
        } else {
            $kode = 1; //cek jika kode belum terdapat pada table
        }

        $tgl = date('dmY');
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodetampil = "A" . $tgl . $batas; //format kode
        return $kodetampil;
    }

    public function addNew()
    {
        $data = [
            'agenda_id' => htmlspecialchars($this->input->post('agenda_id', true)),
            'agenda_nama' => htmlspecialchars($this->input->post('agenda_nama', true)),
            'agenda_img' => $this->_uploadImage(),
            'agenda_keterangan' => htmlspecialchars($this->input->post('agenda_keterangan', true)),
            'agenda_tanggal' => htmlspecialchars($this->input->post('agenda_tanggal', true))
        ];

        $this->db->insert('agenda', $data); // query untuk insert data ke tabel barang
    }

    public function editData()
    {
        $data = [
            'agenda_id' => htmlspecialchars($this->input->post('agenda_id', true)),
            'agenda_nama' => htmlspecialchars($this->input->post('agenda_nama', true)),
            'agenda_keterangan' => htmlspecialchars($this->input->post('agenda_keterangan', true)),
            'agenda_tanggal' => htmlspecialchars($this->input->post('agenda_tanggal', true))
        ];

        $this->db->where('agenda_id', $this->input->post('agenda_id'));
        $this->db->update('agenda', $data);
    }

    public function deleteData($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("agenda_id" => $id));
    }

    private function _deleteImage($id)
    {
        $agenda = $this->getById($id);
        if ($agenda->agenda_img != "default.jpg") {
            $filename = explode(".", $agenda->agenda_img)[0];
            return array_map('unlink', glob(FCPATH . "assets/back_end/upload/agenda/$filename.*"));
        }
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './assets/back_end/upload/agenda/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = $this->input->post('agenda_id');
        $config['overwrite'] = true;
        $config['max_size'] = 5024; // 1MB
        $config['create_thumb'] = false;
        $config['maintain_ratio'] = false;
        $config['quality'] = '50%';
        $config['width'] = 460;
        $config['height'] = 528;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('agenda_img')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

}
