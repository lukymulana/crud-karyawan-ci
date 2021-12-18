<?php
class Karyawan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_karyawan');
	}
	function index()
	{
		$data['jabatan_list'] = $this->m_karyawan->jabatan_list();
		$data['unit_kerja_list'] = $this->m_karyawan->unit_kerja_list();
		$this->load->view('view_karyawan', $data);
	}

	function data_karyawan()
	{
		$data = $this->m_karyawan->karyawan_list();
		echo json_encode($data);
	}

	function get_karyawan()
	{
		$id_karyawan = $this->input->get('id_karyawan');
		$data = $this->m_karyawan->get_karyawan_by_id($id_karyawan);
		echo json_encode($data);
	}

	function simpan_karyawan()
	{
		$nama_karyawan = $this->input->post('nama_karyawan');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$id_jabatan = $this->input->post('id_jabatan');
		$id_unit = $this->input->post('id_unit');
		$status = $this->input->post('status');
		$data = $this->m_karyawan->simpan_karyawan($nama_karyawan, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $id_jabatan, $id_unit, $status);
		echo json_encode($data);
	}

	function update_karyawan()
	{
		$id_karyawan = $this->input->post('id_karyawan');
		$nama_karyawan = $this->input->post('nama_karyawan');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$id_jabatan = $this->input->post('id_jabatan');
		$id_unit = $this->input->post('id_unit');
		$status = $this->input->post('status');
		$data = $this->m_karyawan->update_karyawan($id_karyawan, $nama_karyawan, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $id_jabatan, $id_unit, $status);
		echo json_encode($data);
	}

	function hapus_karyawan()
	{
		$id_karyawan = $this->input->post('id_karyawan');
		$data = $this->m_karyawan->hapus_karyawan($id_karyawan);
		echo json_encode($data);
	}
}
