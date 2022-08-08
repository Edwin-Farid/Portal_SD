<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('M_berita');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin"));
		}
	}

	public function index()
	{
	
		$data['berita'] = $this->db->query("SELECT berita.id,berita.judul,kategori.kategori,berita.gambar FROM berita LEFT JOIN kategori ON berita.id_kategori=kategori.id WHERE berita.id")->result();
		$data['kategori'] = $this->db->query("SELECT * FROM kategori")->result();
		$this->load->view('admin/page/berita/index', $data);
	}
	public function edit($id)
	{
		$data['edit'] = $this->db->query("SELECT * FROM berita WHERE id='$id'")->result();
		// $data['kategori'] = $this->db->query("SELECT * FROM kategori")->result();
		$this->load->view('admin/page/berita/edit', $data);
	}
	public function update()
	{
		$id =        $_POST['id'];
		$id_kategori =        $_POST['id_kategori'];
		$judul =	 $_POST['judul'];
		$gambar 	    = $_FILES['gambar'];
		$isi =	 $_POST['isi'];
		$config['upload_path']          = './upload/berita';
		$config['allowed_types']		= 'jpg|png|gif|jpeg';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar')) {
			$this->session->set_flashdata('error', 'gagall!!');
			redirect('Berita/index');
		} else {
			$gambar = $this->upload->data('file_name');
		}
		$data = array(
			'id' => $id,
			'id_kategori' => $id_kategori,
			'judul' => $judul,
			'gambar' => $gambar,
			'isi' => $isi,
		);
		$where = array(
			'id' => $id
		);

		$this->M_berita->update_data($where, $data, 'berita');
		$this->session->set_flashdata('success', 'Update Success!!!');
		redirect('Berita');
		$this->load->view('admin/page/Berita/index');
	}
	public function hapus($id)
	{
		$_id = $this->db->get_where('berita', ['id' => $id])->row();
		$query = $this->db->delete('berita', ['id' => $id]);
		if ($query) {
			unlink("./upload/berita/" . $_id->file);
		}
		$this->session->set_flashdata('info', 'Hapus Data Berhasil!!!');
		redirect('Berita');
	}
	public function save()
	{
		$config['upload_path']          = './upload/berita';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 0;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error', 'Input Data Gagal !! Max_Size :2.48 MB Width:2807px Height :3433px');

			redirect('Berita', $error);
		} else {
			$_data = array('upload_data' => $this->upload->data());
			$data = array(
				'id_kategori' => $this->input->post('id_kategori'),
				'judul' => $this->input->post('judul'),
				'gambar' => $_data['upload_data']['file_name'],
				'isi' => $this->input->post('isi'),


			);
			$query = $this->db->insert('berita', $data);
			if ($query) {
				$this->session->set_flashdata('success', 'Berhasil!!');

				redirect('Berita');
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', 'Input Data Gagal !! Max_Size :2.48 MB Width:2807px Height :3433px');
			}
		}
	}
}
