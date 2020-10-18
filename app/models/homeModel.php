<?php

class homeModel{

	private $tableMapel = 'mapel';
	private $tableGuru = 'guru';
	private $tableKelas = 'kelas';
	private $tableSiswa = 'siswa';
	private $tableBab = 'bab';
	private $tableSub = 'sub_bab';
	private $tablePilihan = 'pilihan_bab';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getMapel(){
		$this->db->query('SELECT * FROM ' . $this->tableMapel);
		return $this->db->resultSet();
	}

	public function jumlahGuru(){
		$this->db->query("SELECT COUNT(*) FROM ". $this->tableGuru);
		return $this->db->single();
	}

	public function jumlahSiswa(){
		$this->db->query("SELECT COUNT(*) FROM ". $this->tableSiswa);
		return $this->db->single();
	}

	public function babMtk(){
		$this->db->query("SELECT * FROM ". $this->tableBab ." INNER JOIN ". $this->tableKelas ." ON ". $this->tableBab .".jenjang_kelas = ". $this->tableKelas .".jenjang_kelas INNER JOIN mapel ON bab.id_mapel = mapel.id_mapel WHERE bab.id_mapel = 1");
		return $this->db->resultSet();
	}

	public function babBi(){
		$this->db->query("SELECT * FROM ". $this->tableBab ." INNER JOIN ". $this->tableKelas ." ON ". $this->tableBab .".jenjang_kelas = ". $this->tableKelas .".jenjang_kelas INNER JOIN mapel ON bab.id_mapel = mapel.id_mapel WHERE bab.id_mapel = 2");
		return $this->db->resultSet();
	}

	public function babById($idBab){
		$this->db->query("SELECT * FROM ". $this->tableBab ." WHERE id_bab = $idBab");
		return $this->db->single();
	}

	public function pilihan($idBab){
		$this->db->query("SELECT COUNT(*) FROM ". $this->tablePilihan ." WHERE id_bab = $idBab");
		return $this->db->single();
	}

	public function guruBab($idMapel){
		$this->db->query("SELECT * FROM ". $this->tableGuru ." INNER JOIN mapel ON guru.id_mapel = mapel.id_mapel WHERE guru.id_mapel = $idMapel");
		return $this->db->single();
	}

	public function siswaBab($idBab){
		$this->db->query("SELECT * FROM ". $this->tableSiswa ." INNER JOIN ". $this->tablePilihan ." ON ". $this->tableSiswa .".id_siswa = ". $this->tablePilihan .".id_siswa WHERE id_bab = $idBab");
		return $this->db->resultSet();
	}

	public function tagByKelas($idKelas){
		$this->db->query("SELECT * FROM ". $this->tableBab ." INNER JOIN ". $this->tableKelas ." ON ". $this->tableBab .".jenjang_kelas = ". $this->tableKelas .".jenjang_kelas INNER JOIN mapel ON bab.id_mapel = mapel.id_mapel WHERE id_kelas = $idKelas");
		return $this->db->resultSet();
	}

	public function tagByMapel($idKelas, $idMapel){
		$this->db->query("SELECT * FROM bab INNER JOIN mapel ON bab.id_mapel = mapel.id_mapel WHERE mapel.id_mapel = $idMapel");
		return $this->db->resultSet();
	}

	public function profil($idSiswa, $idBab){
		$this->db->query("SELECT * FROM pilihan_bab INNER JOIN bab ON pilihan_bab.id_bab = bab.id_bab 
INNER JOIN mapel ON bab.id_mapel = mapel.id_mapel
INNER JOIN siswa ON pilihan_bab.id_siswa = siswa.id_siswa WHERE siswa.id_siswa = $idSiswa AND bab.id_bab = $idBab");
		return $this->db->single();
	}

	public function profilBab($idSiswa, $idBab){
		$this->db->query("SELECT * FROM pilihan_bab INNER JOIN bab ON pilihan_bab.id_bab = bab.id_bab 
INNER JOIN mapel ON bab.id_mapel = mapel.id_mapel
INNER JOIN siswa ON pilihan_bab.id_siswa = siswa.id_siswa WHERE siswa.id_siswa = $idSiswa");
		return $this->db->resultSet();
	}
}