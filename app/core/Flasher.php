<?php

class Flasher{

	// fungsi yang berisi pesan, aksi(create dll) dan tipe(class bootstrap warna misal success, danger)
	public static function setFlash($pesan, $aksi, $tipe){
		$_SESSION['flash'] = [
			'pesan' => $pesan,
			'aksi' => $aksi,
			'tipe' => $tipe
		];
	}

	public static function flash(){
		if(isset($_SESSION['flash'])){
			echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
				  Data Mahasiswa <strong>' . $_SESSION['flash']['pesan'] . ' </strong>' . $_SESSION['flash']['aksi'] . '
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>';
			// Untuk menampilkan tapilan pesan sekali/setelah session di hapus
			unset($_SESSION['flash']);
		}
	}
}