<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
		$data['title'] = 'Dashboard';
		$data['user'] = $this->session->userdata('nim');
		$data['alumni'] = $this->db->get('tbl_alumni')->result();
		$data['lowongan'] = $this->db->get('tbl_lowongan')->result();
		$data['jumlah_user'] = $this->db->get('tb_user')->result();
		$data['kusioner'] = $this->db->get('tbl_tracer')->result();
		$data['tracer'] = $this->db->get('tbl_tracer')->row_array();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/templates/footer');
	}
	// visi
	public function visi()
	{
		$data['title'] = 'Visi';
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/gereja/visi');
		$this->load->view('admin/templates/footer');
	}
}
