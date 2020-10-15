<?php class M_profile extends CI_Model
{
    public function rulesEdit()
    {
        $data = [
            [
                'field' => 'admin_id',
                'label' => 'ID admin',
                'rules' => 'required'
            ],
            [
                'field' => 'admin_nama',
                'label' => 'Nama',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($data);
    }

    public function getById($id = null)
    {
        $this->db->from('admin');

        if ($id != null) {
            $this->db->where('admin_id', $id);
        }

        $query = $this->db->get();
        return $query;
    }

    public function editData()
    {
        $data = [
            'admin_id' => htmlspecialchars($this->input->post('admin_id', true)),
            'admin_nama' => htmlspecialchars($this->input->post('admin_nama', true)),
            'admin_alamat' => htmlspecialchars($this->input->post('admin_alamat', true)),
            'admin_email' => htmlspecialchars($this->input->post('admin_email', true)),
            'admin_telp' => htmlspecialchars($this->input->post('admin_telp', true)),
            'admin_username' => htmlspecialchars($this->input->post('admin_username', true))
        ];

        $this->db->where('admin_id', $this->input->post('admin_id'));
        $this->db->update('admin', $data);
    }

    public function cek_password($table,$where){        
        return $this->db->get_where($table,$where);
    }

    public function editPassword()
    {
        $data = [
            'admin_password' => htmlspecialchars(md5($this->input->post('admin_password1', true))),
        ];

        $this->db->where('admin_id', $this->input->post('admin_id'));
        $this->db->update('admin', $data);
    }

}
?>