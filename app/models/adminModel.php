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

	// =========================================================================================

	public function tambahSiswa($data){
		$query = "INSERT INTO siswa(poin, tanggal_daftar, nama_lengkap, username, email, password, jenjang_kelas)
					VALUES
					(:poin, :tanggal_daftar, :nama_lengkap, :username, :email, :password, :jenjang_kelas)";
		$this->db->query($query);
		$this->db->bind('poin', $data['poin']);
		$this->db->bind('tanggal_daftar', $data['tanggal_daftar']);
		$this->db->bind('nama_lengkap', $data['nama_lengkap']);
		$this->db->bind('username', $data['username']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('password', $data['password']);
		$this->db->bind('jenjang_kelas', $data['jenjang_kelas']);

		$this->db->execute();

		return $this->db->rowCount();
	}
}