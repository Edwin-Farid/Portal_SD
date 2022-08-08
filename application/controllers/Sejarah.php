<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin"));
		}
		$this->load->model('M_sejarah');
	}

	public function index()
	{
		$data['sejarah']= $this->db->query("SELECT * FROM sejarah")->result();
		$this->load->view('admin/page/sejarah/index',$data);
	}
	public function simpan()
	{
		
			$id = $this->input->post('id');
			$sejarah = $this->input->post('sejarah');
		
			$data = array(
				'id' => $id,
				'sejarah' => $sejarah,
			

			);
			$where = array(
				'id' => $id
			);
			$this->M_sejarah->simpan($where, $data, 'sejarah');
			$this->session->set_flashdata('success', 'Simpan Success!!');

			redirect('Sejarah/index');
		
	}
	
}
