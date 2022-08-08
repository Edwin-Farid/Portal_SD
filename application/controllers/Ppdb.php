<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin"));
		}
		// $this->load->model('M_kategori');
	}

	public function index()
	{
		// $data['kategori']= $this->db->query("SELECT * FROM kategori")->result();
		$this->load->view('admin/page/ppdb/index');
	}

	// public function edit($id)
	// {
	// 	$data['kategori']= $this->db->query("SELECT * FROM kategori WHERE id='$id'")->result();
	// 	$this->load->view('admin/page/kategori/edit',$data);
	// }

	// public function simpan()
	// {
		
	// 		$kategori = $this->input->post('kategori');
	
	// 		$data = array(
	// 			'kategori' => $kategori,
			
	// 		);
	// 		$this->M_kategori->input_data($data, 'kategori');
	// 		$this->session->set_flashdata('success', 'Success!!');

	// 		redirect('Kategori/index');
		
	// }

	// function hapus($id)
	// {
	// 	$where = array('id' => $id);
	// 	$this->M_kategori->hapus_data($where, 'kategori');
	// 	$this->session->set_flashdata('error', 'Delete Success!!');

	// 	redirect('Kategori/index');
	// }
	
	// public function update()
	// {
		
	// 		$id = $this->input->post('id');
	// 		$kategori = $this->input->post('kategori');
		
	// 		$data = array(
	// 			'id' => $id,
	// 			'kategori' => $kategori,
			

	// 		);
	// 		$where = array(
	// 			'id' => $id
	// 		);
	// 		$this->M_kategori->update($where, $data, 'kategori');
	// 		$this->session->set_flashdata('success', 'Update Success!!');

	// 		redirect('Kategori/index');
		
	// }
	
}
