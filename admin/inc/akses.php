<div class="container-fluid">
	<hr>
	<h2 class="text-center animated bounceIn">Input akses</h2>
	<hr>
	<div class="row">
		<div class="col-sm-4">
			<form class="form" method="POST">
				<div class="card">
					<div class="card-header bg-primary">
						<h3 class="text-center">Form Insert akses</h3>
					</div>
					<div class="card-body">
						<div class="form-group">
							<input type="text" name="akses" class="form-control" placeholder="Tuliskan akses">
						</div>
					</div>
					<div class="card-footer">
						<div class="form-group">
							<input type="submit" name="simpan-akses" class="btn btn-sm btn-success">
							<?php $data->inputAkses(); ?>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="col-sm-8" id="takad">
			<table class="table table-hover"  id="akses">
				<thead>
					<tr>
						<th>No</th>
						<th>Akses</th>
						<th>Active</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no = 1;
						if(is_array($data->akses()) || is_object($data->akses())){
							foreach($data->akses() as $tak=>$val){?>
								<tr>
									<td><?=$no++?></td>
									<td><?=$val['role']?></td>
									<td><?php  if($val['parent']==1){echo 'Aktif';}else{echo 'Tidak Aktif';}?></td>
									<td>
										<a href="inc/editAkses.php?parent=<?php echo (($val['parent'] ==1)?'2':'1');?>&id=<?php echo $val['id'];?>" class="btn btn-xs btn-<?php echo (($val['parent']==2)?'success':'danger');?>"><i class="fa fa-<?php echo (($val['parent']==2)?'check':'check');?>"></I></a>&nbsp<?php echo (($val['parent'] ==2)?'AKtifkan':'Non Aktifkan');?>
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
