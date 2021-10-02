<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0"><?= $title ?></h1>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">

					<!-- Profile Image -->
					<div class="card card-primary card-outline">
						<div class="card-body box-profile">
							<div class="text-center">
								<img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/') ?>dist/img/user4-128x128.jpg" alt="User profile picture">
							</div>

							<h3 class="profile-username text-center"><?= $user['nama'] ?></h3>

							<p class="text-muted text-center"><?= $user['nim'] ?> </p>

							<!-- <ul class="list-group list-group-unbordered mb-3">
								<li class="list-group-item">
									<b>Followers</b> <a class="float-right">1,322</a>
								</li>
								<li class="list-group-item">
									<b>Following</b> <a class="float-right">543</a>
								</li>
								<li class="list-group-item">
									<b>Friends</b> <a class="float-right">13,287</a>
								</li>
							</ul> -->

							<!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->

				</div>
				<!-- /.col -->
				<div class="col-md-9">
					<div class="card">
						<div class="card-header p-2">
							<ul class="nav nav-pills">
								<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Akun</a></li>
								<!-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Status Alumni</a></li> -->
								<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Data Diri</a></li>
							</ul>
						</div><!-- /.card-header -->
						<div class="card-body">
							<div class="tab-content">
								<div class="active tab-pane" id="activity">
									<form action="#" method="post" class="form-horizontal">
										<div class="form-group row">
											<label for="inputName" class="col-sm-2 col-form-label">NIM</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputName" name="nim" value="<?= $user['nim'] ?>" placeholder="Name">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputName" class="col-sm-2 col-form-label">Nama Lengkap</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="nama" value="<?= $user['nama'] ?>" id="inputName" placeholder="Name">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" name="email" value="<?= $user['email'] ?>" id="inputEmail" placeholder="Email">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputName2" class="col-sm-2 col-form-label">Username</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputName2" value="<?= $user['username'] ?>" placeholder="Name" readonly>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputExperience" class="col-sm-2 col-form-label">Password Lama</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputSkills" value="<?= $user['password'] ?>">
											</div>
										</div>
										<!-- <div class="form-group row">
											<label for="inputSkills" class="col-sm-2 col-form-label">Password Baru</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputSkills" name="password1" placeholder="">
											</div>
										</div> -->
										<div class="form-group row">
										</div>
										<div class="form-group row">
											<div class="offset-sm-2 col-sm-10">
												<button type="submit" class="btn btn-danger">Submit</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="timeline">
									<!-- The timeline -->

									<table class="table">
										<tr>
											<td class="h5">NIM</td>
											<td class="h5"><?= $alumni['user_id']; ?></td>
										</tr>
										<tr>
											<td class="h5">Nama</td>
											<td class="h5"><?= $alumni['nama_alumni']; ?></td>
										</tr>
										<tr>
											<td class="h5">Jenis Kelamin</td>
											<td class="h5"><?= $alumni['jenis_kelamin']; ?></td>
										</tr>
										<tr>
											<td class="h5">No Hp</td>
											<td class="h5"><?= $alumni['no_telepon']; ?></td>
										</tr>
										<tr>
											<td class="h5">Tahun Lulus</td>
											<td class="h5"><?= $alumni['tahun_lulus']; ?></td>
										</tr>
										<tr>
											<td class="h5">Email</td>
											<td class="h5"><?= $alumni['email']; ?></td>
										</tr>
										<tr>
											<td class="h5">Jurusan</td>
											<td class="h5"><?= $alumni['jurusan']; ?></td>
										</tr>
										<tr>
											<td class="h5">Status Kerja</td>
											<td class="h5"><?= $alumni['status_pekerjaan']; ?></td>
										</tr>
										<tr>
											<td class="h5">Posisi</td>
											<td class="h5"><?= $alumni['bagian']; ?></td>
										</tr>
										<tr>
											<td class="h5">No Telp Kantor</td>
											<td class="h5"><?= $alumni['no_telepon_kantor']; ?></td>
										</tr>
										<tr>
											<td class="h5">Alamat Kantor</td>
											<td class="h5"><?= $alumni['alamat_kantor']; ?></td>
										</tr>
									</table>
								</div>
								<!-- /.tab-pane -->

								<div class="tab-pane" id="settings">
									<form action="<?= base_url('alumni/data_diri/tambah') ?>" method="post" id="formAlumni">
										<div class="modal-body">
											<div class="row">
												<div class="col-4">
													<label for="nim">Nim</label>
													<input type="text" class="form-control" value="<?= $user['nim'] ?>" name="nim" id="nim" placeholder="Nim..." readonly>
												</div>
												<div class="col-4">
													<label for="nama_lengkap">Nama Lengkap</label>
													<input type="text" class="form-control" value="<?= $user['nama'] ?>" name="nama_lengkap" id="nama_lengkap" placeholder="Nama..." required>
												</div>
												<div class="col-4">
													<label for="no_telp">Nomor Telepon</label>
													<input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp..." required>
												</div>

											</div>
											<div class="row mt-3">
												<div class="col-4">
													<label for="jenis_kelamin">Jenis Kelamin</label>
													<select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
														<option value="" selected disabled>Pilih ....</option>
														<option value="Laki - Laki">Laki laki</option>
														<option value="Perempuan">Perempuan</option>
													</select>
												</div>
												<div class="col-4">
													<label for="alamat">Alamat</label>
													<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat..." required>
												</div>
												<div class="col-4">
													<label for="email">Email</label>
													<input type="text" class="form-control" value="<?= $user['email'] ?>" name="email" id="email" placeholder="Email..." required>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-4">
													<label for="tahun_lulus">Tahun Lulus</label>
													<input type="number" class="form-control" name="tahun_lulus" id="tahun_lulus" placeholder="Lulusan..." required>
												</div>
												<div class="col-4">
													<label for="jurusan">Jurusan</label>
													<input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan..." required>
												</div>
												<div class="col-4 peker mt-3">
													<label for="no_telp_kantor">No Telp kantor</label>
													<input type="text" class="form-control" name="no_telp_kantor" id="no_telp_kantor" placeholder="No telp kantor...">
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-4">
													<label for="status_pekerjaan">Status Pekerjaan</label>
													<select name="status_pekerjaan" id="status_pekerjaan" class="form-control" required>
														<option value="" selected disabled>Pilih ....</option>
														<option value="Ya">Sudah bekerja</option>
														<option value="Tidak">Belum bekerja</option>
													</select>
												</div>
												<div class="col-4 peker">
													<label for="posisi">Posisi</label>
													<input type="text" class="form-control" name="posisi" id="posisi" placeholder="Posisi...">
												</div>
												<div class="col-4 peker">
													<label for="alamat_kantor">Alamat kantor</label>
													<input type="text" class="form-control" name="alamat_kantor" id="alamat_kantor" placeholder="Alamat kantor...">
												</div>

											</div>
										</div>
										<div class="modal-footer justify-content-between">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-success">Simpan</button>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
						</div><!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>