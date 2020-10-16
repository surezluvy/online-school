<?php

class Flasher{

	// fungsi yang berisi pesan, aksi(create dll) dan tipe(class bootstrap warna misal success, danger)
	public static function setFlash($pesan,  $tipe){
		$_SESSION['flash'] = [
			'pesan' => $pesan,
			'tipe' => $tipe
		];
	}

	public static function flash(){
		if(isset($_SESSION['flash'])){
			echo '<div class="uk-alert-'. $_SESSION['flash']['tipe'] .'" uk-alert>
				    <a class="uk-alert-close" uk-close></a>
				    <p>' . $_SESSION['flash']['pesan'] . '</p>
				</div>';
			// Untuk menampilkan tapilan pesan sekali/setelah session di hapus
			unset($_SESSION['flash']);
		}
	}
}