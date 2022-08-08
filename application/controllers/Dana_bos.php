<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dana_bos extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('M_dana_bos');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Admin"));
		}
	}

	public function index()
	{

		$data['dana_bos'] = $this->db->query("SELECT * FROM dana_bos")->result();
		$this->load->view('admin/page/dana_bos/index', $data);
	}
	public function edit($id)
	{

		$data['dana_bos'] = $this->db->query("SELECT * FROM dana_bos WHERE id='$id'")->result();
		$this->load->view('admin/page/dana_bos/edit', $data);
	}
	public function detail($id)
	{

		$data['detail'] = $this->db->query("SELECT * FROM dana_bos WHERE id='$id'")->result();
		$this->load->view('admin/page/dana_bos/detail', $data);
	}
	public function update()
	{
		$id = $_POST['id'];
		$tahap = $_POST['tahap'];
		$gelombang = $_POST['gelombang'];
		$sekolah_sesuai_kepmen = $_POST['sekolah_sesuai_kepmen'];
		$sudah_salur = $_POST['sudah_salur'];
		$belum_salur = $_POST['belum_salur'];
		$status = $_POST['status'];

		$data = array(
			'id' => $id,
			'tahap' => $tahap,
			'gelombang' => $gelombang,
			'sekolah_sesuai_kepmen' => $sekolah_sesuai_kepmen,
			'sudah_salur' => $sudah_salur,
			'belum_salur' => $belum_salur,
			'status' => $status,
		);
		$where = array(
			'id' => $id
		);

		$this->M_dana_bos->update_data($where, $data, 'dana_bos');
		$this->session->set_flashdata('success', 'Update Success!!!');
		redirect('Dana_bos');
		$this->load->view('admin/page/dana_bos/index');
	}
	public function simpan()
	{
		$data = array(
			'tahap' => $this->input->post('tahap'),
			'gelombang' => $this->input->post('gelombang'),
			'sekolah_sesuai_kepmen' => $this->input->post('sekolah_sesuai_kepmen'),
			'sudah_salur' => $this->input->post('sudah_salur'),
			'belum_salur' => $this->input->post('belum_salur'),
			'status' => "0",
		);
		$query = $this->db->insert('dana_bos', $data);
		if ($query) {
			$this->session->set_flashdata('success', 'Berhasil!!');

			redirect('Dana_bos');
		} else {
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error', 'Input Data Gagal !!');
		}
	}

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_dana_bos->hapus_data($where, 'dana_bos');
		$this->session->set_flashdata('error', 'Delete Success!!');

		redirect('Dana_bos/index');
	}
}
