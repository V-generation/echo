<?php 

	require_once("hd-admin.php");
	require_once("app.php");
	$data = new Admin();
	require_once("hd-admin.php");
 ?>
 <hr style="border-color:blue;">
 <div class="card">
 	<div class="card-header bg-primary">
 		<h1 class="text-center">Edit Data Mahasiswa</h1>
 	</div>
 	<div class="card-body">
		<form class="form" method="POST">
	 		<div class="row">
				<?php foreach($data->getEditMahasiswa() AS $datas){ ?>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Nama Mahasiswa">
					<input type="text" name="nama" value="<?=$datas['nama']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Jenis Kelamin">
					<select name="gender" class="form-control">
						<option value="<?=$datas['jenkel']?>" selected><?=$datas['jenkel']?></option>
						<option value="<?php if($datas['jenkel'] =='Laki -Laki'){echo "Perempuan";}else{echo "Laki -Laki";}?>"><?php if($datas['jenkel'] =='Laki -Laki'){echo "Perempuan";}else{echo "Laki -Laki";}?></option>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Nomor KTP">
					<input type="text" name="nik" value="<?=$datas['no_ktp']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Nomor Induk Mahasiswa">
					<input type="text" name="nim" value="<?=$datas['nim']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Email">
					<input type="email" name="email" value="<?=$datas['email']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Tempat Lahir">
					<input type="text" name="tempatLahir" value="<?=$datas['tmp_lahir']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Tanggal Lahir">
					<input type="text" name="tanggalLahir" value="<?=$datas['tgl_lahir']?>" selected class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Agama">
					<select name="agama" class="form-control">
						<option value="<?=$datas['agama']?>" selected><?=$datas['agama']?></option>
						<option value="Protestan">Protestan</option>
						<option value="Katolik">Katolik</option>
						<option value="Budha">Budha</option>
						<option value="Hindu">Hindu</option>
						<option value="Lainnya">Lainnya</option>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Kewarganegaraan">
					<select name="wargaNegara" class="form-control">
						<option value="<?=$datas['warga_negara']?>" selected><?=$datas['warga_negara']?></option>
						<option value="<?php if($datas['warga_negara'] =='WNI'){echo 'WNA';}else{echo 'WNI';}?>"><?php if($datas['warga_negara'] =='WNI'){echo 'WNA';}else{echo 'WNI';}?></option>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Status Pernikahan">
					<select name="statusNikah" class="form-control">
						<option value="<?=$datas['status']?>" selected><?=$datas['status']?></option>
						<option value="<?php if($datas['status'] =='Kawin'){echo 'Belum Kawin';}else{echo 'Kawin';}?>"><?php if($datas['status'] =='Kawin'){echo 'Belum Kawin';}else{echo 'Kawin';}?></option>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Jenis Mahasiswa">
					<select name="agama" class="form-control">
						<option value="<?=$datas['jenis_mhsw']?>" selected><?=$datas['jenis_mhsw']?></option>
						<option value="1">Pilihan 1</option>
						<option value="2">Pilihan 2</option>
						<option value="3">Pilihan 3</option>
						<option value="4">Pilihan 4</option>
						<option value="5">Pilihan 5</option>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Sumber Biaya">
					<select name="provinsi" class="form-control">
						<option value="<?=$datas['sumber_biaya']?>" selected><?=$datas['sumber_biaya']?></option>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Photo">
					<input type="file" name="photo" value="<?=$datas['foto_profil']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Status">
					<input type="text" name="status" value="<?=$datas['id_status']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="tahunmasuk">
					<select name="tahunmasuk" class="form-control">
						<option value="<?=$datas['tahun_masuk']?>"><?=$datas['tahun_masuk']?></option>
						<?php 
							for ($i=2008; $i < 2090; $i++) { 
								echo "<option value='{$i}'>{$i}</option>";
							}
						 ?>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Waktu Kuliah">
					<input type="text" name="status" value="<?=$datas['id_waktu_kuliah']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Program Studi">
					<input type="text" name="prodi" value="<?=$datas['id_prodi']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Jenjang">
					<input type="text" name="jenjang" value="<?=$datas['id_jenjang']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Semester">
					<input type="text" name="prodi" value="<?=$datas['id_semester']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Program Studi">
					<input type="text" name="nip" value="<?=$datas['nip']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Tahun Akademik">
					<input type="text" name="prodi" value="<?=$datas['tahun_akademik']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="ID Daftar">
					<input type="text" name="daftar" value="<?=$datas['id_daftar']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Program Studi">
					<input type="text" name="prodi" value="<?=$datas['id_prodi']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Prestasi">
					<input type="text" name="Prestasi" value="<?=$datas['is_disable_spp']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Provinsi">
					<select name="provinsi" class="form-control">
						<option value="<?=$datas['id_prov']?>" selected><?=$datas['id_prov']?></option>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Kota / Kabupaten">
					<select name="kota" class="form-control">
						<option value="<?=$datas['kota']?>" selected><?=$datas['kota']?></option>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Kecamatan">
					<select name="kecamatan" class="form-control">
						<option value="<?=$datas['kecamatan']?>" selected><?=$datas['kecamatan']?></option>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Kelurahan">
					<select name="kelurahan" class="form-control">
						<option value="<?=$datas['kelurahan']?>" selected><?=$datas['kelurahan']?></option>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="RT">
					<select name="rt" class="form-control">
						<option value="<?=$datas['rt']?>" selected><?=$datas['rt']?></option>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="RW">
					<select name="rw" class="form-control">
						<option value="<?=$datas['rw']?>" selected><?=$datas['rw']?></option>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Jalan">
					<select name="jalan" class="form-control">
						<option value="<?=$datas['jalan']?>" selected><?=$datas['jalan']?></option>
					</select>
				</div>
				<div class="form-group col-sm-8 col-md-8 col-lg-8" data-toggle="tooltip" data-placement="top" title="Alamat">
					<textarea class="form-control" rows="4" cols="4" name="alamat"><?=$datas['alamat']?></textarea>
				</div>
				<hr style="border-color:blue;">
				<div class="clearfix"></div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Alamat">
					<input type="submit" name="Update" class="btn btn-sm btn-primary pull-right" value="Update">
				</div>
	 		</div>
		</form>
 	</div>
 	<div class="card-footer"></div>
 </div>
<?php }
	require_once("ft-admin.php");

 ?>