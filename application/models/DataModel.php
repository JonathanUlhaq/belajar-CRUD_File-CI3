<?php

class DataModel extends CI_Model
{
    public function getData()
    {
        return $this->db->get('belajar')->result_array();
    }

    public function detailData($where)
    {
        return $this->db->get_where('belajar', $where)->row_array();
    }

    public function tambahData($data)
    {
        $this->db->insert('belajar', $data);
    }

    public function hapusData($id)
    {
        $this->db->where($id);
        $this->db->delete('belajar');
    }

    public function updateData($id, $data)
    {
        $this->db->where($id);
        $this->db->update('belajar', $data);
    }
}
