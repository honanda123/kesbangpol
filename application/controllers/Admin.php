<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function index()
	{
		$data['tbl_pegawai'] = $this->Model_adm->view_pegawai()->result();
		$this->load->view('templates/adm_header');
		$this->load->view('templates/adm_navbar',$data);
		$this->load->view('templates/adm_sidebar');
		$this->load->view('adm_pegawai', $data);
		$this->load->view('templates/adm_footer');
	}

	public function view_pegawai()
	{
		$data['tbl_pegawai'] = $this->Model_adm->view_pegawai()->result();
		$this->load->view('templates/adm_header');
		$this->load->view('templates/adm_navbar');
		$this->load->view('templates/adm_sidebar');
		$this->load->view('adm_pegawai', $data);
		$this->load->view('templates/adm_footer');
	}

	public function tambah_pegawai()
	{
		$nama_pegawai = $this->input->post('nama_pegawai');
		$jabatan = $this->input->post('jabatan');
		$pangkat = $this->input->post('pangkat');
		$email = $this->input->post('email');
		$foto = $_FILES['foto'];


		if ($foto = '') {
		} else {
			$config['upload_path'] = './assets/img/pegawai/';
			$config['allowed_types'] = 'jpg|png|gif';
			$this->upload->initialize($config);
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto')) {
				echo "Upload foto Gagal";
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}
		}

		$data = array(
			'nama_pegawai'	=> $nama_pegawai,
			'jabatan'		=> $jabatan,
			'pangkat'		=> $pangkat,
			'email'			=> $email,
			'foto'			=> $foto,
		);

		$this->Model_adm->tambah_pegawai($data);
		redirect('admin/view_pegawai');
	}

	public function edit_pegawai()
	{
		$id_pegawai = $this->input->post('id_pegawai');
		$nama_pegawai = $this->input->post('nama_pegawai');
		$jabatan = $this->input->post('jabatan');
		$pangkat = $this->input->post('pangkat');
		$email = $this->input->post('email');
		$foto = $_FILES['foto']['name'];

		if ($foto) {
			$config['allowed_types'] = 'gif|jpg|png';
			$config['upload_path'] = './assets/img/pegawai/';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('foto')) {
				$new_image = $this->upload->data('file_name');
				$this->db->set('foto', $new_image);
			} else {
				echo $this->upload->display_errors();
			}
		}

		$data = array(
			'id_pegawai'	=> $id_pegawai,
			'nama_pegawai'	=> $nama_pegawai,
			'jabatan'		=> $jabatan,
			'pangkat'		=> $pangkat,
			'email'			=> $email,
			'foto'			=> $foto
		);

		$where = array(
			'id_pegawai' => $id_pegawai
		);

		$this->Model_adm->edit($where, $data, 'tbl_pegawai');
		// $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		// <strong>Item Has Been Updated!</strong>
		// <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		// <span aria-hidden="true">&times;</span>
		// </button>
		// </div>');
		redirect('admin/view_pegawai');
	}


	public function hapus_pegawai($id_pegawai)
	{
		$where = array('id_pegawai' => $id_pegawai);
		$this->Model_adm->hapus($where, 'tbl_pegawai');
		// $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		// <strong>Item Has Been Deleted!</strong>
		// <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		//   <span aria-hidden="true">&times;</span>
		// </button>
		// </div>');
		redirect('admin/view_pegawai');
	}

	public function view_sop()
	{
		$data['tbl_sop'] = $this->Model_adm->view_sop()->result();
		$this->load->view('templates/adm_header');
		$this->load->view('templates/adm_navbar');
		$this->load->view('templates/adm_sidebar');
		$this->load->view('adm_sop', $data);
		$this->load->view('templates/adm_footer');
	}

	public function tambah_sop()
	{
		$nama_sop = $this->input->post('nama_sop');
		$file = $_FILES['file']['name'];

		if ($file = '') {
		} else {
			$config['upload_path'] = './file/';
			$config['allowed_types'] = 'pdf';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('file')) {
				echo "Upload foto Gagal";
				die();
			} else {
				$file = $this->upload->data('file_name');
			}
		}

		$data = array(
			'nama_sop'	=> $nama_sop,
			'file'	=> $file,
		);


		$this->Model_adm->tambah_sop($data);
		redirect('admin/view_sop');
	}

	public function edit_sop()
	{
		$id_sop = $this->input->post('id_sop');
		$nama_sop = $this->input->post('nama_sop');
		$file = $_FILES['file']['name'];

		if ($file) {
			$config['allowed_types'] = 'pdf';
			$config['upload_path'] = './file/';
		

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('file')) {
				$new_file = $this->upload->data('file_name');
				$this->db->set('file', $new_file);
			} else {
				echo $this->upload->display_errors();
			}
		}

		$data = array(
			'id_sop'	=> $id_sop,
			'nama_sop'	=> $nama_sop,
			'file'	=> $file,

			
		);

		$where = array(
			'id_sop' => $id_sop
		);

		$this->Model_adm->edit($where, $data, 'tbl_sop');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Item Has Been Updated!</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect('admin/view_sop');
	}

	public function hapus_sop($id_sop)
	{
		$where = array('id_sop' => $id_sop);
		$this->Model_adm->hapus($where, 'tbl_sop');
		// $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		// <strong>Item Has Been Deleted!</strong>
		// <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		//   <span aria-hidden="true">&times;</span>
		// </button>
		// </div>');
		redirect('admin/view_sop');
	}

	public function view_kegiatan()
	{
		$data['tbl_kegiatan'] = $this->Model_adm->view_kegiatan()->result();
		$this->load->view('templates/adm_header');
		$this->load->view('templates/adm_navbar');
		$this->load->view('templates/adm_sidebar');
		$this->load->view('adm_kegiatan', $data);
		$this->load->view('templates/adm_footer');
	}

	public function tambah_kegiatan()
	{
		$nama_kegiatan = $this->input->post('nama_kegiatan');
		$tgl_kegiatan = $this->input->post('tgl_kegiatan');
		$ket_kegiatan = $this->input->post('ket_kegiatan');
		$foto_kegiatan = $_FILES['foto_kegiatan'];

		if ($foto_kegiatan = '') {
		} else {
			$config['upload_path'] = './assets/img/kegiatan/';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('foto_kegiatan')) {
				echo "Upload foto Gagal";
				die();
			} else {
				$foto_kegiatan= $this->upload->data('file_name');
			}
		}

		$data = array(
			'nama_kegiatan'	=> $nama_kegiatan,
			'tgl_kegiatan'	=> $tgl_kegiatan,
			'ket_kegiatan'	=> $ket_kegiatan,
			'foto_kegiatan'	=> $foto_kegiatan
		);
		$this->Model_adm->tambah_kegiatan($data);
		redirect('admin/view_kegiatan');
	}

	public function edit_kegiatan()
	{
		$id_kegiatan = $this->input->post('id_kegiatan');
		$nama_kegiatan = $this->input->post('nama_kegiatan');
		$ket_kegiatan = $this->input->post('ket_kegiatan');
		$tgl_kegiatan = $this->input->post('tgl_kegiatan');
		$foto_kegiatan = $_FILES['foto_kegiatan']['name'];

		if ($foto_kegiatan) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['upload_path'] = './assets/img/kegiatan/';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('foto_kegiatan')) {
				$new_image = $this->upload->data('file_name');
				$this->db->set('foto_kegiatan', $new_image);
			} else {
				echo $this->upload->display_errors();
			}
		}

		$data = array(
			'id_kegiatan'	=> $id_kegiatan,
			'nama_kegiatan'	=> $nama_kegiatan,
			'ket_kegiatan'	=> $ket_kegiatan,
			'tgl_kegiatan'	=> $tgl_kegiatan,
			'foto_kegiatan'	=> $foto_kegiatan
		);

		$where = array(
			'id_kegiatan' => $id_kegiatan
		);

		$this->Model_adm->edit($where, $data, 'tbl_kegiatan');
		// $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		// <strong>Item Has Been Updated!</strong>
		// <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		// <span aria-hidden="true">&times;</span>
		// </button>
		// </div>');
		redirect('admin/view_kegiatan');
	}

	public function hapus_kegiatan($id_kegiatan)
	{
		$where = array('id_kegiatan' => $id_kegiatan);
		$this->Model_adm->hapus($where, 'tbl_kegiatan');
		// $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		// <strong>Item Has Been Deleted!</strong>
		// <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		//   <span aria-hidden="true">&times;</span>
		// </button>
		// </div>');
		redirect('admin/view_kegiatan');
	}
}
