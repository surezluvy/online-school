<?php 
class Admin extends Controller{

	public function index(){
		$data['bagian'] = '';

		$data['jumlahBab'] = $this->model('adminModel')->jumlahBab();
		$data['jumlahSiswa'] = $this->model('adminModel')->jumlahSiswa();
		$data['jumlahGuru'] = $this->model('adminModel')->jumlahGuru();

		$data['siswaTerbaru'] = $this->model('adminModel')->getSiswaTerbaru();

		$this->view('templates/admin/header', $data);
		$this->view('admin/index', $data);
		$this->view('templates/admin/footer');
	}

	// ===============================================================================================

	public function siswa(){
		$data['bagian'] = 'Siswa';

		$data['siswa'] = $this->model('adminModel')->getAllSiswa();

		$this->view('templates/admin/header', $data);
		$this->view('admin/siswa/index', $data);
		$this->view('templates/admin/footer');
	}

	public function tambahSiswa(){

		if ($this->model('adminModel')->tambahSiswa($_POST) > 0) {
			Flasher::setFlash('Berhasil menambahkan data siswa.', 'primary');
			header('Location: ' . BASEURL . '/admin/siswa/index');
			exit;
		} else{
			Flasher::setFlash('Gagal menambahkan data siswa!', 'warning');
		}
	}

	public function editSiswa($id){
		$data['bagian'] = 'Edit siswa';

		$data['siswa'] = $this->model('adminModel')->getSiswaById($id);

		$this->view('templates/admin/header', $data);
		$this->view('admin/siswa/editSiswa', $data);
		$this->view('templates/admin/footer');
	}

	public function prosesEditSiswa(){
		if ($this->model('adminModel')->editSiswa($_POST) > 0) {
			Flasher::setFlash('Berhasil update data siswa.', 'primary');
			header('Location: ' . BASEURL . '/admin/siswa/index');
			exit;
		} else{
			Flasher::setFlash('Gagal update data siswa!', 'warning');
		}
	}

	public function hapusSiswa($id){
		if ($this->model('adminModel')->hapusSiswa($id) > 0) {
			Flasher::setFlash('Berhasil menghapus data siswa.', 'primary');
			header('Location: ' . BASEURL . '/admin/siswa/index');
			exit;
		} else{
			Flasher::setFlash('Gagal menghapus data siswa!', 'warning');
		}
	}

	public function cariSiswa(){
		$data['bagian'] = 'Siswa';

		$data['siswa'] = $this->model('adminModel')->cariSiswa();

		$this->view('templates/admin/header', $data);
		$this->view('admin/siswa/index', $data);
		$this->view('templates/admin/footer');
	}

	// ===============================================================================================

	public function guru(){
		$data['bagian'] = 'Guru';

		$data['guru'] = $this->model('adminModel')->getAllGuru();

		$this->view('templates/admin/header', $data);
		$this->view('admin/guru/index', $data);
		$this->view('templates/admin/footer');
	}

	public function tambahGuru(){

		if ($this->model('adminModel')->tambahGuru($_POST) > 0) {
			Flasher::setFlash('Berhasil menambahkan data guru.', 'primary');
			header('Location: ' . BASEURL . '/admin/siswa/index');
			exit;
		} else{
			Flasher::setFlash('Gagal menambahkan data guru!', 'warning');
		}
	}

	public function editGuru($id){
		$data['bagian'] = 'Edit guru';

		$data['guru'] = $this->model('adminModel')->getGuruById($id);

		$this->view('templates/admin/header', $data);
		$this->view('admin/guru/editGuru', $data);
		$this->view('templates/admin/footer');
	}

	public function prosesEditGuru(){
		if ($this->model('adminModel')->editGuru($_POST) > 0) {
			Flasher::setFlash('Berhasil update data guru.', 'primary');
			header('Location: ' . BASEURL . '/admin/guru/index');
			exit;
		} else{
			Flasher::setFlash('Gagal update data guru!', 'warning');
		}
	}

	public function hapusGuru($id){
		if ($this->model('adminModel')->hapusGuru($id) > 0) {
			Flasher::setFlash('Berhasil menghapus data guru.', 'primary');
			header('Location: ' . BASEURL . '/admin/guru/index');
			exit;
		} else{
			Flasher::setFlash('Gagal menghapus data guru!', 'warning');
		}
	}

	public function cariGuru(){
		$data['bagian'] = 'Guru';

		$data['guru'] = $this->model('adminModel')->cariGuru();

		$this->view('templates/admin/header', $data);
		$this->view('admin/guru/index', $data);
		$this->view('templates/admin/footer');
	}
}