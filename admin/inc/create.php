<!-- this page for create an account -->
<?php 
	require_once('app.php');
	$data = new admin();
 ?>
<hr style="border-color:blue;">
<h2 class="text-center">Account Generator</h2>
<hr style="border-color:blue;">
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4">
			<div class="card">
				<div class="card-header bg-primary">
					<h3>Form Akun</h3>
				</div>
				<form class="form" method="POST">
					<div class="card-body">
						<div class="form-group">
							<input type="text" name="username" placeholder="Username" class="form-control" required>
						</div>
						<div class="form-group">
							<input type="email" name="email" placeholder="Email" class="form-control" required>
						</div>
						<div class="form-group">
							<input type="text" name="password" placeholder="Password" class="form-control" required>
						</div>
						<div class="form-group">
							<select name="role" class="form-control">
								<option value="0">- Pilih Role -</option>
								<?php $data->getRole(); ?>
							</select>
						</div>
					</div>
				</form>
				<div class="card-footer pull-right">
					<div class="form-group">
						<input type="submit" name="simpan-akun" class="btn btn-sm btn-primary">
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-8"></div>
	</div>
</div>