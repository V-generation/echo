
	<!-- <script type="text/javascript" src="inc/js/jquery.dataTables.min.js"></script> -->
	<div class="jumbotron" style="background-image:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.5)),url(../img/att/bld.jpg);background-size:cover;background-repeat: no-repeat;background-position: relative;height:50%;">
		<h1 class="text-center text-white">STIE PPI</h1>
	</div>
	<div class="card">
		<div class="card-header">
			<hr style="border-color:blue;">
			<h1 class="text-center">Daftar Nama Dosen</h1>
			<hr style="border-color:blue;">
		</div>
		<div class="card-body">
			<table class="table table-hover" id="example">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<?php $data->getDsnFull(); ?>
			</table>
		</div>
	</div>
	<!-- jQuery -->
<!-- Bootstrap 4 -->
