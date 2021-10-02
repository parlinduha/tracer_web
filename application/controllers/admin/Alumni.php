<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
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
		$data['title'] = 'Data Alumni';
		$data['user'] = $this->session->userdata('username');
		$data['alumni'] = $this->model_alumni->get_alumni();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/alumni/index', $data);
		$this->load->view('admin/templates/footer');
	}
	// visi
	// Tambah
	public function tambah()
	{
		if ($this->model_alumni->insertAlumni()) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data  berhasil ditambahkan.</div>');
			redirect(base_url('admin/alumni'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data  tidak dapat ditambahkan, coba lagi</div>');
			redirect(base_url('admin/alumni'));
		}
	}
	public function edit($id)
	{
		if ($this->model_alumni->updateAlumni($id) == true) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data  Ubah ditambahkan.</div>');
			redirect(base_url('admin/alumni'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data  tidak dapat ditambahkan, coba lagi</div>');
			redirect(base_url('admin/alumni'));
		}
	}
}
