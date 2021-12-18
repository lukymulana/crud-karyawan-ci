<?php
class M_jabatan extends CI_Model
{

	function jabatan_list()
	{
		$hasil = $this->db->query("SELECT * FROM jabatan");
		return $hasil->result();
	}

	function simpan_jabatan($nama_jabatan)
	{
		$hasil = $this->db->query("INSERT INTO jabatan VALUES('','$nama_jabatan')");
		return $hasil;
	}

	function get_jabatan_by_id($id_jabatan)
	{
		$hsl = $this->db->query("SELECT * FROM jabatan WHERE id_jabatan='$id_jabatan'");
		if ($hsl->num_rows() > 0) {
			foreach ($hsl->result() as $data) {
				$hasil = array(
					'id_jabatan' => $data->id_jabatan,
					'nama_jabatan' => $data->nama_jabatan,
				);
			}
		}
		return $hasil;
	}

	function update_jabatan($id_jabatan, $nama_jabatan)
	{
		$hasil = $this->db->query("UPDATE jabatan SET nama_jabatan='$nama_jabatan' WHERE id_jabatan='$id_jabatan'");
		return $hasil;
	}

	function hapus_jabatan($id_jabatan)
	{
		$hasil = $this->db->query("DELETE FROM jabatan WHERE id_jabatan='$id_jabatan'");
		return $hasil;
	}
}
