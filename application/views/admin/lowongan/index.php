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
 										<th>Nama PT</th>
 										<th>Posisi</th>
 										<th>PIC</th>
 										<th>Kontak</th>
 										<th>Aksi</th>
 									</tr>
 								</thead>
 								<tbody>
 									<?php
										foreach ($lowongan as $us) : ?>
 										<tr>
 											<td><?= $us['Nama_PT']; ?></td>
 											<td><?= $us['bagian']; ?></td>
 											<td><?= $us['nama_narahubung']; ?></td>
 											<td><?= $us['no_narahubung']; ?></td>
 											<td>
 												<a class="btn btn-success" href="#" data-toggle="modal" data-target="#modal-lihat-<?= $us['id'] ?>"><i class="fa fa-eye"></i></a>
 												<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modal-edit-<?= $us['id'] ?>"><i class="fa fa-edit"></i></a>
 												<!-- <a class="btn btn-danger hapus" href="#" data-link="<?= base_url('admin/user/hapus/' . $us['id']); ?>"><i class="fa fa-trash"></i></a> -->
 												<a class="btn btn-danger hapus" href="<?= base_url('admin/lowongan/hapus/' . $us['id']); ?>" onclick="return confirm('Yakin Data Akan Dihapus');"><i class="fa fa-trash"></i></a>
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
 				<form method="post" action="<?= base_url('admin/lowongan/tambah') ?>">
 					<div class="row">
 						<div class="col-sm-12">
 							<div class="form-group">
 								<label for="exampleInputBorder">Nama PT</label>
 								<input type="text" class="form-control " id="Nama_PT" name="Nama_PT" placeholder="Masukan nama PT">
 							</div>
 							<div class="form-group">
 								<label for="exampleInputBorder">Posisi</label>
 								<input type="text" class="form-control " id="bagian" name="bagian" placeholder="Masukan posisi yang dibutuhkan">
 							</div>
 							<div class="form-group">
 								<label for="exampleInputBorder">PIC</label>
 								<input type="text" class="form-control " id="nama_narahubung" name="nama_narahubung" placeholder="Masukan nama pic">
 							</div>
 							<div class="form-group">
 								<label for="exampleInputBorder">Kontak</label>
 								<input type="tel" class="form-control " id="no_narahubung" name="no_narahubung" placeholder="Masukan kontak pic">
 							</div>
 							<div class="form-group">
 								<label for="exampleInputBorder">Keterangan</label>
 								<textarea type="text" name="keterangan" class="form-control" id="keterangan" cols="30" rows="10"></textarea>
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
 <?php foreach ($lowongan as $us) { ?>
 	<div class="modal fade" id="modal-lihat-<?= $us['id'] ?>">
 		<div class="modal-dialog">
 			<div class="modal-content">
 				<div class="modal-header bg-gray">
 					<h4 class="modal-title"><?= $title ?></h4>
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 						<span aria-hidden="true">&times;</span></button>
 				</div>
 				<div class="modal-body">
 					<table class="table">
 						<tr>
 							<td>Nama PT</td>
 							<td><?= $us['Nama_PT']; ?></td>
 						</tr>
 						<tr>
 							<td>Posisi</td>
 							<td><?= $us['bagian']; ?></td>
 						</tr>
 						<tr>
 							<td>Nama Pic</td>
 							<td><?= $us['nama_narahubung']; ?></td>
 						</tr>
 						<tr>
 							<td>Kontak Pic</td>
 							<td><?= $us['no_narahubung']; ?></td>
 						</tr>
 						<tr>
 							<td>Keterangan</td>
 						</tr>
 						<tr>
 							<td><?= $us['keterangan']; ?></td>
 						</tr>
 					</table>
 				</div>
 			</div>
 		</div>
 	</div>
 <?php } ?>
 <!-- /.modal edit data -->