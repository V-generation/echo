<?php 
	require_once('count.php');
	$data = new Count();

 ?>
<div class="container-fluid">
	<hr>
		<h2 class="text-center animated bounceIn">SETTING</h2>
	<hr>
	<div class="row">
		<div class="col-sm-3">
			<div class="card bg-primary">
				<div class="card-body">
					<h4 class="text-center">Tahun Akademik <sup><span class="badge badge-warning"><?=$data->ta();?></span></sup></h4>
				</div>
				<div class="card-footer bg-dark">
					<button class="btn btn-sm btn-warning pull-right" onclick="window.location.href='ta';"><i class="fa fa-plus"></i></button>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card bg-primary">
				<div class="card-body">
					<h4 class="text-center">Jurusan <sup><span class="badge badge-warning"><?=$data->konsen();?></span></sup></h4>
				</div>
				<div class="card-footer bg-dark">
					<button class="btn btn-sm btn-warning pull-right" onclick="window.location.href='konsen';"><i class="fa fa-plus"></i></button>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card bg-primary">
				<div class="card-body">
					<h4 class="text-center">Gelar <sup><span class="badge badge-warning"><?=$data->gelar();?></span></h4>
				</div>
				<div class="card-footer bg-dark">
					<button class="btn btn-sm btn-warning pull-right" onclick="window.location.href='gelar';"><i class="fa fa-plus"></i></button>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card bg-primary">
				<div class="card-body">
					<h4 class="text-center">Jenjang <sup><span class="badge badge-warning"><?=$data->jenjang();?></span></sup></h4>
				</div>
				<div class="card-footer bg-dark">
					<button class="btn btn-sm btn-warning pull-right" onclick="window.location.href='jenjang';"><i class="fa fa-plus"></i></button>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card bg-primary">
				<div class="card-body">
					<h4 class="text-center">Universitas <sup><span class="badge badge-warning"><?=$data->univ();?></span></sup></h4>
				</div>
				<div class="card-footer bg-dark">
					<button class="btn btn-sm btn-warning pull-right" onclick="window.location.href='univ';"><i class="fa fa-plus"></i></button>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card bg-primary">
				<div class="card-body">
					<h4 class="text-center">Kelas <sup><span class="badge badge-warning"><?=$data->kelas();?></span></sup></h4>
				</div>
				<div class="card-footer bg-dark">
					<button class="btn btn-sm btn-warning pull-right" onclick="window.location.href='kelas';"><i class="fa fa-plus"></i></button>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card bg-primary">
				<div class="card-body">
					<h4 class="text-center">Kampus <sup><span class="badge badge-warning"><?=$data->kampus();?></span></sup></h4>
				</div>
				<div class="card-footer bg-dark">
					<button class="btn btn-sm btn-warning pull-right" onclick="window.location.href='kampus';"><i class="fa fa-plus"></i></button>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card bg-primary">
				<div class="card-body">
					<h4 class="text-center">Akses <sup><span class="badge badge-warning"><?=$data->akses();?></span></sup></h4>
				</div>
				<div class="card-footer bg-dark">
					<button class="btn btn-sm btn-warning pull-right" onclick="window.location.href='akses';"><i class="fa fa-plus"></i></button>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card bg-primary">
				<div class="card-body">
					<h4 class="text-center">Kewarganegaraan <sup><span class="badge badge-warning"><?=$data->warga();?></span></sup></h4>
				</div>
				<div class="card-footer bg-dark">
					<button class="btn btn-sm btn-warning pull-right" onclick="window.location.href='kewarganegaraan';"><i class="fa fa-plus"></i></button>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card bg-primary">
				<div class="card-body">
					<h4 class="text-center">Agama <sup><span class="badge badge-warning"><?=$data->faith();?></span></sup></h4>
				</div>
				<div class="card-footer bg-dark">
					<button class="btn btn-sm btn-warning pull-right" onclick="window.location.href='faith';"><i class="fa fa-plus"></i></button>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card bg-primary">
				<div class="card-body">
					<h4 class="text-center">Gender <sup><span class="badge badge-warning"><?=$data->gender();?></span></sup></h4>
				</div>
				<div class="card-footer bg-dark">
					<button class="btn btn-sm btn-warning pull-right" onclick="window.location.href='gender';"><i class="fa fa-plus"></i></button>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card bg-primary">
				<div class="card-body">
					<h4 class="text-center">Pernikahan <sup><span class="badge badge-warning"><?=$data->nikah();?></span></sup></h4>
				</div>
				<div class="card-footer bg-dark">
					<button class="btn btn-sm btn-warning pull-right" onclick="window.location.href='nikah';"><i class="fa fa-plus"></i></button>
				</div>
			</div>
		</div>
		<div class="col-sm-3"></div>
		<div class="col-sm-3"></div>
		<div class="col-sm-3"></div>
	</div>
</div>