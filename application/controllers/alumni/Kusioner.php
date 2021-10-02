<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kusioner extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') != '2') {
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
		$data['title'] = 'Kusioner';
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar', $data);
		$this->load->view('admin/templates/sidebar2', $data);
		$this->load->view('alumni/kusioner');
		$this->load->view('admin/templates/footer');
	}
	function tambah()
	{
		if ($this->model_tracer->insertTracer()) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data  berhasil ditambahkan.</div>');
			redirect(base_url('alumni/kusioner'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data  tidak dapat ditambahkan, coba lagi</div>');
			redirect(base_url('alumni/kusioner'));
		}
	}
}
