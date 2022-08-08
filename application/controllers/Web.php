<?php
defined('BASEPATH') or exit('No direct script access allowed');

class web extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('M_berita');
	}
	public function index()
	{
		$ip    = $this->input->ip_address(); 
		$date  = date("Y-m-d"); 
		$waktu = time(); 
		$timeinsert = date("Y-m-d H:i:s");
		$s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
		$ss = isset($s) ? ($s) : 0;
		if ($ss == 0) {
			$this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
		}
		else {
			$this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
		}
		$pengunjunghariini  = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows(); 
		$dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
		$totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0; 
		$bataswaktu = time() - 300;
		$pengunjungonline  = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows(); 
		$data['pengunjunghariini'] = $pengunjunghariini;
		$data['totalpengunjung'] = $totalpengunjung;
		$data['pengunjungonline'] = $pengunjungonline;
		$data['berita'] = $this->db->query("SELECT berita.judul,berita.id,kategori.kategori,berita.gambar FROM berita LEFT JOIN kategori ON berita.id_kategori=kategori.id WHERE berita.id ORDER BY berita.id DESC LIMIT 6")->result();
		$data['hover'] = $this->db->query("SELECT berita.id,berita.judul,kategori.kategori,berita.gambar FROM berita LEFT JOIN kategori ON berita.id_kategori=kategori.id WHERE berita.id ORDER BY berita.id DESC LIMIT 1")->result();
		$data['artikel'] = $this->db->query("SELECT berita.id,berita.judul,kategori.kategori,berita.gambar FROM berita LEFT JOIN kategori ON berita.id_kategori=kategori.id WHERE kategori.kategori='Artikel' ORDER BY berita.id DESC LIMIT 3")->result();
		$data['kegiatan'] = $this->db->query("SELECT berita.id,berita.isi,berita.judul,kategori.kategori,berita.gambar FROM berita LEFT JOIN kategori ON berita.id_kategori=kategori.id WHERE kategori.kategori='Kegiatan Santri' ORDER BY berita.id DESC")->result();
		$data['galery'] = $this->db->get('galery')->result();
		$data['benner'] = $this->db->query("SELECT * FROM benner WHERE id ORDER BY id DESC")->result();
		$this->load->view('web/page/index', $data);
	}
	public function modul()
	{
		$data['modul'] = $this->db->query("SELECT * FROM modul WHERE id ORDER BY id DESC")->result();
		$this->load->view('web/page/modul', $data);
	}
	public function guru()
	{
		$data['guru'] = $this->db->query("SELECT * FROM guru WHERE id ORDER BY id DESC")->result();
		$this->load->view('web/page/guru', $data);
	}
	public function siswa()
	{
		$data['siswa'] = $this->db->query("SELECT * FROM siswa WHERE id ORDER BY id DESC")->result();
		$this->load->view('web/page/siswa', $data);
	}
	public function sejarah()

	{
		
		$data['berita'] = $this->db->query("SELECT * FROM berita WHERE id ORDER BY id LIMIT 3")->result();
		$data['sejarah'] = $this->db->query("SELECT * FROM sejarah")->result();
		$this->load->view('web/page/sejarah', $data);
	}
	public function beasiswa()

	{
		
		$data['berita'] = $this->db->query("SELECT * FROM berita WHERE id ORDER BY id LIMIT 3")->result();
		$data['berita_bea'] = $this->db->query("SELECT berita.judul,berita.created_at,berita.isi,berita.id,kategori.kategori,berita.gambar FROM berita LEFT JOIN kategori ON berita.id_kategori=kategori.id WHERE kategori.kategori='Beasiswa' ORDER BY berita.id DESC LIMIT 6")->result();
		
		$this->load->view('web/page/beasiswa', $data);
	}
	public function berita()
	{
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';
		$this->load->library('pagination');
		$config['base_url'] = base_url() . 'index.php/Web/berita/';
		$jumlah_data = $this->M_berita->jumlah_data();
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 2;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['berita'] = $this->M_berita->data($config['per_page'], $from);
		$data['kategori'] = $this->db->query("SELECT * FROM kategori")->result();
		$data['post'] = $this->db->query("SELECT * FROM berita WHERE id ORDER BY id DESC LIMIT 7")->result();
		$this->load->view('web/page/berita', $data);
	}
	function modul_download($id)
	{
		$data = $this->db->get_where('modul', ['id' => $id])->row();
		force_download('upload/modul/' . $data->file, NULL);
		redirect(base_url("Web/modul"));
	}
	function detail_berita($id)
	{
		$data['kategori'] = $this->db->query("SELECT * FROM kategori")->result();
		$data['post'] = $this->db->query("SELECT * FROM berita WHERE id ORDER BY id DESC LIMIT 7")->result();
		$data['detail'] = $this->db->query("SELECT * FROM berita WHERE id='$id'")->result();
		$this->load->view('web/page/berita_detail', $data);
	
	}
	function visi_misi(){
		$data['berita'] = $this->db->query("SELECT * FROM berita WHERE id ORDER BY id LIMIT 3")->result();
		$data['visi_misi'] = $this->db->get('visi_misi')->result();
		$this->load->view("web/page/visi_misi",$data);
	}
	function galery(){
		$data['berita'] = $this->db->query("SELECT * FROM berita WHERE id ORDER BY id LIMIT 3")->result();
		$data['galery'] = $this->db->get('galery')->result();
		$this->load->view("web/page/galery",$data);
	}
	function vidio(){
		$data['berita'] = $this->db->query("SELECT * FROM berita WHERE id ORDER BY id LIMIT 3")->result();
		$data['vidio'] = $this->db->get('vidio')->result();
		$this->load->view("web/page/vidio",$data);
	}
}
