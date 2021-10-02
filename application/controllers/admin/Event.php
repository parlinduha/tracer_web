<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
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
		$data['title'] = 'Data Lowongan';
		$data['user'] = $this->session->userdata('username');
		$data['lowongan'] = $this->model_lowongan->readLowongan();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/lowongan/index', $data);
		$this->load->view('admin/templates/footer');
	}
	public function tambah()
	{
		if ($this->model_lowongan->insertLowongan()) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data user berhasil ditambahkan.</div>');
			redirect(base_url('admin/lowongan'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data lowongan tidak dapat ditambahkan, coba lagi</div>');
			redirect(base_url('admin/lowongan'));
		}
	}
	public function edit($id)
	{
		if ($this->model_lowongan->updateLowongan($id) == true) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data lowongan Ubah ditambahkan.</div>');
			redirect(base_url('admin/lowongan'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data lowongan tidak dapat ditambahkan, coba lagi</div>');
			redirect(base_url('admin/lowongan'));
		}
	}
	public function hapus($id)
	{
		if ($this->model_lowongan->deleteLowongan($id) == true) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data user telah dihapus.</div>');
			redirect(base_url('admin/lowongan'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data lowongan tidak dapat dihapus, coba lagi</div>');
			redirect(base_url('admin/lowongan'));
		}
	}
}
