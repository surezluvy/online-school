<?php 

class Home extends Controller{

	public function index(){

		$data['judul'] = 'Matematika';
		$data['deskripsi'] = 'Merupakan mata pelajaran wajib pada jenjang SD.';
		$data['jumlahGuru'] = '11';
		$data['jumlahSiswa'] = '17';
		$data['jumlahDiskusi'] = '13';
		
		$this->view('templates/home/header', $data);
		$this->view('home/index');
		$this->view('templates/home/footer');
	}
}