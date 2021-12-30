<?php
class jabatan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_jabatan');
	}
	function index()
	{
		// $data['urutan'] = $this->m_jabatan->get_urutan();
		$this->load->view('view_jabatan');
	}

	function data_jabatan()
	{
		$data = $this->m_jabatan->jabatan_list();
		echo json_encode($data);
	}

	function get_jabatan()
	{
		$id_jabatan = $this->input->get('id_jabatan');
		$data = $this->m_jabatan->get_jabatan_by_id($id_jabatan);
		echo json_encode($data);
	}

	function simpan_jabatan()
	{
		$nama_jabatan = $this->input->post('nama_jabatan');
		$data = $this->m_jabatan->simpan_jabatan($nama_jabatan);
		echo json_encode($data);
	}

	function update_jabatan()
	{
		$id_jabatan = $this->input->post('id_jabatan');
		$nama_jabatan = $this->input->post('nama_jabatan');
		$data = $this->m_jabatan->update_jabatan($id_jabatan, $nama_jabatan);
		echo json_encode($data);
	}

	function hapus_jabatan()
	{
		$id_jabatan = $this->input->post('id_jabatan');
		$data = $this->m_jabatan->hapus_jabatan($id_jabatan);
		echo json_encode($data);
	}

	function sort_jabatan()
	{
		$positions = $this->input->post('positions');
		$data = $this->m_jabatan->sort_jabatan($positions);
		echo json_encode($data);
	}
}
