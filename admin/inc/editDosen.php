<?php 

	require_once("app.php");
	$data = new Admin();
	require_once("hd-admin.php");
 ?>
 <hr style="border-color:blue;">
 <div class="card">
 	<div class="card-header bg-primary">
 		<h1 class="text-center">Edit Data Dosen</h1>
 	</div>
 	<div class="card-body">
		<form class="form" method="POST">
	 		<div class="row">
				<?php foreach($data->getEditDosen() AS $datas){ ?>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Nama Dosen">
					<input type="text" name="nama" value="<?=$datas['nama']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Jenis Kelamin">
					<select name="gender" class="form-control">
						<option value="<?=$datas['jenis_kelamin']?>" selected><?=$datas['jenis_kelamin']?></option>
						<option value="<?php if($datas['jenis_kelamin'] =='Laki -Laki'){echo "Perempuan";}else{echo "Laki -Laki";}?>"><?php if($datas['jenis_kelamin'] =='Laki -Laki'){echo "Perempuan";}else{echo "Laki -Laki";}?></option>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="NIP">
					<input type="text" name="nip" value="<?=$datas['nip']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Gelar Depan">
					<input type="text" name="gelarDepan" value="<?=$datas['gelar_depan']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="NIDN">
					<input type="text" name="nidn" value="<?=$datas['nidn']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Gelar Belakang">
					<input type="text" name="gelarBelakang" value="<?=$datas['gelar_belakang']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Jabatan Dosen">
					<input type="text" name="jabatanDosen" value="<?=$datas['id_dosen_jabatan']?>" selected class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Prodi">
					<select name="agama" class="form-control">
						<option value="<?=$datas['id_prodi']?>" selected><?=$datas['id_prodi']?></option>
						<option value="<?php if($datas['id_prodi']==612){echo 612;}else{echo 622;}?>">622</option>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Status Dosen">
					<select name="statusDosen" class="form-control">
						<option value="<?=$datas['status_dosen']?>" selected><?=$datas['status_dosen']?></option>
						<option value="<?php if($datas['status_dosen'] ==1){echo 2;}else{echo 1;}?>"><?php if($datas['status_dosen'] ==1){echo 2;}else{echo 1;}?></option>
					</select>
				</div>
				<div class="form-group  col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="SK Yayasan">
					<input type="text" name="skyayasan" class="form-control" value="<?=$datas['no_skyys']?>">
				</div>
				<div class="form-group  col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Tgl SK Yayasan">
					<input type="text" name="tglsk" class="form-control" value="<?=$datas['tgl_skyys']?>">
				</div>
				<div class="form-group  col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Tempat Lahir">
					<input type="text" name="tempatLahir" class="form-control" value="<?=$datas['tempat_lahir']?>">
				</div>
				<div class="form-group  col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Tanggal Lahir">
					<input type="text" name="tanggalLahir" class="form-control" value="<?=$datas['tgl_lahir']?>">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Kewarganegaraan">
					<select name="statusNikah" class="form-control">
						<option value="<?=$datas['warga_negara']?>" selected><?=$datas['warga_negara']?></option>
						<option value="<?php if($datas['warga_negara'] =='WNI'){echo 'WNA';}else{echo 'WNI';}?>"><?php if($datas['warga_negara'] =='WNI'){echo 'WNA';}else{echo 'WNI';}?></option>
					</select>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Status Pernikahan">
					<select name="agama" class="form-control">
						<option value="<?=$datas['status_pernikahan']?>" selected><?=$datas['status_pernikahan']?></option>
						<option value="<?php if($datas['status_pernikahan'] =='Menikah'){echo 'Belum Menikah';}else{echo 'Menikah';}?>"><?php if($datas['status_pernikahan'] =='Menikah'){echo 'Belum Menikah';}else{echo 'Menikah';}?></option>
					</select>
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
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Alamat">
					<textarea cols="2" rows="2" class="form-control"><?=$datas['alamat']?></textarea>
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Nomor Telephone">
					<input type="text" name="status" value="<?=$datas['no_telp']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Nomor Handphone">
					<input type="text" name="status" value="<?=$datas['no_hp']?>" class="form-control">
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4" data-toggle="tooltip" data-placement="top" title="Photo">
					<input type="file" name="photo" value="<?=$datas['foto_profil']?>" class="form-control">
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