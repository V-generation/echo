<?php 
	/**
	 * 
	 */
	class admin
	{
		private $db;
		function __construct()
		{
			try {
				// $this->db = new PDO('mysql:host=portal.stieppi.ac.id;dbname=k9824259_siakad','k9824259_dst','4dm1n*123#OK');
				// $this->db = new PDO('mysql:host=localhost;dbname=k9824259_siakad','root','');
				$this->db = new PDO('mysql:host=localhost;dbname=ppi','root','');
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             	$this->db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES'utf8'");
			} catch (PDOException $e) {
				echo $e->getmessage();
			}
		}
		public function user($un, $em)
		{
			$query = "SELECT * FROM user WHERE un = '$un' AND em = '$em'";
			$this->db->prepare($query);
			$this->db->execute();
			$data = $this->db;
			foreach($data as $d){
				$result[] = $d;
			}
			return $result;
		}
		public function getDosen()
		{
			$queryAdmin = $this->db->prepare("SELECT COUNT(nama) as dosen FROM dosen WHERE is_delete = 'N'");
			$queryAdmin->execute();
			$data = $queryAdmin;
			foreach($data as $dA){
				$resultAdmin[] = $dA;
			}
			return $resultAdmin;	
		}
		public function getMhs()
		{
			$queryAdmin = $this->db->prepare("SELECT COUNT(nama) as mhs FROM m_mahasiswa");
			$queryAdmin->execute();
			$data = $queryAdmin;
			foreach($data as $dA){
				$resultAdmin[] = $dA;
			}
			return $resultAdmin;	
		}
		public function getDsn()
		{
			$dozen = $this->db->prepare("SELECT * FROm dosen WHERE is_delete = 'N'");
			$dozen->execute();
			$data = $dozen;
			$no = 1;
			// validasi data
			$check = $data->rowcount();
			if($check > 0){
				while($dA = $data->fetch(PDO::FETCH_ASSOC)){
					$dsId = $dA['id_dosen_jabatan'];
					$jab = $this->db->prepare("SELECT * FROM jabatan_dosen WHERE id_dosen_jabatan = '$dsId'");
					$jab->execute();
					while($dd = $jab->fetch(PDO::FETCH_ASSOC)){
						$nID = $dA['nip'];
						$nip = $this->db->prepare("SELECT * FROM m_dosen_pendidikan WHERE nip = '$nID'");
						$nip->execute();
						while($n = $nip->fetch(PDO::FETCH_ASSOC)){
					echo 	"
								<tr>
	                                <td>".$no++."</td>
	                                <td>{$dA['nama']}</td>
	                                <td>{$dd['nama']}</td>
	                                <td class='text-center'>{$n['jenjang']}</td>
	                                <td class='text-center'>
	                                  <a href='inc/editDosen.php?edit&id={$dA['id_dosen']}'><span class='fa fa-edit'></span></a>
	                                </td>
	                              </tr>
							";
						}
					}
				}
			}else{
				echo "<p class='alert alert-danger'>Data tidak ditemukan!</p>";
			}
		}
		public function getDsnFull()
		{
			$dozen = $this->db->prepare("SELECT * FROm dosen WHERE is_delete = 'N'");
			$dozen->execute();
			$data = $dozen;
			$no = 1;
			// validasi data
			$check = $data->rowcount();
			if($check > 0){
				while($dA = $data->fetch(PDO::FETCH_ASSOC)){
					$dsId = $dA['id_dosen_jabatan'];
					$jab = $this->db->prepare("SELECT * FROM jabatan_dosen WHERE id_dosen_jabatan = '$dsId'");
					$jab->execute();
					while($dd = $jab->fetch(PDO::FETCH_ASSOC)){
						$nID = $dA['nip'];
						$nip = $this->db->prepare("SELECT * FROM m_dosen_pendidikan WHERE nip = '$nID'");
						$nip->execute();
						while($n = $nip->fetch(PDO::FETCH_ASSOC)){
					echo 	"
								<tr>
	                                <td>".$no++."</td>
	                                <td>{$dA['nama']}</td>
	                                <td>{$dd['nama']}</td>
	                                <td class='text-center'>
	                                  <a href='inc/editDosen.php?edit&id={$dA['id_dosen']}'><span class='fa fa-edit'></span></a>
	                                </td>
	                              </tr>
							";
						}
					}
				}
			}else{
				echo "<p class='alert alert-danger'>Data tidak ditemukan!</p>";
			}
		}
		public function getMahasiswa()
		{
			$mhs = $this->db->prepare("SELECT * FROm m_mahasiswa WHERE is_delete = 'N'");
			$mhs->execute();
			$data = $mhs;
			$no = 1;
			$check = $data->rowcount();
			if($check > 0){
				while($shm = $data->fetch(PDO::FETCH_ASSOC)){
					$dsId = $shm['nim'];
					$jab = $this->db->prepare("SELECT * FROM m_mahasiswa_sekolah WHERE nim = '$dsId'");
					$jab->execute();
					while($dd = $jab->fetch(PDO::FETCH_ASSOC)){
						$nID = $shm['nim'];
						$nip = $this->db->prepare("SELECT * FROM m_mahasiswa_ortu WHERE nim = '$nID'");
						$nip->execute();
						while($n = $nip->fetch(PDO::FETCH_ASSOC)){

					echo 	"
								<tr>
	                                <td>".$no++."</td>
	                                <td>{$shm['nama']}</td>
	                                <td>{$dd['asal_sekolah']}</td>
	                                <td class='text-center'>";
	                                if($shm['id_prodi'] == 612){
	                                	echo "Manajemen";
	                                }else{echo "Akuntansi";}
								echo "</td>
	                                <td class='text-center'>
	                                  <a href='inc/editMahasiswa.php?edit&id={$shm['id_mahasiswa']}'><span class='fa fa-edit'></span></a>
	                                </td>
	                              </tr>
							";
						}
					}
				}
			}else{
				echo "<p class='alert alert-danger'>Data tidak ditemukan!</p>";
			}	
		}
		public function getMahasiswaFull()
		{
			$mhs = $this->db->prepare("SELECT * FROm m_mahasiswa WHERE is_delete = 'N'");
			$mhs->execute();
			$data = $mhs;
			$no = 1;
			$check = $data->rowcount();
			if($check > 0){
				while($shm = $data->fetch(PDO::FETCH_ASSOC)){
					$dsId = $shm['nim'];
					$jab = $this->db->prepare("SELECT * FROM m_mahasiswa_sekolah WHERE nim = '$dsId'");
					$jab->execute();
					while($dd = $jab->fetch(PDO::FETCH_ASSOC)){
						$nID = $shm['nim'];
						$nip = $this->db->prepare("SELECT * FROM m_mahasiswa_ortu WHERE nim = '$nID'");
						$nip->execute();
						while($n = $nip->fetch(PDO::FETCH_ASSOC)){

					echo 	"
								<tr>
	                                <td>".$no++."</td>
	                                <td>{$shm['nama']}</td>
	                                <td class='text-center'>";
	                                if($shm['id_prodi'] == 612){
	                                	echo "Manajemen";
	                                }else{echo "Akuntansi";}
								echo "</td>
	                                <td class='text-center'>
	                                  <a href='inc/editMahasiswa.php?edit&id={$shm['id_mahasiswa']}'><span class='fa fa-edit'></span></a>
	                                </td>
	                              </tr>
							";
						}
					}
				}
			}else{
				echo "<p class='alert alert-danger'>Data tidak ditemukan!</p>";
			}	
		}
		public function getEditDosen()
		{
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$edit = $this->db->prepare("SELECT * FROM m_dosen WHERE id_dosen = '$id'");
				$edit->execute();
				// validasi data
				$cc = $edit->rowcount();
				if($cc > 0){
					while($data = $edit->fetch(PDO::FETCH_ASSOC)){
						$hasil[] = $data;
					}
					return $hasil;
				}else{
					echo "<script>alert('Tidak ada data yang bisa diedit, harap dicheck kembali datanya.');</script>";
				}
			}
		}
		public function getEditMahasiswa()
		{
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$edit = $this->db->prepare("SELECT * FROM m_mahasiswa WHERE id_mahasiswa = '$id'");
				$edit->execute();
				// validasi data
				$cc = $edit->rowcount();
				if($cc > 0){
					while($data = $edit->fetch(PDO::FETCH_ASSOC)){
						$hasil[] = $data;
					}
					return $hasil;
				}else{
					echo "<p class='alert alert-warning'>Tidak ada data yang bisa diedit, harap dicheck kembali datanya</p>";
				}
			}

		}
		public function getRole()
		{
			$role = $this->db->prepare("SELECT * FROM role WHERE parent = 0");
			$role->execute();
			$c = $role->rowcount();
			if($c > 0){
				foreach($role as $r){
					echo "<option value='{$r['id']}'>{$r['role']}</option>";
				}
			}else{
				echo "Data Role, belum disetting!";
			}
		}
		public function ta()
		{
			$takad = $this->db->prepare("SELECT * FROM tahunakademik");
			$takad->execute();
			$c = $takad->rowcount();
			if($c > 0){
				foreach($takad as $t){
					$hasil[] = $t;
				}
				return $hasil;
			}else{
				echo "<script>alert('Belum ada data Tahun Akademik');</script>";
			}
		}
		public function inputTa()
		{
			if(isset($_POST['simpan-ta'])){
				$a = $_POST['ta'];

				//Check Ganda
				$check = $this->db->prepare("SELECT * FROM tahunakademik WHERE ta = ?");
				$check->bindparam(1, $a, PDO::PARAM_STR);
				$check->execute();
				$te = $check->rowcount();
				// cek ulang
				if($te > 0){
					echo "<script>alert('Maaf, Tahun Akademik Sudah ada!');</script>";
					return false;
				}else{
					try {
						$simpan = $this->db->prepare("INSERT INTO tahunakademik(ta) VALUES(?)");
						$simpan->bindparam(1, $a, PDO::PARAM_STR);
						$simpan->execute();
						if($simpan){
							echo "<script>alert('Tahun Akademik Berhasil dibuat');</script>";
							return true;
						}else{
							echo "<script>alert('Tahun Akademik Gagal dibuat');</script>";
							return false;
						}
					} catch (PDOException $e) {
						echo $e->getmessage();
						
					}
				}
			}
		}
		public function switcheTa()
		{
			if(isset($_POST['switcher'])){
				$status = $_POST['switcher'];
				$sw = $this->db->prepare("UPDATE tahunakademik SET status = ?");
				$sw->bindparam(1, $status, PDO::PARAM_STR);
				$sw->execute();
			}
		}
		public function inputKonsen()
		{
			if(isset($_POST['simpan-konsen'])){
				$a = $_POST['konsen'];

				//Check Ganda
				$check = $this->db->prepare("SELECT * FROM konsen WHERE konsen = ?");
				$check->bindparam(1, $a, PDO::PARAM_STR);
				$check->execute();
				$te = $check->rowcount();
				// cek ulang
				if($te > 0){
					echo "<script>alert('Maaf, Konsentrasi Sudah ada!');</script>";
					return false;
				}else{
					try {
						$simpan = $this->db->prepare("INSERT INTO konsen(konsen) VALUES(?)");
						$simpan->bindparam(1, $a, PDO::PARAM_STR);
						$simpan->execute();
						if($simpan){
							echo "<script>alert('Konsentrasi Berhasil dibuat');</script>";
							return true;
						}else{
							echo "<script>alert('Konsentrasi Gagal dibuat');</script>";
							return false;
						}
					} catch (PDOException $e) {
						echo $e->getmessage();
						
					}
				}
			}
		}
		public function konsen()
		{
			$takad = $this->db->prepare("SELECT * FROM konsen");
			$takad->execute();
			$c = $takad->rowcount();
			if($c > 0){
				foreach($takad as $t){
					$hasil[] = $t;
				}
				return $hasil;
			}else{
				echo "<script>alert('Belum ada data Konsentrasi Program');</script>";
			}
		}
		public function inputGelar()
		{
			if(isset($_POST['simpan-gelar'])){
				$a = $_POST['gelar'];
				$sa = $_POST['sebutan'];

				//Check Ganda
				$check = $this->db->prepare("SELECT * FROM gelar WHERE gelar = ?");
				$check->bindparam(1, $a, PDO::PARAM_STR);
				$check->execute();
				$te = $check->rowcount();
				// cek ulang
				if($te > 0){
					echo "<script>alert('Maaf, Gelar Sudah ada!');</script>";
					return false;
				}else{
					try {
						$simpan = $this->db->prepare("INSERT INTO gelar(gelar, sebutan) VALUES(?)");
						$simpan->bindparam(1, $a, PDO::PARAM_STR);
						$simpan->bindparam(2, $sa, PDO::PARAM_STR);
						$simpan->execute();
						if($simpan){
							echo "<script>alert('Gelar Berhasil dibuat');</script>";
							return true;
						}else{
							echo "<script>alert('Gelar Gagal dibuat');</script>";
							return false;
						}
					} catch (PDOException $e) {
						echo $e->getmessage();
						
					}
				}
			}
		}
		public function gelar()
		{
			$takad = $this->db->prepare("SELECT * FROM gelar");
			$takad->execute();
			$c = $takad->rowcount();
			if($c > 0){
				foreach($takad as $t){
					$hasil[] = $t;
				}
				return $hasil;
			}else{
				echo "<script>alert('Belum ada data Gelar');</script>";
			}
		}
		public function inputKelas()
		{
			if(isset($_POST['simpan-kelas'])){
				$a = $_POST['kelas'];

				//Check Ganda
				$check = $this->db->prepare("SELECT * FROM kelas WHERE kelas = ?");
				$check->bindparam(1, $a, PDO::PARAM_STR);
				$check->execute();
				$te = $check->rowcount();
				// cek ulang
				if($te > 0){
					echo "<script>alert('Maaf, kelas Sudah ada!');</script>";
					return false;
				}else{
					try {
						$simpan = $this->db->prepare("INSERT INTO kelas(kelas) VALUES(?)");
						$simpan->bindparam(1, $a, PDO::PARAM_STR);
						$simpan->execute();
						if($simpan){
							echo "<script>alert('Kelas Berhasil dibuat');</script>";
							return true;
						}else{
							echo "<script>alert('Kelas Gagal dibuat');</script>";
							return false;
						}
					} catch (PDOException $e) {
						echo $e->getmessage();
						
					}
				}
			}
		}
		public function kelas()
		{
			$takad = $this->db->prepare("SELECT * FROM kelas");
			$takad->execute();
			$c = $takad->rowcount();
			if($c > 0){
				foreach($takad as $t){
					$hasil[] = $t;
				}
				return $hasil;
			}else{
				echo "<script>alert('Belum ada data Kelas');</script>";
			}
		}
		public function inputKampus()
		{
			if(isset($_POST['simpan-kampus'])){
				$a = $_POST['kampus'];

				//Check Ganda
				$check = $this->db->prepare("SELECT * FROM kampus WHERE kampus = ?");
				$check->bindparam(1, $a, PDO::PARAM_STR);
				$check->execute();
				$te = $check->rowcount();
				// cek ulang
				if($te > 0){
					echo "<script>alert('Maaf, kampus Sudah ada!');</script>";
					return false;
				}else{
					try {
						$simpan = $this->db->prepare("INSERT INTO kampus(kampus) VALUES(?)");
						$simpan->bindparam(1, $a, PDO::PARAM_STR);
						$simpan->execute();
						if($simpan){
							echo "<script>alert('Kampus Berhasil dibuat');</script>";
							return true;
						}else{
							echo "<script>alert('Kampus Gagal dibuat');</script>";
							return false;
						}
					} catch (PDOException $e) {
						echo $e->getmessage();
						
					}
				}
			}
		}
		public function kampus()
		{
			$takad = $this->db->prepare("SELECT * FROM kampus");
			$takad->execute();
			$c = $takad->rowcount();
			if($c > 0){
				foreach($takad as $t){
					$hasil[] = $t;
				}
				return $hasil;
			}else{
				echo "<script>alert('Belum ada data Kampus');</script>";
			}
		}
		public function inputAkses()
		{
			if(isset($_POST['simpan-akses'])){
				$a = $_POST['akses'];

				//Check Ganda
				$check = $this->db->prepare("SELECT * FROM role WHERE role = ?");
				$check->bindparam(1, $a, PDO::PARAM_STR);
				$check->execute();
				$te = $check->rowcount();
				// cek ulang
				if($te > 0){
					echo "<script>alert('Maaf, Akses Sudah ada!');</script>";
					return false;
				}else{
					try {
						$simpan = $this->db->prepare("INSERT INTO role(role) VALUES(?)");
						$simpan->bindparam(1, $a, PDO::PARAM_STR);
						$simpan->execute();
						if($simpan){
							echo "<script>alert('Akses Berhasil dibuat');</script>";
							return true;
						}else{
							echo "<script>alert('Akses Gagal dibuat');</script>";
							return false;
						}
					} catch (PDOException $e) {
						echo $e->getmessage();
						
					}
				}
			}
		}
		public function akses()
		{
			$takad = $this->db->prepare("SELECT * FROM role");
			$takad->execute();
			$c = $takad->rowcount();
			if($c > 0){
				foreach($takad as $t){
					$hasil[] = $t;
				}
				return $hasil;
			}else{
				echo "<script>alert('Belum ada data Akses');</script>";
			}
		}
		public function inputKewarganegaraan()
		{
			if(isset($_POST['simpan-kewarganegaraan'])){
				$a = $_POST['kewarganegaraan'];

				//Check Ganda
				$check = $this->db->prepare("SELECT * FROM kewarganegaraan WHERE warga = ?");
				$check->bindparam(1, $a, PDO::PARAM_STR);
				$check->execute();
				$te = $check->rowcount();
				// cek ulang
				if($te > 0){
					echo "<script>alert('Maaf, Kewarganegaraan Sudah ada!');</script>";
					return false;
				}else{
					try {
						$simpan = $this->db->prepare("INSERT INTO kewarganegaraan(warga) VALUES(?)");
						$simpan->bindparam(1, $a, PDO::PARAM_STR);
						$simpan->execute();
						if($simpan){
							echo "<script>alert('Kewarganegaraan Berhasil dibuat');</script>";
							return true;
						}else{
							echo "<script>alert('Kewarganegaraan Gagal dibuat');</script>";
							return false;
						}
					} catch (PDOException $e) {
						echo $e->getmessage();
						
					}
				}
			}
		}
		public function warga()
		{
			$takad = $this->db->prepare("SELECT * FROM kewarganegaraan");
			$takad->execute();
			$c = $takad->rowcount();
			if($c > 0){
				foreach($takad as $t){
					$hasil[] = $t;
				}
				return $hasil;
			}else{
				echo "<script>alert('Belum ada data Kewarganegaraan');</script>";
			}
		}
		public function inputKeyakinan()
		{
			if(isset($_POST['simpan-keyakinan'])){
				$a = $_POST['agama'];

				//Check Ganda
				$check = $this->db->prepare("SELECT * FROM keyakinan WHERE agama = ?");
				$check->bindparam(1, $a, PDO::PARAM_STR);
				$check->execute();
				$te = $check->rowcount();
				// cek ulang
				if($te > 0){
					echo "<script>alert('Maaf, Keyakinan Sudah ada!');</script>";
					return false;
				}else{
					try {
						$simpan = $this->db->prepare("INSERT INTO keyakinan(agama) VALUES(?)");
						$simpan->bindparam(1, $a, PDO::PARAM_STR);
						$simpan->execute();
						if($simpan){
							echo "<script>alert('Keyakinan Berhasil dibuat');</script>";
							return true;
						}else{
							echo "<script>alert('Keyakinan Gagal dibuat');</script>";
							return false;
						}
					} catch (PDOException $e) {
						echo $e->getmessage();
						
					}
				}
			}
		}
		public function agama()
		{
			$takad = $this->db->prepare("SELECT * FROM Keyakinan");
			$takad->execute();
			$c = $takad->rowcount();
			if($c > 0){
				foreach($takad as $t){
					$hasil[] = $t;
				}
				return $hasil;
			}else{
				echo "<script>alert('Belum ada data Keyakinan');</script>";
			}
		}
		public function inputGender()
		{
			if(isset($_POST['simpan-gender'])){
				$a = $_POST['gender'];

				//Check Ganda
				$check = $this->db->prepare("SELECT * FROM gender WHERE gender = ?");
				$check->bindparam(1, $a, PDO::PARAM_STR);
				$check->execute();
				$te = $check->rowcount();
				// cek ulang
				if($te > 0){
					echo "<script>alert('Maaf, Data Gender Sudah ada!');</script>";
					return false;
				}else{
					try {
						$simpan = $this->db->prepare("INSERT INTO gender (gender) VALUES(?)");
						$simpan->bindparam(1, $a, PDO::PARAM_STR);
						$simpan->execute();
						if($simpan){
							echo "<script>alert('Gender Berhasil dibuat');</script>";
							return true;
						}else{
							echo "<script>alert('Gender Gagal dibuat');</script>";
							return false;
						}
					} catch (PDOException $e) {
						echo $e->getmessage();
						
					}
				}
			}
		}
		public function gender()
		{
			$takad = $this->db->prepare("SELECT * FROM gender");
			$takad->execute();
			$c = $takad->rowcount();
			if($c > 0){
				foreach($takad as $t){
					$hasil[] = $t;
				}
				return $hasil;
			}else{
				echo "<script>alert('Belum ada data Gender');</script>";
			}
		}
		public function inputNikah()
		{
			if(isset($_POST['simpan-nikah'])){
				$a = $_POST['nikah'];

				//Check Ganda
				$check = $this->db->prepare("SELECT * FROM pernikahan WHERE nikah = ?");
				$check->bindparam(1, $a, PDO::PARAM_STR);
				$check->execute();
				$te = $check->rowcount();
				// cek ulang
				if($te > 0){
					echo "<script>alert('Maaf, Data Pernikahan Sudah ada!');</script>";
					return false;
				}else{
					try {
						$simpan = $this->db->prepare("INSERT INTO pernikahan (nikah) VALUES(?)");
						$simpan->bindparam(1, $a, PDO::PARAM_STR);
						$simpan->execute();
						if($simpan){
							echo "<script>alert('Pernikahan Berhasil dibuat');</script>";
							return true;
						}else{
							echo "<script>alert('Pernikahan Gagal dibuat');</script>";
							return false;
						}
					} catch (PDOException $e) {
						echo $e->getmessage();
						
					}
				}
			}
		}
		public function inputJenjang()
		{
			if(isset($_POST['simpan-jenjang'])){
				$a = $_POST['jenjang'];

				//Check Ganda
				$check = $this->db->prepare("SELECT * FROM jenjang WHERE jenjang = ?");
				$check->bindparam(1, $a, PDO::PARAM_STR);
				$check->execute();
				$te = $check->rowcount();
				// cek ulang
				if($te > 0){
					echo "<script>alert('Maaf, Data Jenjang Sudah ada!');</script>";
					return false;
				}else{
					try {
						$simpan = $this->db->prepare("INSERT INTO jenjang (jenjang) VALUES(?)");
						$simpan->bindparam(1, $a, PDO::PARAM_STR);
						$simpan->execute();
						if($simpan){
							echo "<script>alert('Data Jenjang Berhasil dibuat');</script>";
							return true;
						}else{
							echo "<script>alert('Data Jenjang Gagal dibuat');</script>";
							return false;
						}
					} catch (PDOException $e) {
						echo $e->getmessage();
						
					}
				}
			}
		}
		public function inputUniv()
		{
			if(isset($_POST['simpan-univ'])){
				$a = $_POST['univ'];

				//Check Ganda
				$check = $this->db->prepare("SELECT * FROM univ WHERE univ = ?");
				$check->bindparam(1, $a, PDO::PARAM_STR);
				$check->execute();
				$te = $check->rowcount();
				// cek ulang
				if($te > 0){
					echo "<script>alert('Maaf, Data Universitas Sudah ada!');</script>";
					return false;
				}else{
					try {
						$simpan = $this->db->prepare("INSERT INTO univ (univ) VALUES(?)");
						$simpan->bindparam(1, $a, PDO::PARAM_STR);
						$simpan->execute();
						if($simpan){
							echo "<script>alert('Data Universitas Berhasil dibuat');</script>";
							return true;
						}else{
							echo "<script>alert('Data Universitas Gagal dibuat');</script>";
							return false;
						}
					} catch (PDOException $e) {
						echo $e->getmessage();
						
					}
				}
			}
		}
		public function nikah()
		{
			$takad = $this->db->prepare("SELECT * FROM pernikahan");
			$takad->execute();
			$c = $takad->rowcount();
			if($c > 0){
				foreach($takad as $t){
					$hasil[] = $t;
				}
				return $hasil;
			}else{
				echo "<script>alert('Belum ada data Pernikahan');</script>";
			}
		}
		public function univ()
		{
			$takad = $this->db->prepare("SELECT * FROM univ");
			$takad->execute();
			$c = $takad->rowcount();
			if($c > 0){
				foreach($takad as $t){
					$hasil[] = $t;
				}
				return $hasil;
			}else{
				echo "<script>alert('Belum ada data Universitas');</script>";
			}
		}
		public function jenjang()
		{
			$takad = $this->db->prepare("SELECT * FROM jenjang");
			$takad->execute();
			$c = $takad->rowcount();
			if($c > 0){
				foreach($takad as $t){
					$hasil[] = $t;
				}
				return $hasil;
			}else{
				echo "<script>alert('Belum ada data Jenjang');</script>";
			}
		}
		public function getStatusOpt()
		{
			$st = $this->db->prepare("SELECT * FROM status");
			$st->execute();
			foreach($st as $us){
				echo "<option value='{$us['id']}'>{$us['status']}</option>";
			}
		}
		public function editTa()
		{
			if(isset($_GET['edit']) && !empty($_GET['id'])){
				$id = $_GET['id'];
				$ed = $this->db->prepare("SELECT * FROM tahunakademik WHERE id = ?");
				$ed->bindvalue(1, $id, PDO::PARAM_INT);
				$ed->execute();
				foreach($ed as $it){
					$edit[] = $it;
				}
				return $edit;
			}
		}
		public function updateTa()
		{
			if(isset($_GET['status'])){
				$id = $_GET['id'];
				$sta = $_GET['status'];
				try {
					$save = $this->db->prepare("UPDATE tahunakademik SET status = ? WHERE id = '$id' LIMIT 1");
					$save->bindparam(1, $sta, PDO::PARAM_STR);
					$save->execute();
					if($save){
						echo "<script>alert('Data Berhasil diupdate!');document.location='../ta';</script>";
						return true;
					}else{
						echo "<script>alert('Data Gagal diupdate!');</script>";
						return false;
					}
				} catch (PDOException $e) {
					echo $e->getmessage();
				}
			}
		}
		public function updateKonsen()
		{
			if(isset($_GET['status'])){
				$id = $_GET['id'];
				$sta = $_GET['status'];
				try {
					$save = $this->db->prepare("UPDATE konsen SET status = ? WHERE id = '$id' LIMIT 1");
					$save->bindparam(1, $sta, PDO::PARAM_STR);
					$save->execute();
					if($save){
						echo "<script>alert('Data Berhasil diupdate!');document.location='../konsen';</script>";
						return true;
					}else{
						echo "<script>alert('Data Gagal diupdate!');</script>";
						return false;
					}
				} catch (PDOException $e) {
					echo $e->getmessage();
				}
			}
		}
		public function updateGelar()
		{
			if(isset($_GET['status'])){
				$id = $_GET['id'];
				$sta = $_GET['status'];
				try {
					$save = $this->db->prepare("UPDATE gelar SET status = ? WHERE id = '$id' LIMIT 1");
					$save->bindparam(1, $sta, PDO::PARAM_STR);
					$save->execute();
					if($save){
						echo "<script>alert('Data Berhasil diupdate!');document.location='../gelar';</script>";
						return true;
					}else{
						echo "<script>alert('Data Gagal diupdate!');</script>";
						return false;
					}
				} catch (PDOException $e) {
					echo $e->getmessage();
				}
			}
		}
		public function updateKelas()
		{
			if(isset($_GET['status'])){
				$id = $_GET['id'];
				$sta = $_GET['status'];
				try {
					$save = $this->db->prepare("UPDATE kelas SET status = ? WHERE id = '$id' LIMIT 1");
					$save->bindparam(1, $sta, PDO::PARAM_STR);
					$save->execute();
					if($save){
						echo "<script>alert('Data Berhasil diupdate!');document.location='../kelas';</script>";
						return true;
					}else{
						echo "<script>alert('Data Gagal diupdate!');</script>";
						return false;
					}
				} catch (PDOException $e) {
					echo $e->getmessage();
				}
			}
		}
		public function updateKampus()
		{
			if(isset($_GET['status'])){
				$id = $_GET['id'];
				$sta = $_GET['status'];
				try {
					$save = $this->db->prepare("UPDATE kampus SET status = ? WHERE id = '$id' LIMIT 1");
					$save->bindparam(1, $sta, PDO::PARAM_STR);
					$save->execute();
					if($save){
						echo "<script>alert('Data Berhasil diupdate!');document.location='../kampus';</script>";
						return true;
					}else{
						echo "<script>alert('Data Gagal diupdate!');</script>";
						return false;
					}
				} catch (PDOException $e) {
					echo $e->getmessage();
				}
			}
		}
		public function updateAkses()
		{
			if(isset($_GET['parent'])){
				$id = $_GET['id'];
				$sta = $_GET['parent'];
				try {
					$save = $this->db->prepare("UPDATE role SET parent = ? WHERE id = '$id' LIMIT 1");
					$save->bindparam(1, $sta, PDO::PARAM_STR);
					$save->execute();
					if($save){
						echo "<script>alert('Data Berhasil diupdate!');document.location='../akses';</script>";
						return true;
					}else{
						echo "<script>alert('Data Gagal diupdate!');</script>";
						return false;
					}
				} catch (PDOException $e) {
					echo $e->getmessage();
				}
			}
		}
		public function updateWn()
		{
			if(isset($_GET['status'])){
				$id = $_GET['id'];
				$sta = $_GET['status'];
				try {
					$save = $this->db->prepare("UPDATE kewarganegaraan SET status = ? WHERE id = '$id' LIMIT 1");
					$save->bindparam(1, $sta, PDO::PARAM_STR);
					$save->execute();
					if($save){
						echo "<script>alert('Data Berhasil diupdate!');document.location='../kewarganegaraan';</script>";
						return true;
					}else{
						echo "<script>alert('Data Gagal diupdate!');</script>";
						return false;
					}
				} catch (PDOException $e) {
					echo $e->getmessage();
				}
			}
		}
		public function updateNikah()
		{
			if(isset($_GET['status'])){
				$id = $_GET['id'];
				$sta = $_GET['status'];
				try {
					$save = $this->db->prepare("UPDATE pernikahan SET status = ? WHERE id = '$id' LIMIT 1");
					$save->bindparam(1, $sta, PDO::PARAM_STR);
					$save->execute();
					if($save){
						echo "<script>alert('Data Berhasil diupdate!');document.location='../nikah';</script>";
						return true;
					}else{
						echo "<script>alert('Data Gagal diupdate!');</script>";
						return false;
					}
				} catch (PDOException $e) {
					echo $e->getmessage();
				}
			}
		}
		public function updateFaith()
		{
			if(isset($_GET['status'])){
				$id = $_GET['id'];
				$sta = $_GET['status'];
				try {
					$save = $this->db->prepare("UPDATE keyakinan SET status = ? WHERE id = '$id' LIMIT 1");
					$save->bindparam(1, $sta, PDO::PARAM_STR);
					$save->execute();
					if($save){
						echo "<script>alert('Data Berhasil diupdate!');document.location='../faith';</script>";
						return true;
					}else{
						echo "<script>alert('Data Gagal diupdate!');</script>";
						return false;
					}
				} catch (PDOException $e) {
					echo $e->getmessage();
				}
			}
		}
		public function updateGender()
		{
			if(isset($_GET['status'])){
				$id = $_GET['id'];
				$sta = $_GET['status'];
				try {
					$save = $this->db->prepare("UPDATE gender SET status = ? WHERE id = '$id' LIMIT 1");
					$save->bindparam(1, $sta, PDO::PARAM_STR);
					$save->execute();
					if($save){
						echo "<script>alert('Data Berhasil diupdate!');document.location='../gender';</script>";
						return true;
					}else{
						echo "<script>alert('Data Gagal diupdate!');</script>";
						return false;
					}
				} catch (PDOException $e) {
					echo $e->getmessage();
				}
			}
		}
		public function updateJenjang()
		{
			if(isset($_GET['status'])){
				$id = $_GET['id'];
				$sta = $_GET['status'];
				try {
					$save = $this->db->prepare("UPDATE jenjang SET status = ? WHERE id = '$id' LIMIT 1");
					$save->bindparam(1, $sta, PDO::PARAM_STR);
					$save->execute();
					if($save){
						echo "<script>alert('Data Berhasil diupdate!');document.location='../jenjang';</script>";
						return true;
					}else{
						echo "<script>alert('Data Gagal diupdate!');</script>";
						return false;
					}
				} catch (PDOException $e) {
					echo $e->getmessage();
				}
			}
		}
		public function updateUniv()
		{
			if(isset($_GET['status'])){
				$id = $_GET['id'];
				$sta = $_GET['status'];
				try {
					$save = $this->db->prepare("UPDATE univ SET status = ? WHERE id = '$id' LIMIT 1");
					$save->bindparam(1, $sta, PDO::PARAM_STR);
					$save->execute();
					if($save){
						echo "<script>alert('Data Berhasil diupdate!');document.location='../univ';</script>";
						return true;
					}else{
						echo "<script>alert('Data Gagal diupdate!');</script>";
						return false;
					}
				} catch (PDOException $e) {
					echo $e->getmessage();
				}
			}
		}
	}

 ?>