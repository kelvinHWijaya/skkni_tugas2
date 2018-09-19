<?php
ini_set("allow_url_fopen", 1);
/**
* 
*/
class Info extends CI_Controller {
	
	function __construct()	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model("M_public");
	}

	function index() {
		$data["peserta"] = $this->M_public->get_all_peserta();
		$this->load->view('public/front',$data);
	}

	function tambah_peserta() 
	{	
		$nama = $this->input->post('nama');
		$nik = $this->input->post('nik');
		$hp = $this->input->post('hp');
		$email = $this->input->post('email');
		$skema = $this->input->post('skema');
		$tempat = $this->input->post('tempat');
		$rekomendasi = $this->input->post('rekomendasi');
		$tanggal_terbit_sertifikat = $this->input->post('tanggal_terbit_sertifikat');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$organisasi = $this->input->post('organisasi');

		$data = array
		(
		'nama' => $nama,
		'nik' => $nik,
		'hp' => $hp,
		'email' => $email,
		'skema_sertifikasi' => $skema,
		'tempat_uji_kompetensi' => $rekomendasi,
		'tanggal_terbit_sertifikat' => $tanggal_terbit_sertifikat,
		'tanggal_lahir' => $tanggal_lahir,
		'organisasi' => $organisasi,
		);

		$this->M_public->insert_data($data);
		redirect('Info/');
	}


	

} ?>