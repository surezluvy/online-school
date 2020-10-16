<?php 

class Home extends Controller{

	public function index(){

		$data['jumlahGuruMtk'] = $this->model('homeModel')->jumlahGuruMtk();
		$data['jumlahSiswaMtk'] = $this->model('homeModel')->jumlahSiswaMtk();
		$data['kelas'] = $this->model('homeModel')->getKelas();

		$data['mapel'] = $this->model('homeModel')->getMapel();

		$data['jumlahGuru'] = $this->model('homeModel')->jumlahGuru();

		$data['jumlahSiswa'] = $this->model('homeModel')->jumlahSiswa();

		$data['jumlahDiskusiMtk'] = '13';
		$data['mapel'] = $this->model('homeModel')->getMapel();
		$this->view('templates/home/header', $data);
		$this->view('templates/home/switcher', $data);
		$this->view('home/index');
		$this->view('templates/home/footer');
	}
}