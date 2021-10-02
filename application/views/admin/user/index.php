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
 							<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal-xl">
 								Tambah
 							</button>
 						</div>
 						<!-- /.card-header -->
 						<div class="card-body">
 							<table id="example1" class="table table-bordered table-striped">
 								<thead>
 									<tr>
 										<th>NIM</th>
 										<th>Nama Lengkap</th>
 										<th>Email</th>
 										<th>Username</th>
 										<th>Password</th>
 										<th>Role</th>
 										<th>Aksi</th>
 									</tr>
 								</thead>
 								<tbody>
 									<?php
										foreach ($users as $us) : ?>
 										<tr>
 											<td><?= $us['nim']; ?></td>
 											<td><?= $us['nama']; ?></td>
 											<td><?= $us['email']; ?></td>
 											<td><?= $us['username']; ?></td>
 											<td><?= $us['password']; ?></td>
 											<td><?= $us['role_id']; ?></td>
 											<td>
 												<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modal-edit-<?= $us['id'] ?>"><i class="fa fa-edit"></i></a>
 												<!-- <a class="btn btn-danger hapus" href="#" data-link="<?= base_url('admin/user/hapus/' . $us['id']); ?>"><i class="fa fa-trash"></i></a> -->
 												<a class="btn btn-danger hapus" href="<?= base_url('admin/user/hapus/' . $us['id']); ?>" onclick="return confirm('Yakin Data Akan Dihapus');"><i class="fa fa-trash"></i></a>
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

 <div class="modal fade" id="modal-xl">
 	<div class="modal-dialog modal-lg">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h4 class="modal-title">Tambah Data User</h4>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<div class="modal-body">
 				<form method="post" action="<?= base_url('admin/user/tambah') ?>">
 					<div class="row">
 						<div class="col-sm-12">
 							<div class="form-group">
 								<label for="exampleInputBorder">NIM<code></code></label>
 								<input type="number" class="form-control " id="nim" name="nim" placeholder="Masukan NIM">
 							</div>
 							<div class="form-group">
 								<label for="exampleInputBorder">Nama Lengkap<code></code></label>
 								<input type="text" class="form-control " id="nama" name="nama" placeholder="Masukan nama..">
 							</div>
 							<div class="form-group">
 								<label for="exampleInputBorder">Email<code></code></label>
 								<input type="email" class="form-control " id="email" name="email" placeholder="Masukan email">
 							</div>
 							<div class="form-group">
 								<label for="exampleInputBorder">Username<code></code></label>
 								<input type="email" class="form-control " id="username" name="username" placeholder="Masukan username" readonly>
 							</div>
 							<div class="form-group">
 								<label for="exampleInputBorder">Password<code></code></label>
 								<input type="text" class="form-control " id="password1" name="password1" placeholder="Masukan password" readonly>
 							</div>
 						</div>

 					</div>
 					<div class="modal-footer justify-content-between">
 						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 						<button type="submit" class="btn btn-primary tambah">Simpan</button>
 					</div>
 				</form>
 			</div>
 		</div>
 		<!-- /.modal-content -->
 	</div>
 	<!-- /.modal-dialog -->
 </div>
 <!-- Modal edit Data -->
 <?php foreach ($users as $us) { ?>
 	<div class="modal fade" id="modal-edit-<?= $us['id'] ?>">
 		<div class="modal-dialog">
 			<div class="modal-content">
 				<div class="modal-header bg-gray">
 					<h4 class="modal-title"> Form Edit <?= $title ?></h4>
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 						<span aria-hidden="true">&times;</span></button>
 				</div>
 				<div class="modal-body">

 					<form action="<?= base_url('admin/user/edit/' . $us['id']); ?>" method="post">
 						<div class="box-body">
 							<div class="form-group">
 								<label for="kat">NIM</label>
 								<input class="form-control" type="text" name="nim" id="nim" value="<?= $us['nim'] ?>" required>
 							</div>
 							<div class="form-group row">
 								<div class="col-md-7">
 									<label for="tgl">Nama Lengkap</label>
 									<input type="text" name="nama" class="form-control" id="nama" value="<?= $us['nama'] ?>" required>
 								</div>
 								<div class="col-md-5">
 									<label for="jam">Email</label>
 									<input type="email" name="email" class="form-control" id="email" value="<?= $us['email'] ?>" required>
 								</div>
 							</div>
 							<div class="form-group">
 								<label for="tempat">Usernmae</label>
 								<input type="text" name="username" id="username" class="form-control" id="username" value="<?= $us['username'] ?>">
 							</div>
 							<div class="form-group">
 								<label for="firman">Password</label>
 								<input type="password" name="password" class="form-control" id="password" value="<?= $us['password'] ?>">
 							</div>
 							<button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
 						</div>
 					</form>
 				</div>
 			</div>
 		</div>
 	</div>
 <?php } ?>
 <!-- /.modal edit data -->