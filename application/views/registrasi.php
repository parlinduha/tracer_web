<body class="hold-transition register-page" style="background-image:url(<?= base_url('assets/dist/image/2.jpg') ?>); background-size:cover">
	<!-- <div class="row"> -->
	<div class="col-sm-4">
		<div class="card  card-primary">
			<div class="card-header text-center">
				<img src="<?= base_url('assets/dist/image/1.png') ?>" width="100" height="100">
				<h4 class="login-box-msg mt-3">TRUCER STUDY</h4>
			</div>
			<div class="card-body">
				<form action="<?= base_url('auth/registrasi') ?>" method="post">
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="nim" placeholder="NIM" autocomplete="off" autofocus>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<?= form_error('nim', '<div class="text-danger small ml-2" >', '</div>'); ?>
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="nama" placeholder="Full name" autocomplete="off" autofocus>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<?= form_error('nama', '<div class="text-danger small ml-2" >', '</div>'); ?>
					<div class="input-group mb-3">
						<input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<?= form_error('email', '<div class="text-danger small ml-2" >', '</div>'); ?>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Username" name="username" autocomplete="off">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<?= form_error('username', '<div class="text-danger small ml-2" >', '</div>'); ?>
					<div class="row">
						<div class="col-sm-6">
							<div class="input-group mb-3">
								<input type="password" class="form-control" placeholder="Password" name="password1" autocomplete="off">
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-lock"></span>
									</div>
								</div>
							</div>
							<?= form_error('password1', '<div class="text-danger small ml-2" >', '</div>'); ?>
						</div>
						<div class="col-sm-6">
							<div class="input-group mb-3">
								<input type="password" class="form-control" placeholder="Retype password" name="password2" autocomplete="off">
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-lock"></span>
									</div>
								</div>
							</div>
							<?= form_error('password2', '<div class="text-danger small ml-2" >', '</div>'); ?>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-8">
						</div>
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Register</button>
						</div>
						<!-- /.col -->
					</div>
				</form>

				<p>Sudah punya akun ?
					<a href="<?= base_url('auth/login') ?>" class="text-center">Login</a>
				</p>
			</div>
		</div>
		<!-- /.form-box -->
	</div><!-- /.card -->
	</div>
	<!-- /.register-box -->
