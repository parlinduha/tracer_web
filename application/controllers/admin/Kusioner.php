<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kusioner extends CI_Controller
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
		$data['title'] = 'Data Kusioner';
		$data['user'] = $this->session->userdata('username');
		$data['list'] =  $this->model_kusioner->get_pertanyaan('id_kuisioner');
		$data['kusioner'] = $this->model_kusioner->tampil();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/kusioner/index', $data);
		$this->load->view('admin/templates/footer');
	}
	public function detail($id)
	{
		$data['title'] = 'Data Kusioner';
		$data['user'] = $this->session->userdata('username');
		$data['kusioner'] = $this->model_kusioner->tampil();
		$data['pertanyaan'] =  $this->model_kusioner->get_pertanyaan($id);
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/kusioner/detail', $data);
		$this->load->view('admin/templates/footer');
	}
	// Tambah
	public function tambah()
	{
		if ($this->model_kusioner->insertKusioner()) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data kusioner berhasil ditambahkan.</div>');
			redirect(base_url('admin/kusioner'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data kusioner tidak dapat ditambahkan, coba lagi</div>');
			redirect(base_url('admin/kusioner'));
		}
	}
	public function edit($id)
	{
		if ($this->model_kusioner->updateKusioner($id) == true) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data kuisioner Ubah ditambahkan.</div>');
			redirect(base_url('admin/kusioner'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data kuisioner tidak dapat ditambahkan, coba lagi</div>');
			redirect(base_url('admin/kusioner'));
		}
	}
	public function hapus($id)
	{
		if ($this->model_kusioner->deletekusioner($id) == true) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data kuisioner telah dihapus.</div>');
			redirect(base_url('admin/kusioner'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data kuisioner tidak dapat dihapus, coba lagi</div>');
			redirect(base_url('admin/kusioner'));
		}
	}

	/*Form Soal Pertanyaan*/
	public function pertanyaan()
	{
		$data['title'] = 'Data Pertanyaan';
		$data['user'] = $this->session->userdata('username');
		$data['pertanyaan'] = $this->model_kusioner->pertanyaan();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/kusioner/pertanyaan', $data);
		$this->load->view('admin/templates/footer');
	}
	public function tambahP()
	{
		if ($this->model_kusioner->insertP()) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data Pertanyaan berhasil ditambahkan.</div>');
			redirect(base_url('admin/kusioner'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data Pertanyaan tidak dapat ditambahkan, coba lagi</div>');
			redirect(base_url('admin/kusioner/pertanyaan'));
		}
	}
	public function editP($id)
	{
		if ($this->model_kusioner->updateP($id) == true) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data Pertanyaan Ubah ditambahkan.</div>');
			redirect(base_url('admin/kusioner/pertanyaan'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data Pertanyaan tidak dapat ditambahkan, coba lagi</div>');
			redirect(base_url('admin/kusioner/pertanyaan'));
		}
	}
	public function hapusP($id)
	{
		if ($this->model_kusioner->deleteP($id) == true) {
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data pertanyaan telah dihapus.</div>');
			redirect(base_url('admin/kusioner/pertanyaan'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data pertanyaan tidak dapat dihapus, coba lagi</div>');
			redirect(base_url('admin/kusioner/pertanyaan'));
		}
	}
}
