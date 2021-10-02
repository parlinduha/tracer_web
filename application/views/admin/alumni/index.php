 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<section class="content-header">
 		<div class="container-fluid">
 			<div class="row mb-2">
 				<div class="col-sm-6">
 					<h1><?= $title; ?></h1>
 				</div>
 			</div>
 		</div><!-- /.container-fluid -->
 	</section>

 	<!-- Main content -->
 	<section class="content">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-12">
 					<?= $this->session->flashdata('pesan') ?>
 					<div class="card">
 						<div class="card-header">
 							<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal-lg">
 								Tambah
 							</button>
 						</div>
 						<!-- /.card-header -->
 						<div class="card-body">
 							<table id="example1" class="table table-bordered table-striped">
 								<thead>
 									<tr>
 										<th>NIM</th>
 										<th>Nama</th>
 										<th>Jenis Kelamin</th>
 										<th>Tahun Lulus</th>
 										<th>Status</th>
 										<th>Option</th>
 									</tr>
 								</thead>
 								<tbody>
 									<?php foreach ($alumni as $al) : ?>
 										<tr>
 											<td><?= $al->user_id; ?></td>
 											<td><?= $al->nama_alumni; ?></td>
 											<td><?= $al->jenis_kelamin; ?></td>
 											<td><?= $al->tahun_lulus; ?></td>
 											<td><?= $al->status_pekerjaan; ?></td>
 											<td>
 												<a class="btn btn-default" href="#" data-toggle="modal" data-target="#modal-lihat-<?= $al->id ?>"><i class="fa fa-eye"></i></a>
 												<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modal-edit-<?= $al->id ?>"><i class="fa fa-edit"></i></a>
 												<a class="btn btn-danger hapus" href="<?= base_url('admin/kusioner/hapus/' . $al->id); ?>" onclick="return confirm('Yakin Data Akan Dihapus');"><i class="fa fa-trash"></i></a>
 											</td>
 										</tr>
 									<?php endforeach; ?>
 								</tbody>
 							</table>
 						</div>
 						<!-- /.card-body -->
 					</div>
 					<!-- /.card -->
 				</div>
 				<!-- /.col -->
 			</div>
 			<!-- /.row -->
 		</div>
 		<!-- /.container-fluid -->
 	</section>
 	<!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 <div class="modal fade" id="modal-lg">
 	<div class="modal-dialog modal-lg">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h4 class="modal-title">Tambah Alumni</h4>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<form action="<?= base_url('admin/alumni/tambah') ?>" method="post" id="formAlumni">
 				<div class="modal-body">
 					<div class="row">
 						<div class="col-4">
 							<label for="nim">Nim</label>
 							<input type="text" class="form-control" name="nim" id="nim" placeholder="Nim...">
 						</div>
 						<div class="col-4">
 							<label for="nama_lengkap">Nama Lengkap</label>
 							<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama..." required>
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
 							<input type="text" class="form-control" name="email" id="email" placeholder="Email..." required>
 						</div>
 					</div>
 					<div class="row mt-3">
 						<div class="col-4">
 							<label for="pin">Pin</label>
 							<input type="text" class="form-control" name="pin" id="pin" placeholder="Pin..." required>
 						</div>
 						<div class="col-4">
 							<label for="tahun_lulus">Tahun Lulus</label>
 							<input type="date" class="form-control" name="tahun_lulus" id="tahun_lulus" placeholder="Lulusan..." required>
 						</div>
 						<div class="col-4">
 							<label for="jurusan">Jurusan</label>
 							<input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan..." required>
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
 						<div class="col-4 peker mt-3">
 							<label for="no_telp_kantor">No Telp kantor</label>
 							<input type="text" class="form-control" name="no_telp_kantor" id="no_telp_kantor" placeholder="No telp kantor...">
 						</div>
 					</div>
 				</div>
 				<div class="modal-footer justify-content-between">
 					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 					<button type="submit" class="btn btn-success">Simpan</button>
 				</div>
 			</form>
 		</div>
 		<!-- /.modal-content -->
 	</div>
 	<!-- /.modal-dialog -->
 </div>
 <!-- /.modal-dialog -->
 <!-- Modal edit Data -->
 <?php foreach ($alumni as $us) { ?>
 	<div class="modal fade" id="modal-edit-<?= $al->id ?>">
 		<div class="modal-dialog modal-lg">
 			<div class="modal-content">
 				<div class="modal-header bg-gray">
 					<h4 class="modal-title"> Form Edit <?= $title ?></h4>
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 						<span aria-hidden="true">&times;</span></button>
 				</div>
 				<div class="modal-body">
 					<form action="<?= base_url('admin/alumni/edit/' . $al->id) ?>" method="post" id="formAlumni">
 						<div class="modal-body">
 							<div class="row">
 								<div class="col-4">
 									<label for="nim">Nim</label>
 									<input type="text" class="form-control" name="nim" id="nim" value="<?= $al->user_id ?>" placeholder="Nim..." disabled8n>
 								</div>
 								<div class="col-4">
 									<label for="nama_lengkap">Nama Lengkap</label>
 									<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="<?= $al->nama_alumni ?>" placeholder="Nama..." required>
 								</div>
 								<div class="col-4">
 									<label for="no_telp">Nomor Telepon</label>
 									<input type="text" class="form-control" name="no_telp" id="no_telp" value="<?= $al->no_telepon ?>" placeholder="No Telp..." required>
 								</div>

 							</div>
 							<div class="row mt-3">
 								<div class="col-4">
 									<label for="jenis_kelamin">Jenis Kelamin</label>
 									<select name="jenis_kelamin" id="jenis_kelamin" value="<?= $al->jenis_kelamin ?>" class="form-control" required>
 										<option value="" selected disabled>Pilih ....</option>
 										<option value="" selected> <?= $al->jenis_kelamin ?> </option>
 										<option value="Laki - Laki">Laki - laki</option>
 										<option value="Perempuan">Perempuan</option>
 									</select>
 								</div>
 								<div class="col-4">
 									<label for="alamat">Alamat</label>
 									<input type="text" class="form-control" name="alamat" id="alamat" value="<?= $al->alamat ?>" placeholder="Alamat..." required>
 								</div>
 								<div class="col-4">
 									<label for="email">Email</label>
 									<input type="text" class="form-control" name="email" id="email" value="<?= $al->email ?>" placeholder="Email..." required>
 								</div>
 							</div>
 							<div class="row mt-3">
 								<div class="col-4">
 									<label for="status_pekerjaan">Status Pekerjaan</label>
 									<select name="status_pekerjaan" id="status_pekerjaan" value="<?= $al->status_pekerjaan ?>" class="form-control" required>
 										<option value="" selected disabled>Pilih ....</option>
 										<option value="<?= $al->status_pekerjaan ?>" selected><?= $al->status_pekerjaan; ?></option>
 										<option value="Ya">Sudah bekerja</option>
 										<option value="Tidak">Belum bekerja</option>
 									</select>
 								</div>
 								<div class="col-4 peker">
 									<label for="posisi">Posisi</label>
 									<input type="text" class="form-control" name="posisi" id="posisi" value="<?= $al->bagian ?>" placeholder="Posisi...">
 								</div>
 								<div class="col-4 peker">
 									<label for="alamat_kantor">Alamat kantor</label>
 									<input type="text" class="form-control" name="alamat_kantor" id="alamat_kantor" value="<?= $al->alamat_kantor ?>" placeholder="Alamat kantor...">
 								</div>
 								<div class="col-4 peker mt-3">
 									<label for="no_telp_kantor">No Telp kantor</label>
 									<input type="text" class="form-control" name="no_telp_kantor" id="no_telp_kantor" value="<?= $al->no_telepon_kantor ?>" placeholder="No telp kantor...">
 								</div>
 							</div>
 						</div>
 						<div class="modal-footer justify-content-between">
 							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 							<button type="submit" class="btn btn-success">Simpan</button>
 						</div>
 					</form>
 				</div>
 			</div>
 		</div>
 	</div>
 <?php } ?>
 <!-- /.modal edit data -->

 <?php foreach ($alumni as $al) { ?>
 	<div class="modal fade" id="modal-lihat-<?= $al->id; ?>">
 		<div class="modal-dialog modal-lg">
 			<div class="modal-content">
 				<div class="modal-header bg-gray">
 					<h4 class="modal-title">Detail Data <?= $title ?></h4>
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 						<span aria-hidden="true">&times;</span></button>
 				</div>
 				<div class="modal-body">
 					<table class="table">
 						<tr>
 							<td class="h5">NIM</td>
 							<td class="h5"><?= $al->user_id; ?></td>
 						</tr>
 						<tr>
 							<td class="h5">Nama</td>
 							<td class="h5"><?= $al->nama_alumni; ?></td>
 						</tr>
 						<tr>
 							<td class="h5">Jenis Kelamin</td>
 							<td class="h5"><?= $al->jenis_kelamin; ?></td>
 						</tr>
 						<tr>
 							<td class="h5">No Hp</td>
 							<td class="h5"><?= $al->no_telepon; ?></td>
 						</tr>
 						<tr>
 							<td class="h5">Tahun Lulus</td>
 							<td class="h5"><?= $al->tahun_lulus; ?></td>
 						</tr>
 						<tr>
 							<td class="h5">Email</td>
 							<td class="h5"><?= $al->email; ?></td>
 						</tr>
 						<tr>
 							<td class="h5">Jurusan</td>
 							<td class="h5"><?= $al->jurusan; ?></td>
 						</tr>
 						<tr>
 							<td class="h5">Status Kerja</td>
 							<td class="h5"><?= $al->status_pekerjaan; ?></td>
 						</tr>
 						<tr>
 							<td class="h5">Posisi</td>
 							<td class="h5"><?= $al->bagian; ?></td>
 						</tr>
 						<tr>
 							<td class="h5">No Telp Kantor</td>
 							<td class="h5"><?= $al->no_telepon_kantor; ?></td>
 						</tr>
 						<tr>
 							<td class="h5">Alamat Kantor</td>
 							<td class="h5"><?= $al->alamat_kantor; ?></td>
 						</tr>
 					</table>
 				</div>
 			</div>
 		</div>
 	</div>
 <?php } ?>