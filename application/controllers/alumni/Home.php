<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
		$data['title'] = 'Alumni Dashboard';
		// $data['user'] = $this->session->userdata('username');
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar', $data);
		$this->load->view('admin/templates/sidebar2', $data);
		$this->load->view('alumni/dashboard', $data);
		$this->load->view('admin/templates/footer');
	}
	// visi
	public function lowongan()
	{
		$data['title'] = 'List Lowongan';
		$data['user'] = $this->session->userdata('username');
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['lowongan'] = $this->model_lowongan->readLowongan();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar', $data);
		$this->load->view('admin/templates/sidebar2', $data);
		$this->load->view('alumni/lowongan', $data);
		$this->load->view('admin/templates/footer');
	}
}
