<?php

class About extends Controller{
	// Method default
	public function index($nama = 'Wahyu', $pekerjaan = 'Mahasiswa', $umur = '20')
	{	
		// Mengambil data dari parameter lalu dikirimkan ke index
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;

		$data['judul'] = 'About';

		// Memanggil template header dan footer
		// Memanggil $data['judul'] untuk dikirim ke template/header
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}
	public function page(){
		$data['judul'] = 'Page';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}