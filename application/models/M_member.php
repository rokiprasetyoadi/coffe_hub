<?php class M_member extends CI_Model
{
    public function rulesNew()
    {
        $data = [
            [
                'field' => 'member_id',
                'label' => 'ID Member',
                'rules' => 'required|is_unique[member.member_id]'
            ],
            [
                'field' => 'member_nama',
                'label' => 'Nama Member',
                'rules' => 'required'
            ],
            [
                'field' => 'member_username',
                'label' => 'Username Member',
                'rules' => 'required'
            ],
            [
                'field' => 'member_password',
                'label' => 'password Member',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($data);
    }

    public function kode()
    {
        $this->db->select('RIGHT(member.member_id,2) as id', false);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('member'); //cek dulu apakah ada sudah ada kode di tabel.

        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia
            $data = $query->row();
            $kode = intval($data->id) + 1;
        } else {
            $kode = 1; //cek jika kode belum terdapat pada table
        }

        $tgl = date('dmY');
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodetampil = "M" . $tgl . $batas; //format kode
        return $kodetampil;
    }

    public function regAccount()
    {
        $data = [
            'member_id' => htmlspecialchars($this->input->post('member_id', true)),
            'member_nama' => htmlspecialchars($this->input->post('member_nama', true)),
            'member_nohp' => htmlspecialchars($this->input->post('member_nohp', true)),
            'member_alamat' => htmlspecialchars($this->input->post('member_alamat', true)),
            'member_username' => htmlspecialchars($this->input->post('member_username', true)),
            'member_email' => htmlspecialchars($this->input->post('member_email', true)),
            'member_password' => htmlspecialchars (md5($this->input->post('member_password', true))),
            'member_pertanyaan_keamanan' => htmlspecialchars($this->input->post('member_pertanyaan_keamanan', true)),
            'member_jawaban' => htmlspecialchars($this->input->post('member_jawaban', true)),
            'member_created' => date('d-m-Y H:i:s')
        ];

        $this->db->insert('member', $data); // query untuk insert data ke tabel barang
    }

    function cek_signin($table,$where){        
        return $this->db->get_where($table,$where);
    }

}
