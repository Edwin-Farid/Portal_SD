<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Benner extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_benner');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Admin"));
		}
	}

	public function index()
	{

		$data['benner'] = $this->db->query("SELECT * FROM benner WHERE id ORDER BY id DESC")->result();
		$this->load->view('admin/page/benner/index', $data);
	}
	
	
	public function hapus($id)
	{
		$_id = $this->db->get_where('benner', ['id' => $id])->row();
		$query = $this->db->delete('benner', ['id' => $id]);
		if ($query) {
			unlink("./upload/benner/" . $_id->file);
		}
		$this->session->set_flashdata('info', 'Hapus Data Berhasil!!!');
		redirect('Benner');
	}
	public function simpan()
	{
		$config['upload_path']          = './upload/benner';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 0;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error', 'Input Data Gagal !! Max_Size :2.48 MB Width:2807px Height :3433px');

			redirect('Benner', $error);
		} else {
			$_data = array('upload_data' => $this->upload->data());
			$data = array(

				'gambar' => $_data['upload_data']['file_name'],


			);
			$query = $this->db->insert('benner', $data);
			if ($query) {
				$this->session->set_flashdata('success', 'Berhasil!!');

				redirect('Benner');
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', 'Input Data Gagal !! Max_Size :2.48 MB Width:2807px Height :3433px');
			}
		}
	}
}
