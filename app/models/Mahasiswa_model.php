<?php

class Mahasiswa_model{

	private $table = 'mahasiswa';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getAllMahasiswa(){
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getMahasiswaById($id){
		// Menggunakan WHERE id=:id untuk mengamankan dari SQL inject, jadi tidak menggunakan php echo $id
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahDataMahasiswa($data){
		$query = "INSERT INTO mahasiswa(nama, kelas, no)
					VALUES
					(:nama, :kelas, :no)";
		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('kelas', $data['kelas']);
		$this->db->bind('no', $data['no']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusDataMahasiswa($id){
		$query = "DELETE FROM mahasiswa WHERE id=$id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function ubahDataMahasiswa($data){
		$query = "UPDATE mahasiswa SET
					nama = :nama, 
					kelas = :kelas, 
					no = :no
				  WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('kelas', $data['kelas']);
		$this->db->bind('no', $data['no']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	// Dikirimkan ke controller masuk ke $data['mhs'] lalu digunakan di index.php
	public function cariDataMahasiswa(){
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%'";
		$this->db->query($query);
		return $this->db->resultSet();
	}
}