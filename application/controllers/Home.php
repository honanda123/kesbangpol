<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
       
        $data['tbl_pegawai'] = $this->db->query("SELECT * FROM tbl_pegawai")->result();
        $data['tbl_kegiatan'] = $this->db->query("SELECT * FROM tbl_kegiatan")->result();

        $this->db->limit(3);
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('home',$data);
        $this->load->view('templates/footer');
    }
    public function credits()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('credits');
        $this->load->view('templates/footer');
    }
    public function struktur_org()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('struktur_org');
        $this->load->view('templates/footer');
    }

    public function tugas_fungsi()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('tugas_fungsi');
        $this->load->view('templates/footer');
    }

    public function jadwal_pelayanan()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('jadwal_pelayanan');
        $this->load->view('templates/footer');
    }

    public function sop()
    {
        $data['tbl_sop'] = $this->Model_adm->view_sop()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('sop',$data);
        $this->load->view('templates/footer');
    }

    public function galeri()
    {
        $data['tbl_kegiatan'] = $this->Model_adm->view_kegiatan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('galeri',$data);
        $this->load->view('templates/footer');
    }

    public function profil_pegawai()
    {
        $data['tbl_pegawai'] = $this->Model_adm->view_pegawai()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('profil_pegawai',$data);
        $this->load->view('templates/footer');
    }
}
