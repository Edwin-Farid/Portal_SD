<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vidio extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin"));
		}
		$this->load->model('M_vidio');
	}

	public function index()
	{
		$data['vidio']= $this->db->query("SELECT * FROM vidio")->result();
		$this->load->view('admin/page/vidio/index',$data);
	}

	public function edit($id)
	{
		$data['vidio']= $this->db->query("SELECT * FROM vidio WHERE id='$id'")->result();
		$this->load->view('admin/page/vidio/edit',$data);
	}

	public function simpan()
	{
		
			$judul = $this->input->post('judul');
			$link = $this->input->post('link');
	
			$data = array(
				'judul' => $judul,
				'link' => $link,
			
			);
			$this->M_vidio->input_data($data, 'vidio');
			$this->session->set_flashdata('success', 'Success!!');

			redirect('Vidio/index');
		
	}

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_vidio->hapus_data($where, 'vidio');
		$this->session->set_flashdata('error', 'Delete Success!!');

		redirect('Vidio/index');
	}
	
	public function update()
	{
		
			$id = $this->input->post('id');
			$judul = $this->input->post('judul');
			$link = $this->input->post('link');
		
			$data = array(
				'id' => $id,
				'judul' => $judul,
				'link' => $link,
			

			);
			$where = array(
				'id' => $id
			);
			$this->M_vidio->update($where, $data, 'vidio');
			$this->session->set_flashdata('success', 'Update Success!!');

			redirect('Vidio/index');
		
	}
	
}
