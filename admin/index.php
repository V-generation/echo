<?php 
	include 'inc/app.php';
	$data = new admin();
	include '../temp/hd-admin.php';
	// $data->session();
?>
   
<?php
//main page
$page = (isset($_GET['halaman']))?$_GET['halaman']:"overview";
switch($page) {
	case'overview':include"inc/overview.php";break;
	case'dosen':include"inc/dosen.php";break;
	case'mahasiswa':include"inc/mahasiswa.php";break;
	case'create':include"inc/create.php";break;
	case'setting':include"inc/setting.php";break;
	case'ta':include"inc/tahunAkademik.php";break;
	case'konsen':include"inc/jurusan.php";break;
	case'gelar':include"inc/gelar.php";break;
	case'kelas':include"inc/kelas.php";break;
	case'kampus':include"inc/kampus.php";break;
	case'akses':include"inc/akses.php";break;
	case'kewarganegaraan':include"inc/kewarganegaraan.php";break;
	case'faith':include"inc/faith.php";break;
	case'gender':include"inc/gender.php";break;
	case'nikah':include"inc/nikah.php";break;
	case'jenjang':include"inc/jenjang.php";break;
	case'univ':include"inc/univ.php";break;

	case 'overview':
	default:include"inc/overview.php";
	}
?>

<?php
	include '../temp/ft-admin.php';
 ?>

