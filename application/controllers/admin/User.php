<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') != '1') {
			$this->session->set_flashdata('pesan', '
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Silahkan login terlebih dahulu</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				');
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['title'] = 'User Manajemen';
		$data['user'] = $this->session->userdata('username');
		$data['users'] = $this->model_user->readUser();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/user/index', $data);
		$this->load->view('admin/templates/footer');
	}
	public function tambah()
	{
		if ($this->model_user->insertUser()) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data user berhasil ditambahkan.</div>');
			redirect(base_url('admin/user'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data user tidak dapat ditambahkan, coba lagi</div>');
			redirect(base_url('admin/user'));
		}
	}
	public function edit($id)
	{
		if ($this->model_user->updatetUser($id) == true) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data user Ubah ditambahkan.</div>');
			redirect(base_url('admin/user'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data user tidak dapat ditambahkan, coba lagi</div>');
			redirect(base_url('admin/user'));
		}
	}
	public function hapus($id)
	{
		if ($this->model_user->deleteUser($id) == true) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data user telah dihapus.</div>');
			redirect(base_url('admin/user'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data user tidak dapat dihapus, coba lagi</div>');
			redirect(base_url('admin/user'));
		}
	}

	public function profile()
	{
		$data['title'] = 'Profile';
		$data['user'] = $this->session->userdata('username');
		$data['users'] = $this->model_user->readUser();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/user/profile', $data);
		$this->load->view('admin/templates/footer');
	}
}
