<?php class M_index extends CI_Model
{
	public function getAgenda6($id = null)
    {
        $this->db->from('agenda');
        $this->db->limit(6);

        if ($id != null) {
            $this->db->where('agenda_id', $id);
        }

        $query = $this->db->get();
        return $query;
    }

    public function getKatalog6($id = null)
    {
        $this->db->from('e_catalog');
        $this->db->limit(6);

        if ($id != null) {
            $this->db->where('catalog_id', $id);
        }

        $query = $this->db->get();
        return $query;
    }
}