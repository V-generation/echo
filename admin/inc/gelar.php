<div class="container-fluid">
	<hr>
	<h2 class="text-center animated bounceIn">Input Gelar</h2>
	<hr>
	<div class="row">
		<div class="col-sm-4">
			<form class="form" method="POST">
				<div class="card">
					<div class="card-header bg-primary">
						<h3 class="text-center">Form Insert Gelar</h3>
					</div>
					<div class="card-body">
						<div class="form-group">
							<input type="text" name="gelar" class="form-control" placeholder="Tuliskan Gelar">
						</div>
						<div class="form-group">
							<input type="text" name="sebutan" class="form-control" placeholder="Tuliskan Sebutan Gelar">
						</div>
					</div>
					<div class="card-footer">
						<div class="form-group">
							<input type="submit" name="simpan-gelar" class="btn btn-sm btn-success">
							<?php $data->inputGelar(); ?>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="col-sm-8" id="takad">
			<table class="table table-hover"  id="gelar">
				<thead>
					<tr>
						<th>No</th>
						<th>Gelar</th>
						<th>Active</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no = 1;
						if(is_array($data->gelar()) || is_object($data->gelar())){
							foreach($data->gelar() as $tak=>$val){?>
								<tr>
									<td><?=$no++?></td>
									<td title='<?=$val['sebutan']?>'><?=$val['gelar']?></td>
									<td><?php  if($val['status']==1){echo 'Aktif';}else{echo 'Tidak Aktif';}?></td>
									<td>
										<a href="inc/editGelar.php?status=<?php echo (($val['status'] ==1)?'2':'1');?>&id=<?php echo $val['id'];?>" class="btn btn-xs btn-<?php echo (($val['status']==2)?'success':'danger');?>"><i class="fa fa-<?php echo (($val['status']==2)?'check':'check');?>"></I></a>&nbsp<?php echo (($val['status'] == 2)?'AKtifkan':'Non Aktifkan');?>
									</td>
								</tr>
						<?php	}
						}
					?>
				</tbody>
			</table>
			
		</div>
	</div>
</div>
