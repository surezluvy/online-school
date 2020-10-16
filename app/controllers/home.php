<?php 

class Home extends Controller{

	public function index(){
		$data['babMtk'] = $this->model('homeModel')->babMtk();
		$data['babBi'] = $this->model('homeModel')->babBi();
		$data['jumlahGuru'] = $this->model('homeModel')->jumlahGuru();
		$data['jumlahSiswa'] = $this->model('homeModel')->jumlahSiswa();
		$data['jumlahDiskusiMtk'] = '13';
		$data['mapel'] = $this->model('homeModel')->getMapel();
		$data['page'] = '';

		$this->view('templates/home/header', $data);
		$this->view('templates/home/switcher', $data);
		$this->view('home/index', $data);
		$this->view('templates/home/footer');
	}

	public function bab($id){
		$data['bab'] = $this->model('homeModel')->babById($id);
		$data['pilihan'] = $this->model('homeModel')->pilihan($id);
		$data['guru'] = $this->model('homeModel')->guruBab();
		$data['siswa'] = $this->model('homeModel')->siswaBab($id);
		$data['page'] = 1;

		$this->view('templates/home/header', $data);
		$this->view('home/bab', $data);
		$this->view('templates/home/footer');
	}
}