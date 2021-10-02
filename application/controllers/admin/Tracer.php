<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tracer extends CI_Controller
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
		$data['title'] = 'Data Tracer';
		$data['user'] = $this->session->userdata('username');
		$data['tracer'] = $this->model_tracer->tampil();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/tracer/index', $data);
		$this->load->view('admin/templates/footer');
	}
	function tambah()
	{
		if ($this->model_tracer->insertTracer()) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data  berhasil ditambahkan.</div>');
			redirect(base_url('admin/tracer'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data  tidak dapat ditambahkan, coba lagi</div>');
			redirect(base_url('admin/tracer'));
		}
	}
	public function edit($id)
	{
		if ($this->model_tracer->updateTracer($id) == true) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data user Ubah ditambahkan.</div>');
			redirect(base_url('admin/tracer'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data tracer tidak dapat ditambahkan, coba lagi</div>');
			redirect(base_url('admin/tracer'));
		}
	}
	public function hapus($id)
	{
		if ($this->model_tracer->deleteTracer($id) == true) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data tracer telah dihapus.</div>');
			redirect(base_url('admin/tracer'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data tracer tidak dapat dihapus, coba lagi</div>');
			redirect(base_url('admin/tracer'));
		}
	}
}
