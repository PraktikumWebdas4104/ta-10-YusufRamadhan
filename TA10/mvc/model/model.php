<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		function __construct(){
			//buatlah koneksi seperti modul 9 kemarin
			$this->conn = mysqli_connect('localhost','root','','jurnal10');
		}

		function execute($query){
			return $this->conn->query($query);
		}

		function selectAll(){
			//query select*from
			$query = "SELECT * FROM mahasiswa";
			return $this->execute($query);
		}

		function selectMhs($nim){
			//query select mahasiswa berdasarkan nim
			$query = "SELECT * FROM mahasiswa WHERE NIM = $nim";
			return $this->execute($query);
		}

		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi,$genre, $place){
			//query update nim, nama, angkatan, fakultas, prodi
			$this->Genre = "";
			if (!empty($genre)) {
					foreach ($genre as $value) {
						$Genre .= $value.", ";
					}
				}
			$this->Place = "";
			if (!empty($place)) {
					foreach ($place as $value) {
						$Place .= $value.", ";
					}
				}
			$query = "UPDATE mahasiswa SET Nama = '$nama', Angkatan = $angkatan, Fakultas = '$fakultas', Program = '$prodi', Genre = '$Genre', Travel = '$Place' WHERE NIM = $nim";
			return $this->execute($query);
		}

		function deleteMhs($nim){
			//query delete berdasarkan nim
			$query = "DELETE FROM mahasiswa WHERE NIM = $nim";
			return $this->execute($query);
		}

		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi, $genre, $place){
			//query insert nim,nama, angkatan, fakultas, prodi
			$this->Genre = "";
			if (!empty($genre)) {
					foreach ($genre as $value) {
						$Genre .= $value.", ";
					}
				}
			$this->Place = "";
			if (!empty($place)) {
					foreach ($place as $value) {
						$Place .= $value.", ";
					}
				}
			$query = "INSERT INTO mahasiswa(NIM, Nama, Angkatan, Fakultas, Program, Genre, Travel) VALUES('$nim', '$nama', '$angkatan', '$fakultas', '$prodi', '$Genre', '$Place')";
			return $this->execute($query);
		}

		function fetch($var){
			return mysqli_fetch_array($var);
		}

		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>
