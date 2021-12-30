<?php
class M_jabatan extends CI_Model
{

	function jabatan_list()
	{
		$hasil = $this->db->query("SELECT * FROM jabatan ORDER BY urutan");
		return $hasil->result();
	}

	function get_urutan(){
		$hasil = $this->db->query("SELECT urutan FROM jabatan ORDER BY urutan LIMIT 1");
		return $hasil->result();
	}

	function simpan_jabatan($nama_jabatan)
	{
		$urutan = $this->db->query("SELECT urutan FROM jabatan ORDER BY urutan DESC LIMIT 1");
		$ur = $urutan->result();
		foreach ($ur as $baris) {
			$a =$baris->urutan;
			$b = $a + 1;
			$hasil = $this->db->query("INSERT INTO jabatan VALUES('','$nama_jabatan','$b')");
			return $hasil;
		}
		
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

	function sort_jabatan($positions)
	{
		foreach ($positions as $key => $position) {
			$index = $position[0];
			$newPosition = $position[1];
			$query  = "UPDATE jabatan SET urutan = '$newPosition' WHERE id_jabatan = '$index'";
			$result = $this->db->query($query);
		 }
		return $result;
	}
}
