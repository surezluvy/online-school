<?php 

class Home extends Controller{

	public function index(){

		$data['jumlahGuruMtk'] = $this->model('homeModel')->jumlahGuruMtk();
		$data['jumlahSiswaMtk'] = $this->model('homeModel')->jumlahSiswaMtk();
		$data['jumlahDiskusiMtk'] = '13';
		$data['mapel'] = $this->model('homeModel')->getMapel();
		$this->view('templates/home/header', $data);
		$this->view('templates/home/switcher', $data);
		$this->view('home/index');
		$this->view('templates/home/footer');
	}
}