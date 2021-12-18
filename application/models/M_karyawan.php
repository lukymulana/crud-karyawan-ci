<?php
class M_karyawan extends CI_Model
{

	function karyawan_list()
	{
		$hasil = $this->db->query("SELECT * FROM karyawan k, jabatan j, unit_kerja u WHERE k.id_jabatan = j.id_jabatan AND k.id_unit = u.id_unit");
		return $hasil->result();
	}

	function jabatan_list()
	{
		$hasil = $this->db->get("jabatan");
		return $hasil;
	}

	function unit_kerja_list()
	{
		$hasil = $this->db->get("unit_kerja");
		return $hasil;
	}

	function simpan_karyawan($nama_karyawan, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $id_jabatan, $id_unit, $status)
	{
		$hasil = $this->db->query("INSERT INTO karyawan VALUES('','$nama_karyawan', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$id_jabatan', '$id_unit', '$status')");
		return $hasil;
	}

	function get_karyawan_by_id($id_karyawan)
	{
		$hsl = $this->db->query("SELECT * FROM karyawan k, jabatan j, unit_kerja u WHERE k.id_karyawan='$id_karyawan' AND k.id_jabatan = j.id_jabatan AND k.id_unit = u.id_unit");
		if ($hsl->num_rows() > 0) {
			foreach ($hsl->result() as $data) {
				$hasil = array(
					'id_karyawan' => $data->id_karyawan,
					'nama_karyawan' => $data->nama_karyawan,
					'tempat_lahir' => $data->tempat_lahir,
					'tanggal_lahir' => $data->tanggal_lahir,
					'jenis_kelamin' => $data->jenis_kelamin,
					'alamat' => $data->alamat,
					'status' => $data->status,
					'id_jabatan' => $data->id_jabatan,
					'nama_jabatan' => $data->nama_jabatan,
					'id_unit' => $data->id_unit,
					'nama_unit' => $data->nama_unit,
				);
			}
		}
		return $hasil;
	}

	function update_karyawan($id_karyawan, $nama_karyawan, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $id_jabatan, $id_unit, $status)
	{
		$hasil = $this->db->query("UPDATE karyawan SET nama_karyawan='$nama_karyawan', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', id_jabatan='$id_jabatan', id_unit='$id_unit', status='$status' WHERE id_karyawan='$id_karyawan'");
		return $hasil;
	}

	function hapus_karyawan($id_karyawan)
	{
		$hasil = $this->db->query("DELETE FROM karyawan WHERE id_karyawan='$id_karyawan'");
		return $hasil;
	}
}
