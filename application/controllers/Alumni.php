<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {
	public function index()
	{
		$data['alumni'] = $this->db->query("SELECT * FROM siswa WHERE status='alumni' ")->result();
		$this->load->view('admin/page/alumni/index',$data);
	}
}
