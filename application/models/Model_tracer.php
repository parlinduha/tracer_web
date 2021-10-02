<?php

class Model_tracer extends CI_model
{
	public function tampil()
	{
		return $this->db->get('tbl_tracer')->result_array();
	}
	public function insertTracer()
	{
		$p = $this->input->post();
		$data = [
			'nim' => $p['nim'],
			'nama' => $p['nama'],
			'prodi' => $p['prodi'],
			'tahun_lulus' => $p['tahun_lulus'],
			'email' => $p['email'],
			'nohp' => $p['nohp'],
			'pertanyaan_1' => $p['pertanyaan_1'],
			'pertanyaan_2' => $p['pertanyaan_2'],
			'pertanyaan_3' => $p['pertanyaan_3'],
			'pertanyaan_4' => $p['pertanyaan_4'],
			'pertanyaan_5' => $p['pertanyaan_5'],
			'pertanyaan_6' => $p['pertanyaan_6'],
			'pertanyaan_7' => $p['pertanyaan_7'],
			'pertanyaan_8' => $p['pertanyaan_8'],
			'pertanyaan_9' => $p['pertanyaan_9'],
			'pertanyaan_10' => $p['pertanyaan_10'],
			'pertanyaan_11' => $p['pertanyaan_11'],
			'pertanyaan_12' => $p['pertanyaan_12'],
			'pertanyaan_13' => $p['pertanyaan_13'],
			'pertanyaan_14' => $p['pertanyaan_14'],
			'pertanyaan_15' => $p['pertanyaan_15'],
			'pertanyaan_16' => $p['pertanyaan_16'],
			'pertanyaan_17' => $p['pertanyaan_17'],
			'pertanyaan_18' => $p['pertanyaan_18'],
			'pertanyaan_19' => $p['pertanyaan_19'],
			'pertanyaan_20' => $p['pertanyaan_20'],
			'pertanyaan_21' => $p['pertanyaan_21'],
			'pertanyaan_22' => $p['pertanyaan_22'],
			'pertanyaan_23' => $p['pertanyaan_23'],
			'pertanyaan_24' => $p['pertanyaan_24'],
		];
		return $this->db->insert('tbl_tracer', $data);
	}
	public function deleteTracer($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_tracer');
		return true;
	}
}
