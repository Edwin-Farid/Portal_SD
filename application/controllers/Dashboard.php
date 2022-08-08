<?php 
 
class Dashboard extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin"));
		}
	}
 
	function index(){
	    $data['siswa'] = $this->db->query("SELECT * FROM siswa")->num_rows();
	    $data['guru'] = $this->db->query("SELECT * FROM guru")->num_rows();
	    $data['berita'] = $this->db->query("SELECT * FROM berita")->num_rows();
	    $data['modul'] = $this->db->query("SELECT * FROM modul")->num_rows();
        $this->load->view('admin/page/index',$data);
	}
}