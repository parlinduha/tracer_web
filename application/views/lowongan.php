<main id="main">
	<section id="about">
		<div class="container">

			<header class="section-header" style="margin-top: 60px;">
				<h3><strong><?= $title; ?></strong></h3>
			</header>

			<div class="row about-container">
				<?php foreach ($lowongan as $low) : ?>
					<div class="card thumbnails" style="float: left; margin-left:20px">
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
	</section><!-- #about -->
</main>

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