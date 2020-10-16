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
		$this->view('admin/siswa', $data);
		$this->view('templates/admin/footer');
	}

	public function tambahSiswa(){

		if ($this->model('adminModel')->tambahSiswa($_POST) > 0) {
			Flasher::setFlash('Berhasil menambahkan data siswa.', 'primary');
			header('Location: ' . BASEURL . '/admin/siswa');
			exit;
		} else{
			Flasher::setFlash('Gagal menambahkan data siswa!', 'warning');
		}
	}

	public function editSiswa($id){

		$data['siswa'] = $this->model('adminModel')->getSiswaById($id);

		$this->view('templates/admin/header', $data);
		$this->view('admin/editSiswa', $data);
		$this->view('templates/admin/footer');
	}

	public function prosesEditSiswa(){
		if ($this->model('adminModel')->editSiswa($_POST) > 0) {
			Flasher::setFlash('Berhasil update data siswa.', 'primary');
			header('Location: ' . BASEURL . '/admin/siswa');
			exit;
		} else{
			Flasher::setFlash('Gagal update data siswa!', 'warning');
		}
	}

	public function hapusSiswa($id){
		if ($this->model('adminModel')->hapusSiswa($id) > 0) {
			Flasher::setFlash('Berhasil menghapus data siswa.', 'primary');
			header('Location: ' . BASEURL . '/admin/siswa');
			exit;
		} else{
			Flasher::setFlash('Gagal menghapus data siswa!', 'warning');
		}
	}
}