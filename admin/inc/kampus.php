<div class="container-fluid">
	<hr>
	<h2 class="text-center animated bounceIn">Input Kampus</h2>
	<hr>
	<div class="row">
		<div class="col-sm-4">
			<form class="form" method="POST">
				<div class="card">
					<div class="card-header bg-primary">
						<h3 class="text-center">Form Insert Kampus</h3>
					</div>
					<div class="card-body">
						<div class="form-group">
							<input type="text" name="kampus" class="form-control" placeholder="Tuliskan kampus">
						</div>
					</div>
					<div class="card-footer">
						<div class="form-group">
							<input type="submit" name="simpan-kampus" class="btn btn-sm btn-success">
							<?php $data->inputKampus(); ?>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="col-sm-8" id="takad">
			<table class="table table-hover"  id="kampus">
				<thead>
					<tr>
						<th>No</th>
						<th>Kampus</th>
						<th>Active</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no = 1;
						if(is_array($data->kampus()) || is_object($data->kampus())){
							foreach($data->kampus() as $tak=>$val){?>
								<tr>
									<td><?=$no++?></td>
									<td><?=$val['kampus']?></td>
									<td><?php  if($val['status']==1){echo 'Aktif';}else{echo 'Tidak Aktif';}?></td>
									<td>
										<a href="inc/editKampus.php?status=<?php echo (($val['status'] ==1)?'2':'1');?>&id=<?php echo $val['id'];?>" class="btn btn-xs btn-<?php echo (($val['status']==2)?'success':'danger');?>"><i class="fa fa-<?php echo (($val['status']==2)?'check':'check');?>"></I></a>&nbsp<?php echo (($val['status'] == 2)?'AKtifkan':'Non Aktifkan');?>
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
