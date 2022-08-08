<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modul extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin"));
		}

	}

	public function index()
	{
		$data['modul']= $this->db->query("SELECT * FROM modul")->result();
		$this->load->view('admin/page/modul/index',$data);
	}

	public function edit($id)
	{
		$data['kategori']= $this->db->query("SELECT * FROM kategori WHERE id='$id'")->result();
		$this->load->view('admin/page/kategori/edit',$data);
	}

	public function simpan()
	{
		
		$config['upload_path']          = './upload/modul';
		$config['allowed_types']        = 'pdf|docx';
		$config['max_size']             = 0;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('file')) {
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error', 'Input Data Gagal !! Max_Size :2.48 MB type:PDF,DOCX');

			redirect('Modul', $error);
		} else {
			$_data = array('upload_data' => $this->upload->data());
			$data = array(
			
				'judul' => $this->input->post('judul'),
				'file' => $_data['upload_data']['file_name'],
			

			);
			$query = $this->db->insert('modul', $data);
			if ($query) {
				$this->session->set_flashdata('success', 'Berhasil!!');

				redirect('Modul');
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', 'Input Data Gagal !! Max_Size :2.48 MB Width:2807px Height :3433px');
			}
		}
		
	}

	public function hapus($id)
	{
		$_id = $this->db->get_where('modul', ['id' => $id])->row();
		$query = $this->db->delete('modul', ['id' => $id]);
		if ($query) {
			unlink("./upload/modul/" . $_id->file);
		}
		$this->session->set_flashdata('info', 'Hapus Data Berhasil!!!');
		redirect('Modul');
	}
	
	public function update()
	{
		
			$id = $this->input->post('id');
			$kategori = $this->input->post('kategori');
		
			$data = array(
				'id' => $id,
				'kategori' => $kategori,
			

			);
			$where = array(
				'id' => $id
			);
			$this->M_kategori->update($where, $data, 'kategori');
			$this->session->set_flashdata('success', 'Update Success!!');

			redirect('Kategori/index');
			
		
	}
	
}
