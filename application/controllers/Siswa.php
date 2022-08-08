<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
    function __construct()
	{
		parent::__construct();

		$this->load->model('M_siswa');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin"));
		}
	}

	public function index()
	{
		
		$data['siswa'] = $this->db->query("SELECT * FROM siswa WHERE id ORDER BY id DESC")->result();
		$this->load->view('admin/page/siswa/index',$data);
	}
	public function update()
	{
		
			$id = $this->input->post('id');
			$nisn = $this->input->post('nisn');
			$nama = $this->input->post('nama');
			$tmp_lhr = $this->input->post('tmp_lhr');
			$tgl_lhr = $this->input->post('tgl_lhr');
			$jk = $this->input->post('jk');
			$kelas = $this->input->post('kelas');
			$nik_siswa = $this->input->post('nik_siswa');
			$nama_ayah = $this->input->post('nama_ayah');
			$tgl_ayah = $this->input->post('tgl_ayah');
			$nik_ayah = $this->input->post('nik_ayah');
			$nama_ibu = $this->input->post('nama_ibu');
			$tgl_ibu = $this->input->post('tgl_ibu');
			$nik_ibu = $this->input->post('nik_ibu');
			$alamat = $this->input->post('alamat');
			$status = $this->input->post('status');
		
			$data = array(
				'id' => $id,
				'nisn' => $nisn,
				'nama' => $nama,
				'tmp_lhr' => $tmp_lhr,
				'tgl_lhr' => $tgl_lhr,
				'jk' => $jk,
				'kelas' => $kelas,
				'nik_siswa' => $nik_siswa,
				'nama_ayah' => $nama_ayah,
				'tgl_ayah' => $tgl_ayah,
				'nik_ayah' => $nik_ayah,
				'nama_ibu' => $nama_ibu,
				'tgl_ibu' => $tgl_ibu,
				'nik_ibu' => $nik_ibu,
				'alamat' => $alamat,
				'status' => $status,
			
			

			);
			$where = array(
				'id' => $id
			);
			$this->M_siswa->update($where, $data, 'siswa');
			$this->session->set_flashdata('success', 'Update Success!!');

			redirect('Siswa/index');
		
	}
	
	public function edit($id)
	{
		
		$data['siswa'] = $this->db->query("SELECT * FROM siswa WHERE id='$id'")->result();
		$this->load->view('admin/page/siswa/edit',$data);
	}
    public function simpan()
	{
		
			$nisn = $this->input->post('nisn');
			$nama = $this->input->post('nama');
			$tmp_lhr = $this->input->post('tmp_lhr');
			$tgl_lhr = $this->input->post('tgl_lhr');
			$jk = $this->input->post('jk');
			$kelas = $this->input->post('kelas');
			$nik_siswa = $this->input->post('nik_siswa');
			$nama_ayah = $this->input->post('nama_ayah');
			$tgl_ayah = $this->input->post('tgl_ayah');
			$nik_ayah = $this->input->post('nik_ayah');
			$nama_ibu = $this->input->post('nama_ibu');
			$tgl_ibu = $this->input->post('tgl_ibu');
			$nik_ibu = $this->input->post('nik_ibu');
			$alamat = $this->input->post('alamat');
			$status = $this->input->post('status');
	
			$data = array(
				'nisn' => $nisn,
				'nama' => $nama,
				'tmp_lhr' => $tmp_lhr,
				'tgl_lhr' => $tgl_lhr,
				'jk' => $jk,
				'kelas' => $kelas,
				'nik_siswa' => $nik_siswa,
				'nama_ayah' => $nama_ayah,
				'tgl_ayah' => $tgl_ayah,
				'nik_ayah' => $nik_ayah,
				'nama_ibu' => $nama_ibu,
				'tgl_ibu' => $tgl_ibu,
				'nik_ibu' => $nik_ibu,
				'alamat' => $alamat,
				'status' => $status,
			
			);
			$this->M_siswa->input_data($data, 'siswa');
			$this->session->set_flashdata('success', 'Success!!');

			redirect('Siswa/index');
		
	}
	function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_siswa->hapus_data($where, 'siswa');
		$this->session->set_flashdata('error', 'Delete Success!!');

		redirect('Siswa/index');
	}
}
