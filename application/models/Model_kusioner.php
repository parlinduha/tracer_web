<?php

class Model_kusioner extends CI_model
{
	// Method Menampilkan Data
	public function tampil()
	{
		$query = $this->db->get('tbl_kuisioner');
		return $query->result_array();
	}
	// tambah
	public function insertKusioner()
	{
		$data = [
			'judul'		=> htmlspecialchars($this->input->post('judul', true)),
			'kuisioner'		=> htmlspecialchars($this->input->post('kuisioner', true)),
		];

		return	$this->db->insert('tbl_kuisioner', $data);
	}
	public function updateKusioner($id)
	{
		$data = [
			'judul'		=> htmlspecialchars($this->input->post('judul', true)),
			'kuisioner'		=> htmlspecialchars($this->input->post('kuisioner', true)),
		];
		$this->db->where('id_kuisioner', $id);
		$this->db->update('tbl_kuisioner', $data);
		return true;
	}
	public function deleteKusioner($id_kuisioner)
	{
		$this->db->where('id_kuisioner', $id_kuisioner);
		$this->db->delete('tbl_kuisioner');
		return true;
	}


	public function get_pertanyaan($id)
	{
		return $this->db->where('id_kuisioner', $id)->get('tbl_pertanyaan')->result_array();
	}
	// Method Menampilkan Data Pertanyaan
	public function pertanyaan()
	{
		$query = $this->db->select('*, judul as jd')
			->from('tbl_kuisioner')
			->join('tbl_pertanyaan', 'tbl_pertanyaan.id_kuisioner = tbl_kuisioner.id_kuisioner')
			->get()
			->result_array();
		return $query;
	}
	// public function get_pertanyaan($id)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('tbl_pertanyaan');
	// 	$this->db->join('tbl_kusisioner', 'tbl_kuisioner.id_kuisioner = simpanan.id_anggota');
	// 	$query = $this->db->get();
	// 	return $query;
	// }
	// tambah
	public function insertP()
	{
		$data = [
			'id_kuisioner'		=> htmlspecialchars($this->input->post('judul', true)),
			'pertanyaan'		=> htmlspecialchars($this->input->post('pertanyaan', true)),
		];

		return	$this->db->insert('tbl_pertanyaan', $data);
	}
	public function updateP($id)
	{
		$data = [
			'judul'		=> htmlspecialchars($this->input->post('judul', true)),
			'kuisioner'		=> htmlspecialchars($this->input->post('kuisioner', true)),
		];
		$this->db->where('id_kuisioner', $id);
		$this->db->update('tbl_kuisioner', $data);
		return true;
	}
	public function delete($id_kuisioner)
	{
		$this->db->where('id_kuisioner', $id_kuisioner);
		$this->db->delete('tbl_kuisioner');
		return true;
	}
}
