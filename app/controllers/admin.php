<?php 
class Admin extends Controller{

	public function index(){
		$data['jumlahBab'] = $this->model('adminModel')->jumlahBab();
		$data['jumlahSiswa'] = $this->model('adminModel')->jumlahSiswa();
		$data['jumlahGuru'] = $this->model('adminModel')->jumlahGuru();

		$data['siswaTerbaru'] = $this->model('adminModel')->getSiswaTerbaru();

		$this->view('templates/admin/header', $data);
		$this->view('admin/index', $data);
		$this->view('templates/admin/footer');
	}

	public function siswa(){

		$data['siswa'] = $this->model('adminModel')->getAllSiswa();

		$this->view('templates/admin/header', $data);
		$this->view('admin/user', $data);
		$this->view('templates/admin/footer');
	}

	public function tambahSiswa(){

		if ($this->model('adminModel')->tambahSiswa($_POST) > 0) {
			Flasher::setFlash('Berhasil', 'ditambahkan', 'primary');
			header('Location: ' . BASEURL . '/admin/siswa');
			exit;
		} else{
			Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
		}
	}
}