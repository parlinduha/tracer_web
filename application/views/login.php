<body class="hold-transition login-page" style="background-image:url(<?= base_url('assets/dist/image/2.jpg') ?>); background-size:cover">
	<div class="login-box">
		<!-- /.login-logo -->
		<div class="card  card-primary">
			<div class="card-header text-center">
				<img src="<?= base_url('assets/dist/image/1.png') ?>" width="200" height="200">
				<h4 class="login-box-msg mt-3">TRACER STUDY</h4>
			</div>
			<div class="card-body">
				<!-- <?= $this->session->flashdata('pesan') ?> -->
				<form action="<?= base_url('auth/login') ?>" method="post">
					<div class="input-group mb-3">
						<input type="text" class="form-control " id="username" placeholder="Enter You Username..." name="username" autocomplete="off">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<?= form_error('username', '<div class="text-danger small ml-2" >', '</div>'); ?>
					<div class="input-group mb-3 mt-3">
						<input type="password" class="form-control " id="password" placeholder="Password" name="password" autocomplete="off">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<?= form_error('password', '<div class="text-danger small ml-2" >', '</div>'); ?>
					<div class="row">
						<div class="col-8">

						</div>
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Login</button>
						</div>
						<!-- /.col -->
					</div>
				</form>

				<!-- <p class="mb-0">Buat akun ?
					<a href="<?= base_url('auth/registrasi') ?>" class="text-center">Registrasi</a>
				</p> -->
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.login-box -->