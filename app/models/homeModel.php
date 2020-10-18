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

	public function babById($id){
		$this->db->query("SELECT * FROM ". $this->tableBab ." WHERE id_bab = $id");
		return $this->db->single();
	}

	public function pilihan($id){
		$this->db->query("SELECT COUNT(*) FROM ". $this->tablePilihan ." WHERE id_bab = $id");
		return $this->db->single();
	}

	public function guruBab(){
		$this->db->query("SELECT * FROM ". $this->tableGuru ." WHERE mengajar_mapel = 'Matematika'");
		return $this->db->single();
	}

	public function siswaBab($id){
		$this->db->query("SELECT * FROM ". $this->tableSiswa ." INNER JOIN ". $this->tablePilihan ." ON ". $this->tableSiswa .".id_siswa = ". $this->tablePilihan .".id_siswa WHERE id_bab = $id");
		return $this->db->resultSet();
	}

	public function tagByKelas($idKelas){
		$this->db->query("SELECT * FROM ". $this->tableBab ." INNER JOIN ". $this->tableKelas ." ON ". $this->tableBab .".jenjang_kelas = ". $this->tableKelas .".jenjang_kelas WHERE id_kelas = $idKelas");
		return $this->db->resultSet();
	}

	public function tagByMapel($idMapel){
		$this->db->query("SELECT * FROM ". $this->tableBab ." INNER JOIN ". $this->tableMapel ." ON ". $this->tableBab .".jenjang_kelas = ". $this->tableMapel .".jenjang_kelas WHERE id_mapel = $idMapel");
		return $this->db->resultSet();
	}
}