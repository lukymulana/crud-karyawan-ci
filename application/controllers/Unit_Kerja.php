<?php
class Unit_Kerja extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_unit_kerja');
	}
	function index()
	{
		$this->load->view('view_unit_kerja');
	}

	function data_unit_kerja()
	{
		$data = $this->m_unit_kerja->unit_kerja_list();
		echo json_encode($data);
	}

	function get_unit_kerja()
	{
		$id_unit = $this->input->get('id_unit');
		$data = $this->m_unit_kerja->get_unit_kerja_by_id($id_unit);
		echo json_encode($data);
	}

	function simpan_unit_kerja()
	{
		$nama_unit = $this->input->post('nama_unit');
		$data = $this->m_unit_kerja->simpan_unit_kerja($nama_unit);
		echo json_encode($data);
	}

	function update_unit_kerja()
	{
		$id_unit = $this->input->post('id_unit');
		$nama_unit = $this->input->post('nama_unit');
		$data = $this->m_unit_kerja->update_unit_kerja($id_unit, $nama_unit);
		echo json_encode($data);
	}

	function hapus_unit_kerja()
	{
		$id_unit = $this->input->post('id_unit');
		$data = $this->m_unit_kerja->hapus_unit_kerja($id_unit);
		echo json_encode($data);
	}
}
