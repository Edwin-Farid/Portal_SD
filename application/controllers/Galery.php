<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_galery');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Admin"));
		}
	}

	public function index()
	{

		$data['galery'] = $this->db->query("SELECT * FROM galery WHERE id ORDER BY id DESC")->result();
		$this->load->view('admin/page/galery/index', $data);
	}
	public function edit($id)
	{

		$data['galery'] = $this->db->query("SELECT * FROM galery WHERE id='$id'")->result();
		$this->load->view('admin/page/galery/edit', $data);
	}
	public function update()
	{
		$id =        $_POST['id'];
		$judul =	 $_POST['judul'];
		$gambar 	    = $_FILES['gambar'];
		$config['upload_path']          = './upload/galery';
		$config['allowed_types']		= 'jpg|png|gif|jpeg';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar')) {
			$this->session->set_flashdata('error', 'gagall!!');
			redirect('Galery/index');
		} else {
			$gambar = $this->upload->data('file_name');
		}
		$data = array(
			'id' => $id,
			'judul' => $judul,
			'gambar' => $gambar,
		);
		$where = array(
			'id' => $id
		);

		$this->M_galery->update_data($where, $data, 'galery');
		$this->session->set_flashdata('success', 'Update Success!!!');
		redirect('Galery');
		$this->load->view('admin/page/galery/index');
	}
	public function hapus($id)
	{
		$_id = $this->db->get_where('galery', ['id' => $id])->row();
		$query = $this->db->delete('galery', ['id' => $id]);
		if ($query) {
			unlink("./upload/galery/" . $_id->file);
		}
		$this->session->set_flashdata('info', 'Hapus Data Berhasil!!!');
		redirect('Galery');
	}
	public function simpan()
	{
		$config['upload_path']          = './upload/galery';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 0;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error', 'Input Data Gagal !! Max_Size :2.48 MB Width:2807px Height :3433px');

			redirect('Galery', $error);
		} else {
			$_data = array('upload_data' => $this->upload->data());
			$data = array(

				'judul' => $this->input->post('judul'),
				'gambar' => $_data['upload_data']['file_name'],


			);
			$query = $this->db->insert('galery', $data);
			if ($query) {
				$this->session->set_flashdata('success', 'Berhasil!!');

				redirect('Galery');
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', 'Input Data Gagal !! Max_Size :2.48 MB Width:2807px Height :3433px');
			}
		}
	}
}
