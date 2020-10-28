<?php class M_ekatalog extends CI_Model
{
    private $_table = "e_catalog";
    public $catalog_id;

    public function getAll($id = null)
    {
        $this->db->from('e_catalog');

        if ($id != null) {
            $this->db->where('catalog_id', $id);
        }

        $query = $this->db->get();
        return $query;
    }

    public function getM()
    {
        return $this->db->get('e_catalog')->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["catalog_id" => $id])->row();
    }

    public function rulesNew()
    {
        $data = [
            [
                'field' => 'catalog_id',
                'label' => 'ID ECatalog',
                'rules' => 'required|is_unique[e_catalog.catalog_id]'
            ],
            [
                'field' => 'catalog_nama_petani',
                'label' => 'Nama catalog_nama_petani',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($data);
    }

    public function rulesEdit()
    {
        $data = [
            [
                'field' => 'catalog_id',
                'label' => 'ID ECatalog',
                'rules' => 'required'
            ],
            [
                'field' => 'catalog_nama_petani',
                'label' => 'Nama catalog_nama_petani',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($data);
    }

    public function rulesEditIMG()
    {
        $data = [
            [
                'field' => 'catalog_id',
                'label' => 'ID ECatalog',
                'rules' => 'required'
            ],
            [
                'field' => 'catalog_nama_kopi',
                'label' => 'Nama Kopi',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($data);
    }

    public function kode()
    {
        $this->db->select('RIGHT(e_catalog.catalog_id,2) as id', false);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('e_catalog'); //cek dulu apakah ada sudah ada kode di tabel.

        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia
            $data = $query->row();
            $kode = intval($data->id) + 1;
        } else {
            $kode = 1; //cek jika kode belum terdapat pada table
        }

        $tgl = date('dmY');
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodetampil = "EK" . $tgl . $batas; //format kode
        return $kodetampil;
    }

    public function addNew()
    {
        $data = [
            'catalog_id' => htmlspecialchars($this->input->post('catalog_id', true)),
            'catalog_nama_petani' => htmlspecialchars($this->input->post('catalog_nama_petani', true)),
            'catalog_alamat' => htmlspecialchars($this->input->post('catalog_alamat', true)),
            'catalog_kelompok_tani' => htmlspecialchars($this->input->post('catalog_kelompok_tani', true)),
            'catalog_no_hp' => htmlspecialchars($this->input->post('catalog_no_hp', true)),
            'catalog_website' => htmlspecialchars($this->input->post('catalog_website', true)),
            'catalog_sosmed' => htmlspecialchars($this->input->post('catalog_sosmed', true)),
            'catalog_nama_kopi' => htmlspecialchars($this->input->post('catalog_nama_kopi', true)),
            'catalog_badan_usaha' => htmlspecialchars($this->input->post('catalog_badan_usaha', true)),
            'catalog_lokasi' => htmlspecialchars($this->input->post('catalog_lokasi', true)),
            'catalog_ketinggian' => htmlspecialchars($this->input->post('catalog_ketinggian', true)),
            'catalog_jenis_kopi' => htmlspecialchars($this->input->post('catalog_jenis_kopi', true)),
            'catalog_kap_produksi' => htmlspecialchars($this->input->post('catalog_kap_produksi', true)),
            'catalog_sertifikat' => htmlspecialchars($this->input->post('catalog_sertifikat', true)),
            'catalog_deskripsi' => htmlspecialchars($this->input->post('catalog_deskripsi', true)),
            'catalog_img' => $this->_uploadImage(),
            'catalog_video' => htmlspecialchars($this->input->post('catalog_video', true))
        ];

        $this->db->insert('e_catalog', $data); // query untuk insert data ke tabel barang
    }

    public function editData()
    {
        $data = [
            'catalog_id' => htmlspecialchars($this->input->post('catalog_id', true)),
            'catalog_nama_petani' => htmlspecialchars($this->input->post('catalog_nama_petani', true)),
            'catalog_alamat' => htmlspecialchars($this->input->post('catalog_alamat', true)),
            'catalog_kelompok_tani' => htmlspecialchars($this->input->post('catalog_kelompok_tani', true)),
            'catalog_no_hp' => htmlspecialchars($this->input->post('catalog_no_hp', true)),
            'catalog_website' => htmlspecialchars($this->input->post('catalog_website', true)),
            'catalog_sosmed' => htmlspecialchars($this->input->post('catalog_sosmed', true)),
            'catalog_nama_kopi' => htmlspecialchars($this->input->post('catalog_nama_kopi', true)),
            'catalog_badan_usaha' => htmlspecialchars($this->input->post('catalog_badan_usaha', true)),
            'catalog_lokasi' => htmlspecialchars($this->input->post('catalog_lokasi', true)),
            'catalog_ketinggian' => htmlspecialchars($this->input->post('catalog_ketinggian', true)),
            'catalog_jenis_kopi' => htmlspecialchars($this->input->post('catalog_jenis_kopi', true)),
            'catalog_kap_produksi' => htmlspecialchars($this->input->post('catalog_kap_produksi', true)),
            'catalog_sertifikat' => htmlspecialchars($this->input->post('catalog_sertifikat', true)),
            'catalog_deskripsi' => htmlspecialchars($this->input->post('catalog_deskripsi', true)),
            'catalog_video' => htmlspecialchars($this->input->post('catalog_video', true))
        ];

        $this->db->where('catalog_id', $this->input->post('catalog_id'));
        $this->db->update('e_catalog', $data);
    }

    public function editimg()
    {
        $data = [
            'catalog_id' => htmlspecialchars($this->input->post('catalog_id', true)),
            'catalog_nama_kopi' => htmlspecialchars($this->input->post('catalog_nama_kopi', true)),
            'catalog_img' => $this->_uploadImage()
        ];

        $this->db->where('catalog_id', $this->input->post('catalog_id'));
        $this->db->update('e_catalog', $data);
    }

    public function deleteData($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("catalog_id" => $id));
    }

    private function _deleteImage($id)
    {
        $e_catalog = $this->getById($id);
        if ($e_catalog->catalog_img != "default.jpg") {
            $filename = explode(".", $e_catalog->catalog_img)[0];
            return array_map('unlink', glob(FCPATH . "assets/upload/e_catalog/$filename.*"));
        }
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './assets/upload/e_catalog/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = $this->input->post('catalog_id');
        $config['overwrite'] = true;
        $config['max_size'] = 5024; // 1MB
        $config['create_thumb'] = false;
        $config['maintain_ratio'] = false;
        $config['quality'] = '50%';
        $config['width'] = 460;
        $config['height'] = 528;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('catalog_img')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    //Front_end

    function dtl_katalog($where,$table){
        $this->db->select('*');
        return $this->db->get_where($table,$where);
    }

}
