<?php

class Model_alumni extends CI_model
{
	public function get_alumni()
	{
		return $this->db->get('tbl_alumni')->result();
	}
	public function insertAlumni()
	{
		$p = $this->input->post();
		$data = [
			'user_id' => $p['nim'],
			'nama_alumni' => $p['nama_lengkap'],
			'alamat' => $p['alamat'],
			'no_telepon' => $p['no_telp'],
			'email' => $p['email'],
			'jenis_kelamin' => $p['jenis_kelamin'],
			'tahun_lulus' => $p['tahun_lulus'],
			'jurusan' => $p['jurusan'],
			'status_pekerjaan' => $p['status_pekerjaan'],
			'bagian' => $p['posisi'],
			'alamat_kantor' => $p['alamat_kantor'],
			'no_telepon_kantor' => $p['no_telp_kantor'],
			// 'foto' => $this->upload->data('file_name'),
		];

		return $this->db->insert('tbl_alumni', $data);
	}
	public function updateAlumni($id)
	{
		$p = $this->input->post();
		$data = [
			'nim' => $p['nim'],
			'nama_alumni' => $p['nama_lengkap'],
			'alamat' => $p['alamat'],
			'no_telepon' => $p['no_telp'],
			'email' => $p['email'],
			'jenis_kelamin' => $p['jenis_kelamin'],
			'tahun_lulus' => $p['tahun_lulus'],
			'jurusan' => $p['jurusan'],
			'status_pekerjaan' => $p['status_pekerjaan'],
			'bagian' => $p['posisi'],
			'alamat_kantor' => $p['alamat_kantor'],
			'no_telepon_kantor' => $p['no_telp_kantor'],
		];
		$this->db->where('id', $id);
		$this->db->update('tbl_alumni', $data);
		return true;
	}
	public function alumniId($id)
	{
		$this->db->select('id, tbl_alumni');
		$this->db->where('user_id', $id); //
		$this->db->from('tbl_alumni');
		$query = $this->db->get();
		return $query->result();
	}
	public function alumniById()
	{
		$query = "SELECT `tbl_alumni`.*, `tb_user`.`nim`
                  FROM `tbl_alumni` 
                  JOIN `tb_user`
                  ON `tbl_alumni`.`user_id` = `tb_user`.`id`
                  
                ";
		return $this->db->query($query)->row_array();
	}
}
