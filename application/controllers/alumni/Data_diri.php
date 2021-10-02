<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_diri extends CI_Controller
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
		$data['title'] = 'Data Diri';
		$data['user'] = $this->session->userdata('username');
		$id = $this->session->userdata('username');
		// $data['alumni'] = $this->model_alumni->alumniId($id);
		$data['alumni'] = $this->model_alumni->alumniById($id);
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		// var_dump($data);
		// die;
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar', $data);
		$this->load->view('admin/templates/sidebar2', $data);
		$this->load->view('alumni/data_diri', $data);
		$this->load->view('admin/templates/footer');
	}
	public function tambah()
	{
		// $nama = 'baptisan' . time();
		// $config['allowed_types'] = 'pdf';
		// $config['max_size']      = '2048';
		// $config['upload_path']   = './assets/img/upload/';
		// $config['file_name']	 = $nama;
		// $this->upload->initialize($config);
		if ($this->model_alumni->insertAlumni() == true) {

			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data  berhasil ditambahkan.</div>');
			redirect(base_url('alumni/data_diri'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Ekstensi file tidak diijikan. Harus (.jpeg / .png / .jpg)</div>');
			redirect(base_url('alumni/data_diri'));
		}
	}
	public function edit($id)
	{
		if ($this->model_user->updatetUser($id) == true) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data user Ubah ditambahkan.</div>');
			redirect(base_url('alumni/data_diri'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data user tidak dapat ditambahkan, coba lagi</div>');
			redirect(base_url('alumni/data_diri'));
		}
	}
}
