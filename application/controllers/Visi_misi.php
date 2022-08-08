<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_misi extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin"));
		}
		$this->load->model('M_visi_misi');
	}
	public function index()
	{
		$data['visi_misi']= $this->db->query("SELECT * FROM visi_misi")->result();
	
		$this->load->view('admin/page/visi_misi/index',$data);
	}
	public function simpan()
	{
		
			$id = $this->input->post('id');
			$visi = $this->input->post('visi');
			$misi = $this->input->post('misi');
		
			$data = array(
				'id' => $id,
				'visi' => $visi,
				'misi' => $misi,
			

			);
			$where = array(
				'id' => $id
			);
			$this->M_visi_misi->simpan($where, $data, 'visi_misi');
			$this->session->set_flashdata('success', 'Simpan Success!!');

			redirect('Visi_Misi/index');
		
	}
}
