<?php
class M_unit_kerja extends CI_Model
{

	function unit_kerja_list()
	{
		$hasil = $this->db->query("SELECT * FROM unit_kerja");
		return $hasil->result();
	}

	function simpan_unit_kerja($nama_unit)
	{
		$hasil = $this->db->query("INSERT INTO unit_kerja VALUES('','$nama_unit')");
		return $hasil;
	}

	function get_unit_kerja_by_id($id_unit)
	{
		$hsl = $this->db->query("SELECT * FROM unit_kerja WHERE id_unit='$id_unit'");
		if ($hsl->num_rows() > 0) {
			foreach ($hsl->result() as $data) {
				$hasil = array(
					'id_unit' => $data->id_unit,
					'nama_unit' => $data->nama_unit,
				);
			}
		}
		return $hasil;
	}

	function update_unit_kerja($id_unit, $nama_unit)
	{
		$hasil = $this->db->query("UPDATE unit_kerja SET nama_unit='$nama_unit' WHERE id_unit='$id_unit'");
		return $hasil;
	}

	function hapus_unit_kerja($id_unit)
	{
		$hasil = $this->db->query("DELETE FROM unit_kerja WHERE id_unit='$id_unit'");
		return $hasil;
	}
}
