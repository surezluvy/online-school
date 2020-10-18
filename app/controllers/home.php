<?php 
class Home extends Controller{

	public function index(){
		$data['color1'] = "";
		$data['color2'] = "";

		$data['babMtk'] = $this->model('homeModel')->babMtk();
		$data['babBi'] = $this->model('homeModel')->babBi();
		$data['jumlahGuru'] = $this->model('homeModel')->jumlahGuru();
		$data['jumlahSiswa'] = $this->model('homeModel')->jumlahSiswa();
		$data['jumlahDiskusiMtk'] = '13';
		$data['mapel'] = $this->model('homeModel')->getMapel();
		$data['page'] = '';
		$data['byKelas'] = '';

		$this->view('templates/home/header', $data);
		$this->view('templates/home/switcher', $data);
		$this->view('home/index', $data);
		$this->view('templates/home/footer');
	}

	public function bab($idMapel, $idBab){
		$data['color1'] = "";
		$data['color2'] = "";

		$data['bab'] = $this->model('homeModel')->babById($idBab);
		$data['pilihan'] = $this->model('homeModel')->pilihan($idBab);
		$data['guru'] = $this->model('homeModel')->guruBab($idMapel);
		$data['siswa'] = $this->model('homeModel')->siswaBab($idBab);
		$data['page'] = 'bab';

		$this->view('templates/home/header', $data);
		$this->view('home/bab', $data);
		$this->view('templates/home/footer');
	}

	public function tag($idKelas, $idMapel){
		$data['color1'] = "style='color:#3e474f'";
		$data['color2'] = "style='color:#728386'";

		$data['bab'] = $this->model('homeModel')->babById($idKelas);
		$data['tagByKelas'] = $this->model('homeModel')->tagByKelas($idKelas);
		$data['tagByMapel'] = $this->model('homeModel')->tagByMapel($idKelas, $idMapel);
		$data['byKelas'] = $idKelas;

		$this->view('templates/home/header', $data);
		$this->view('home/tag', $data);
		$this->view('templates/home/footer');
	}

	public function profil($idSiswa, $idBab){
		$data['color1'] = "style='color:#3e474f'";
		$data['color2'] = "style='color:#728386'";

		$data['profil'] = $this->model('homeModel')->profil($idSiswa, $idBab);
		$data['profilBab'] = $this->model('homeModel')->profilBab($idSiswa, $idBab);

		$this->view('templates/home/header', $data);
		$this->view('home/profil', $data);
		$this->view('templates/home/footer');
	}
}