<?php 
	/**
	 * 
	 */
	// namespace app\DB;
	// require_once('../app/db.php');
	class Count
	{
		private $db;
		
		function __construct()
		{
			try {
				$this->db = new PDO('mysql:host=localhost;dbname=ppi','root','');
			} catch (PDOException $e) {
				echo $e->getmessage();
			}
		}
		public function ta()
		{
			$ta = $this->db->prepare("SELECT count(ta) as jumlah FROM tahunakademik");
			$ta->execute();
			$c = $ta->rowcount();
			//
			if($c> 0){
				foreach($ta as $t){
					$hasil = $t['jumlah'];
				}
				return $hasil;
			}
		}
		public function konsen()
		{
			$ta = $this->db->prepare("SELECT count(konsen) as jumlah FROM konsen");
			$ta->execute();
			$c = $ta->rowcount();
			//
			if($c> 0){
				foreach($ta as $t){
					$hasil = $t['jumlah'];
				}
				return $hasil;
			}
		}
		public function jenjang()
		{
			$ta = $this->db->prepare("SELECT count(jenjang) as jumlah FROM jenjang");
			$ta->execute();
			$c = $ta->rowcount();
			//
			if($c> 0){
				foreach($ta as $t){
					$hasil = $t['jumlah'];
				}
				return $hasil;
			}
		}
		public function gelar()
		{
			$ta = $this->db->prepare("SELECT count(gelar) as jumlah FROM gelar");
			$ta->execute();
			$c = $ta->rowcount();
			//
			if($c> 0){
				foreach($ta as $t){
					$hasil = $t['jumlah'];
				}
				return $hasil;
			}
		}
		public function univ()
		{
			$ta = $this->db->prepare("SELECT count(univ) as jumlah FROM univ");
			$ta->execute();
			$c = $ta->rowcount();
			//
			if($c> 0){
				foreach($ta as $t){
					$hasil = $t['jumlah'];
				}
				return $hasil;
			}
		}
		public function kelas()
		{
			$ta = $this->db->prepare("SELECT count(kelas) as jumlah FROM kelas");
			$ta->execute();
			$c = $ta->rowcount();
			//
			if($c> 0){
				foreach($ta as $t){
					$hasil = $t['jumlah'];
				}
				return $hasil;
			}
		}
		public function kampus()
		{
			$ta = $this->db->prepare("SELECT count(kampus) as jumlah FROM kampus");
			$ta->execute();
			$c = $ta->rowcount();
			//
			if($c> 0){
				foreach($ta as $t){
					$hasil = $t['jumlah'];
				}
				return $hasil;
			}
		}
		public function akses()
		{
			$ta = $this->db->prepare("SELECT count(role) as jumlah FROM role");
			$ta->execute();
			$c = $ta->rowcount();
			//
			if($c> 0){
				foreach($ta as $t){
					$hasil = $t['jumlah'];
				}
				return $hasil;
			}
		}
		public function warga()
		{
			$ta = $this->db->prepare("SELECT count(warga) as jumlah FROM kewarganegaraan");
			$ta->execute();
			$c = $ta->rowcount();
			//
			if($c> 0){
				foreach($ta as $t){
					$hasil = $t['jumlah'];
				}
				return $hasil;
			}
		}
		public function faith()
		{
			$ta = $this->db->prepare("SELECT count(agama) as jumlah FROM keyakinan");
			$ta->execute();
			$c = $ta->rowcount();
			//
			if($c> 0){
				foreach($ta as $t){
					$hasil = $t['jumlah'];
				}
				return $hasil;
			}
		}	
		public function gender()
		{
			$ta = $this->db->prepare("SELECT count(gender) as jumlah FROM gender");
			$ta->execute();
			$c = $ta->rowcount();
			//
			if($c> 0){
				foreach($ta as $t){
					$hasil = $t['jumlah'];
				}
				return $hasil;
			}
		}
		public function nikah()
		{
			$ta = $this->db->prepare("SELECT count(nikah) as jumlah FROM pernikahan");
			$ta->execute();
			$c = $ta->rowcount();
			//
			if($c> 0){
				foreach($ta as $t){
					$hasil = $t['jumlah'];
				}
				return $hasil;
			}
		}
	}
 ?>