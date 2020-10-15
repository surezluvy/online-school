<?php 

// extends agar class Home merupakan child class dari class Controller, sehingga fungsi view dapat digunakan
class Home extends Controller{ 
	// Method default
	public function index(){
		// Memanggil view
		// method view ada di code/Controller.php

		$data['judul'] = 'Home';
		// Memanggil model lalu memanggil method getUser()
		$data['nama'] = $this->model('User_model')->getUser();
		// Memanggil template header dan footer
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
}