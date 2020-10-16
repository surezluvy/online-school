<?php

class adminModel{

	private $db;
	private $tableBab = 'bab';
	private $tableSiswa = 'siswa';
	private $tableGuru = 'guru';

	public function __construct(){
		$this->db = new Database;
	}

	public function jumlahBab(){
		$this->db->query('SELECT COUNT(*) FROM ' . $this->tableBab);
		return $this->db->single();
	}

	public function jumlahSiswa(){
		$this->db->query('SELECT COUNT(*) FROM ' . $this->tableSiswa);
		return $this->db->single();
	}

	public function jumlahGuru(){
		$this->db->query('SELECT COUNT(*) FROM ' . $this->tableGuru);
		return $this->db->single();
	}

	// ========================================================================================
	
	public function getSiswaTerbaru(){
		$this->db->query('SELECT * FROM ' . $this->tableSiswa . ' LIMIT 7');
		return $this->db->resultSet();
	}

	public function getAllSiswa(){
		$this->db->query('SELECT * FROM ' . $this->tableSiswa);
		return $this->db->resultSet();
	}
}