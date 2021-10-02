<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0"><?= $title; ?></h1>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-sm-12">
				<?php foreach ($lowongan as $low) : ?>
					<div class="card" style="float: left; margin-left:20px">
						<img src="<?= base_url('assets/dist/image/5.jpeg') ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title"><?= $low['bagian'] ?></h5>
							<p class="card-text"><?= $low['Nama_PT'] ?></p>
							<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-lihat-<?= $low['id'] ?>">Detail</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<?php foreach ($lowongan as $low) { ?>
	<div class="modal fade" id="modal-lihat-<?= $low['id'] ?>">
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
							<td><?= $low['Nama_PT']; ?></td>
						</tr>
						<tr>
							<td>Posisi</td>
							<td><?= $low['bagian']; ?></td>
						</tr>
						<tr>
							<td>Nama Pic</td>
							<td><?= $low['nama_narahubung']; ?></td>
						</tr>
						<tr>
							<td>Kontak Pic</td>
							<td><?= $low['no_narahubung']; ?></td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td></td>
						</tr>
						<tr>
							<td><?= $low['keterangan']; ?></td>
							<td></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php } ?>