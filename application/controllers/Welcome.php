<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$data['title'] = ' TRACER STUDY';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('welcome');
		$this->load->view('templates/footer');
	}
	public function kuis()
	{
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
		} else {

			$data['title'] = ' Kuisioner';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('kuis');
			$this->load->view('templates/footer');
		}
	}
	public function jobs()
	{
		$data['title'] = ' Lowongan Kerja';
		$data['lowongan'] = $this->model_lowongan->readLowongan();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('lowongan', $data);
		$this->load->view('templates/footer');
	}
}
