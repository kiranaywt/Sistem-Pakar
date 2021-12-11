<?php

class M_frondend extends CI_model
{
	public function simpan_biodata()
	{
		$post = $this->input->post();
		$data = [
			// "id_user" => $post["id_user"],
			"nama_balita" => $post["nama_balita"],
			"usia_balita" => $post["usia_balita"],
			"jk_balita" => $post["jk_balita"],
			"alamat_orangtua" => $post["alamat_orangtua"],
			"nama_ibu" => $post["nama_ibu"],
			"nama_ayah" => $post["nama_ayah"],
			"no_hp_orangtua" => $post["no_hp_orangtua"],
		];

		return $this->db->insert("tabel_user", $data);
	}
}