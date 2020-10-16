<?php

class homeModel{

	private $tableMapel = 'mapel';
	private $tableGuru = 'guru';
	private $tableKelas = 'kelas';
	private $tableSiswa = 'siswa';
	private $tablePilihan = 'pilihan_mapel';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getMapel(){
		$this->db->query('SELECT * FROM ' . $this->tableMapel);
		return $this->db->resultSet();
	}

	// ===========================================================================================================

	public function getSemuaGuru(){
		$this->db->query('SELECT * FROM (('. $this->tableGuru .'
			INNER JOIN '. $this->tableMapel .' ON '. $this->tableGuru .'.id_mapel = '. $this->tableMapel .'.id_mapel)
			INNER JOIN '. $this->tableKelas .' ON '. $this->tableGuru .'.id_kelas = '. $this->tableKelas .'.id_kelas);');
		return $this->db->resultSet();
	}

	public function jumlahGuruMtk(){
		$this->db->query("SELECT COUNT(*) FROM ". $this->tableGuru ." WHERE nama_mapel = 'Matematika' AND jenjang_kelas = 'SD'");
		return $this->db->single();
	}

	public function jumlahSiswaMtk(){
		$this->db->query("SELECT COUNT(*) FROM ". $this->tablePilihan ." WHERE nama_mapel = 'Matematika' AND jenjang_kelas = 'SD'");

	public function jumlahGuru(){
		$this->db->query("SELECT COUNT(*) FROM ". $this->tableGuru);
		return $this->db->single();
	}

	// ===========================================================================================================

	public function jumlahSiswa(){
		$this->db->query("SELECT COUNT(*) FROM ". $this->tableSiswa);
		return $this->db->single();
	}

}