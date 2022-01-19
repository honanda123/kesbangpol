<?php

class Model_adm extends CI_Model
{
    public function view_pegawai()
    {
        return $this->db->get('tbl_pegawai');
    }
    public function tambah_pegawai($data)
    {
        $this->db->insert('tbl_pegawai', $data);
    }

    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function view_sop()
    {
        return $this->db->get('tbl_sop');
    }

    public function tambah_sop($data)
    {
        $this->db->insert('tbl_sop', $data);
    }

    public function view_kegiatan()
    {
        return $this->db->get('tbl_kegiatan');
    }

    public function tambah_kegiatan($data)
    {
        $this->db->insert('tbl_kegiatan', $data);
    }
}
