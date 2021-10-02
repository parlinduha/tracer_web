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
 					<div class="card">
 						<div class="card-header">
 							<a href="<?= base_url('admin/kusioner/index') ?>" type="button" class="btn btn-xl btn-danger">
 								<i class="fas fa-arrow-alt-circle-left"> Back</i>
 							</a>
 						</div>
 						<!-- /.card-header -->
 						<div class="card-body">
 							<table id="example1" class="table table-bordered table-striped">
 								<thead>
 									<tr>
 										<th>No</th>
 										<th>Pertanyaan</th>
 									</tr>
 								</thead>
 								<tbody>
 									<?php
										$no = 1;
										foreach ($pertanyaan as $us) : ?>
 										<tr>
 											<td><?= $no++ ?></td>
 											<td><?= $us['pertanyaan']; ?></td>
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
