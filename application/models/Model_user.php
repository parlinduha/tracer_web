<?php

class Model_user extends CI_model
{
	public function UserById($id)
	{
		$this->db->where("role_id", $id);
		$query = $this->db->get('tb_user');
		return $query->result_array();
	}
	public function insertUser()
	{
		$data = [
			'nim'		=> htmlspecialchars($this->input->post('nim', true)),
			'nama'		=> htmlspecialchars($this->input->post('nama', true)),
			'email'	=> htmlspecialchars($this->input->post('email', true)),
			'username'	=> htmlspecialchars($this->input->post('username', true)),
			'password' => htmlspecialchars($this->input->post('password1')),
			'role_id'	=> 2,
		];

		return	$this->db->insert('tb_user', $data);
	}
	public function updatetUser($id)
	{
		$data = [
			'nim'		=> htmlspecialchars($this->input->post('nim', true)),
			'nama'		=> htmlspecialchars($this->input->post('nama', true)),
			'email'	=> htmlspecialchars($this->input->post('email', true)),
			'username'	=> htmlspecialchars($this->input->post('username', true)),
			'password' => htmlspecialchars($this->input->post('password1')),
			'role_id'	=> 2,
		];
		$this->db->where('id', $id);
		$this->db->update('tb_user', $data);
		return true;
	}
	// Method Menampilkan Data
	public function readUser()
	{
		$query = $this->db->get('tb_user');
		return $query->result_array();
	}
	public function deleteUser($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tb_user');
		return true;
	}
}
