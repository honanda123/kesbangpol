<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth');
        } else {
            //validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('tbl_admin', ['username' => $username])->row_array();
        $admin = $this->db->get_where('tbl_admin', ['password' => $password])->row_array();

        if ($admin) {
            //user ada
            // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Datang Admin</div>');
            //     if (password_verify($password, $admin['password'])) {
            //         $data = [
            //             'username' => $admin['username']
            //         ];
            //         $this->session->set_userdata($data);
            //         redirect('../admin/home_adm');
            //     } else {
            //         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password Salah!</div>');
            //         redirect('../auth');
            //     }
            // } else {
            //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password Salah!</div>');
            //     redirect('../auth');
            redirect('admin');
        } else {
            // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password Salah!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        // redirect('../auth');
        redirect(site_url('auth'));
    }
}
