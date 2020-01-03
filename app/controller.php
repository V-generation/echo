<?php 
	class stiePortal{
		private $db;

		function __construct()
		{
			try {
				$this->db = new PDO('mysql:host=localhost;dbname=k9824259_siakad;','root','');
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             	$this->db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES'utf8'");
			} catch (PDOException $e) {
				echo $e->getmessage();
			}
		}
		
		public function login()
		{
			if(isset($_POST['login'])){
				$u = htmlspecialchars($_POST['email']);
				$p = $_POST['password'];

				// check user
				$check = $this->db->prepare("SELECT em FROM user WHERE em = ?");
				$check->bindparam(1, $e, PDO::PARAM_STR);
				$check->execute();
				$cc = $check->rowcount();
				//ambil user
				if($cc > 0){
					try {
							$user = $check->fetch(PDO::FETCH_ASSOC);
							if(password_verify($p, $user['ps'])){
								session_start();
								$_SESSION['un'] = $user['un'];
								$_SESSION['ps'] = $user['ps'];
								var_dump($_SESSION);
							}else{
								echo "<script>alert('Maaf, data tidak ditemukan!');</script>";
								return false; 

							}
					} catch (PDOException $e) {
						echo $e->getmessage();
					}
				}else{
					echo "<script>alert('Maaf, data tidak ditemukan!');</script>";
					return false; 
				}	
			}
		}
		public function session()
		{
			if(!isset($_SESSION['un']) && $_SESSION['parent']){
				echo "<script>alert('Login dulu ya pak bos... ');document.location='login';</script>";
			}
		}
		public function regist()
		{
			if(isset($_POST['regist'])){
			$u = htmlspecialchars(strtolower($_POST['username']));
			$e = htmlspecialchars($_POST['email']);
			$p = password_hash($_POST['password'], PASSWORD_DEFAULT);

			$check = $this->db->prepare("SELECT * FROM user WHERE un = ?");
			$check->bindparam(1, $u, PDO::PARAM_STR);
			$check->execute();
			$cc = $check->rowcount();
			if($cc > 0){
				$cd = $check->fetch(PDO::FETCH_ASSOC);
				if($cd['un'] > 0){
					echo "<script>alert('Maaf, Nama sudah digunakan');</script>";
					return false;
				}elseif($cd['em'] > 0){
					echo "<script>alert('Maaf, Email sudah digunakan');</script>";
					return false;
				}else{
					$tambah = $this->db->prepare("INSERT INTO user (em, un, ps) VALUEs(?,?,?)");
					$tambah->bindparam(1, $e, PDO::PARAM_STR);
					$tambah->bindparam(2, $u, PDO::PARAM_STR);
					$tambah->bindparam(3, $p, PDO::PARAM_STR);
					$tambah->execute();
					if($tambah){
						echo "<script>alert('Register berhasil');document.location='login';</script>";
						return true;
					}else{
						echo "<script>alert('Register gagal');document.location='login';</script>";
						return false;
					}
				}
			}
		}
		}
	}
 ?>