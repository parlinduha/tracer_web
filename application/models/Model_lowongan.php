<?php

class Model_lowongan extends CI_model
{
	public function insertLowongan()
	{
		$p = $this->input->post();
		$data = [
			'Nama_PT' => $p['Nama_PT'],
			'bagian' => $p['bagian'],
			'nama_narahubung' => $p['nama_narahubung'],
			'no_narahubung' => $p['no_narahubung'],
			'keterangan' => $p['keterangan'],
		];

		return $this->db->insert('tbl_lowongan', $data);
	}
	public function updatetUser($id)
	{
	}
	// Method Menampilkan Data
	public function readLowongan()
	{
		$query = $this->db->get('tbl_lowongan');
		return $query->result_array();
	}
	public function deleteLowongan($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_lowongan');
		return true;
	}
}
