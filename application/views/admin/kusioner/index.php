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
 										<th>Judul</th>
 										<th>Peruntukan</th>
 										<th>Option</th>
 									</tr>
 								</thead>
 								<tbody>
 									<?php
										foreach ($kusioner as $us) : ?>
 										<tr>
 											<td><?= $us['judul']; ?></td>
 											<td><?= $us['kuisioner']; ?></td>
 											<td>
 												<a class="btn btn-default" href="<?= base_url('admin/kusioner/detail/' . $us['id_kuisioner']); ?>"><i class=" fa fa-eye"></i></a>
 												<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modal-edit-<?= $us['id_kuisioner'] ?>"><i class="fa fa-edit"></i></a>
 												<a class="btn btn-danger hapus" href="<?= base_url('admin/kusioner/hapus/' . $us['id_kuisioner']); ?>" onclick="return confirm('Yakin Data Akan Dihapus');"><i class="fa fa-trash"></i></a>
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
 				<h4 class="modal-title"><?= $title; ?></h4>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<div class="modal-body">
 				<form method="post" action="<?= base_url('admin/kusioner/tambah') ?>">
 					<div class="row">
 						<div class="col-sm-12">
 							<div class="form-group">
 								<label for="exampleInputBorder">Judul Kusioner<code></code></label>
 								<input type="text" class="form-control " id="judul" name="judul" placeholder="Judul kusioner...">
 							</div>
 							<div class="form-group">
 								<label for="exampleInputBorder">Peruntukan<code></code></label>
 								<input type="text" class="form-control " id="kuisioner" name="kuisioner" placeholder="Peruntukan kusioner..">
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
 </div>
 <!-- Modal edit Data -->
 <?php foreach ($kusioner as $us) { ?>
 	<div class="modal fade" id="modal-edit-<?= $us['id_kuisioner'] ?>">
 		<div class="modal-dialog">
 			<div class="modal-content">
 				<div class="modal-header bg-gray">
 					<h4 class="modal-title"> Form Edit <?= $title ?></h4>
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 						<span aria-hidden="true">&times;</span></button>
 				</div>
 				<div class="modal-body">

 					<form action="<?= base_url('admin/kusioner/edit/' . $us['id_kuisioner']); ?>" method="post">
 						<div class="form-group">
 							<label for="kat">Judul</label>
 							<input class="form-control" type="text" name="judul" id="judul" value="<?= $us['judul'] ?>" required>
 						</div>
 						<div class="form-group">
 							<label for="tgl">Peruntukan</label>
 							<input type="text" name="kuisioner" class="form-control" id="kuisioner" value="<?= $us['kuisioner'] ?>" required>
 						</div>
 						<div class="modal-footer justify-content-between">
 							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 							<button type="submit" class="btn btn-primary tambah">Simpan</button>
 						</div>
 					</form>
 				</div>
 			</div>
 		</div>
 	</div>
 <?php } ?>
 <!-- /.modal edit data -->

 <?php foreach ($list as $us) : ?>
 	<!-- Modal Lihat Data -->
 	<div class="modal fade" id="modal-lihat-<?= $us['id_kuisioner']; ?>">
 		<div class="modal-dialog modal-lg">
 			<div class="modal-content">
 				<div class="modal-header bg-gray">
 					<h4 class="modal-title">Detail <?= $title ?></h4>
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 						<span aria-hidden="true">&times;</span>
 					</button>
 				</div>
 				<div class="modal-body">
 					<h4><?= $us['judul'] ?></h4>

 					<h6>Daftar Pertanyaan</h6>
 				</div>
 			</div>
 		</div>
 		<!-- /.modal lihat data -->
 	<?php endforeach; ?>
