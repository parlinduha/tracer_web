<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function login()
	{
		$data['title'] = 'Login';
		$this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'username wajib diisi !!']);
		$this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'password wajib diisi !!']);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/templates/header', $data);
			$this->load->view('login');
			$this->load->view('admin/templates/footer1');
		} else {
			$auth = $this->model_auth->cek_login();
			if ($auth == FALSE) {
				$this->session->set_flashdata('pesan', '<div class="swalDefaultWarning">
                </div>');
				redirect('auth/login');
			} else {
				$this->session->set_userdata('username', $auth->username);
				$this->session->set_userdata('role_id', $auth->role_id);
				switch ($auth->role_id) {
					case 1:
						redirect('admin/dashboard');
						break;
					case 2:
						redirect('alumni/home');
						break;
					default:
						break;
				}
			}
		}
	}

	public function registrasi()
	{
		$data['title'] = 'Registrasi';
		$this->form_validation->set_rules('nim', 'NIM', 'required', ['required' => 'NIM wajib diisi !']);
		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama wajib diisi !']);
		$this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email wajib diisi !']);
		$this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username masih kosong  !']);
		$this->form_validation->set_rules('password1', 'Password', 'required|matches[password2]', ['required' => 'Password wajib diisi !', 'matches' => 'Password tidak sama']);
		$this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/templates/header', $data);
			$this->load->view('registrasi');
		} else {
			$data = [
				'id'       => '',
				'nim'     => $this->input->post('nim'),
				'nama'     => $this->input->post('nama'),
				'email'     => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password1'),
				'role_id'  =>  2
			];
			$this->db->insert('tb_user', $data);
			redirect('auth/login');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}
