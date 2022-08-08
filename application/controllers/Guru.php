<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('M_guru');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin"));
		}
	}

	public function index()
	{
		
		$data['guru'] = $this->db->query("SELECT * FROM guru")->result();
		$this->load->view('admin/page/guru/index', $data);
	}
	public function edit($id)
	{
		
		$data['guru'] = $this->db->query("SELECT * FROM guru WHERE id='$id'")->result();
		$this->load->view('admin/page/guru/edit', $data);
	}
	public function detail($id)
	{
		
		$data['detail'] = $this->db->query("SELECT * FROM guru WHERE id='$id'")->result();
		$this->load->view('admin/page/guru/detail', $data);
	}
	public function update()
	{
		$id =        $_POST['id'];
		$nama =	 $_POST['nama'];
		$nip =	 $_POST['nip'];
		$nuptk =	 $_POST['nuptk'];
		$gambar 	    = $_FILES['gambar'];
		$jk =	 $_POST['jk'];
		$tmp_lhr =	 $_POST['tmp_lhr'];
		$pelajaran =	 $_POST['pelajaran'];
		$pangkat =	 $_POST['pangkat'];
		$tugas =	 $_POST['tugas'];
		$email =	 $_POST['email'];
		$alamat =	 $_POST['alamat'];
		$config['upload_path']          = './upload/guru';
		$config['allowed_types']		= 'jpg|png|gif|jpeg';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar')) {
			$this->session->set_flashdata('error', 'gagall!!');
			redirect('Guru/index');
		} else {
			$gambar = $this->upload->data('file_name');
		}
		$data = array(
			'id' => $id,
			'nama' => $nama,
			'nip' => $nip,
			'nuptk' => $nuptk,
			'gambar' => $gambar,
			'jk' => $jk,
			'tmp_lhr' => $tmp_lhr,
			'pelajaran' => $pelajaran,
			'pangkat' => $pangkat,
			'tugas' => $tugas,
			'email' => $email,
			'alamat' => $alamat,
		);
		$where = array(
			'id' => $id
		);

		$this->M_guru->update_data($where, $data, 'guru');
		$this->session->set_flashdata('success', 'Update Success!!!');
		redirect('Guru');
		$this->load->view('admin/page/guru/index');
	}
	public function simpan()
	{
		$config['upload_path']          = './upload/guru';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 0;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error', 'Input Data Gagal !! Max_Size :2.48 MB Width:2807px Height :3433px');

			redirect('Guru', $error);
		} else {
			$_data = array('upload_data' => $this->upload->data());
			$data = array(
				'nama' => $this->input->post('nama'),
				'nip' => $this->input->post('nip'),
				'nuptk' => $this->input->post('nuptk'),
				'gambar' => $_data['upload_data']['file_name'],
				'jk' => $this->input->post('jk'),
				'tmp_lhr' => $this->input->post('tmp_lhr'),
				'pelajaran' => $this->input->post('pelajaran'),
				'pangkat' => $this->input->post('pangkat'),
				'tugas' => $this->input->post('tugas'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),


			);
			$query = $this->db->insert('guru', $data);
			if ($query) {
				$this->session->set_flashdata('success', 'Berhasil!!');

				redirect('Guru');
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', 'Input Data Gagal !! Max_Size :2.48 MB Width:2807px Height :3433px');
			}
		}
	}
}
