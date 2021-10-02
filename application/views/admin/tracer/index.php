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
			<!-- Main row -->
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
										<th>Prodi</th>
										<th>Tahun Lulus</th>
										<th>Email</th>
										<th>No hp</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($tracer as $tr) : ?>
										<tr>
											<td><?= $tr['nim']; ?></td>
											<td><?= $tr['nama']; ?></td>
											<td><?= $tr['prodi']; ?></td>
											<td><?= $tr['tahun_lulus']; ?></td>
											<td><?= $tr['email']; ?></td>
											<td><?= $tr['nohp']; ?></td>
											<td>
												<a class="btn btn-success" href="#" data-toggle="modal" data-target="#modal-lihat-<?= $tr['id'] ?>"><i class="fa fa-eye"></i></a>
												<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modal-edit-<?= $tr['id'] ?>"><i class="fa fa-edit"></i></a>
												<a class="btn btn-danger hapus" href="<?= base_url('admin/tracer/hapus/' . $tr['id']); ?>" onclick="return confirm('Yakin Data Akan Dihapus');"><i class="fa fa-trash"></i></a>
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
			<!-- /.row (main row) -->
			</ddiv><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>

<div class="modal fade" id="modal-lg">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Data Tracer</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="<?= base_url('admin/tracer/tambah') ?>">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group row">
									<label for="inputEmail" class="col-sm-2 col-form-label">NIM</label>
									<div class="col-sm-10">
										<input type="number" maxlength="8" pattern=".{8}" name="nim" class="form-control" id="inputEmail" placeholder="Contoh : 1741...">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
									<div class="col-sm-10">
										<input type="text" name="nama" class="form-control" id="inputEmail" placeholder="Contoh : Doe Joe">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Prodi</label>
									<div class="form-group ml-2">
										<select class="form-control select" name="prodi">
											<option selected="selected">Pilih Prodi</option>
											<option value="Ilmu kesejahteraan sosial S-1">Ilmu kesejahteraan sosial S-1</option>
											<option value="Ilmu kesejahteraan sosial S-2">Ilmu kesejahteraan sosial S-2</option>
											<option value="ilmu komunikasi">Ilmu Komunikasi</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputEmail" class="col-sm-2 col-form-label">Tahun lulus</label>
									<div class="col-sm-10">
										<input type="number" pattern="^\d{4}$" class="form-control" name="tahun_lulus" id="inputEmail" placeholder="Contoh : 2021">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
									<div class="col-sm-10">
										<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="joe@gmail.com" class="form-control" name="email" id="inputEmail" placeholder="Contoh : joe@gmail.com">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputEmail" class="col-sm-2 col-form-label">No hp</label>
									<div class="col-sm-10">
										<input type="tel" name="nohp" pattern="^(\+62|62|0)8[1-9][0-9]{6,9}$" class="form-control" id="inputEmail" placeholder="Contoh : 08xxxx">
									</div>
								</div>
								<div>
									<hr style="margin-top:20px">
								</div>
								<div class="col-sm-12">
									<h4><strong>Pertanyaan Kusioner Wajib</strong></h4>
								</div>
								<!-- Pertanyaan-1 -->
								<div class="col-sm-12">
									<h6 class=""><strong>1. Jelaskan Status Anda saat ini ?</strong></h6> <!-- radio -->
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_1" id="1a" value="Bekerja (Full time/part time)">
											<label for="1a">
												Bekerja (Full time/part time)
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_1" id="1b" value="Wiraswasta">
											<label for="1b">
												Wiraswasta
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_1" id="1c" value="Melanjutkan pendidikan">
											<label for="1c">
												Melanjutkan pendidikan
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_1" id="1d" value="Tidak kerja tetapi sedang mencari kerja">
											<label for="1d">
												Tidak kerja tetapi sedang mencari kerja
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_1" id="1e" value="Belum memungkinkan bekerja">
											<label for="1e">
												Belum memungkinkan bekerja
											</label>
										</div>
									</div>
								</div>
								<!-- end pertanyaan -1  -->
								<hr>
								<!--  pertanyaan -2  -->
								<div class="col-sm-12">
									<h6 class=""><strong>2. Apakah Anda telah mendapatkan pekerjaan kurang lebih dari 6 bulan / termasuk bekerja sebelum lulus ?</strong></h6>
									<!-- radio -->
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_2" id="2a" value="Ya">
											<label for="2a">
												Ya
											</label>
										</div>
									</div>
									<!-- radio -->
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_2" id="2b" value="Tidak">
											<label for="2b">
												Tidak
											</label>
										</div>
									</div>
								</div>
								<!-- end pertanyaan -2  -->
								<!--  pertanyaan -3  -->
								<div class="col-sm-12">
									<h6 class=""><strong>3. Berapa rata-rata pendapatan anda perbulan ?</strong></h6>
									<div class="form-group row">
										<div class="col-sm-10"><strong>
												<input type="number" name="pertanyaan_3" class="form-control" id="inputEmail" placeholder="Rp.">
										</div>
									</div>
								</div>
								<!-- end pertanyaan -3  -->
								<hr>
								<!-- pertanyaan -4  -->
								<div class="col-sm-12">
									<h6 class=""><strong>4. Apa jenis perusahaan tempat anda bekerja sekarang ?</strong></h6>

									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_4" value="Instansi pemerintah" id="4a">
											<label for="4a">
												Instansi pemerintah
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_4" value="BUMN/BIMD" id="bumn">
											<label for="bumn">
												BUMN/BIMD
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_4" value="Institusi/Organisasi Bilateral" id="institusi">
											<label for="institusi">
												Institusi/Organisasi Bilateral
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_4" value="Organisasi non-profit/lembaga swadaya masyarakt" id="lsm">
											<label for="lsm">
												Organisasi non-profit/lembaga swadaya masyarakt
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_4" value="Perusahaan Swasta" id="swasta">
											<label for="swasta">
												Perusahaan Swasta
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_4" value="Wiraswasta/perusahaan sendiri" id="wiraswasta">
											<label for="wiraswasta">
												Wiraswasta/perusahaan sendiri
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_4" value="Lainnya" id="lainnya">
											<label for="lainnya">
												Lainnya
											</label>
										</div>
									</div>
								</div>
								<!-- end pertanyaan -4  -->
								<hr>
								<!--  pertanyaan -5  -->
								<div class="col-sm-12">
									<h6><strong>5. Apa nama perusahaan tempat anda bekerja ?</strong></h6>
									<div class="form-group row">
										<div class="col-sm-10">
											<input type="text" name="pertanyaan_5" class="form-control" id="inputEmail" placeholder="">
										</div>
									</div>
								</div>
								<!-- end pertanyaan -5  -->
								<hr>
								<!-- end pertanyaan -6  -->
								<div class="col-sm-12">
									<h6><strong>6. Apa posisi jabatan anda di tempat kerja ?</strong></h6>
									<div class="form-group row">
										<div class="col-sm-10">
											<input type="text" name="pertanyaan_6" class="form-control" id="inputEmail" placeholder="">
										</div>
									</div>
								</div>
								<!-- end pertanyaan -6  -->
								<hr>
								<!--  pertanyaan -7  -->
								<div class="col-sm-12">
									<h6><strong>7. Sebutkan sumber dana dalam pembiayaan kuliah ?</strong></h6>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_7" value="Biaya sendiri/keluarga" id="7a">
											<label for="7a">
												Biaya sendiri/keluarga
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_7" value="Beasiswa ADIK" id="7b">
											<label for="7b">
												Beasiswa ADIK
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_7" value="Beasiswa BIDIKMISI" id="7c">
											<label for="7c">
												Beasiswa BIDIKMISI
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_7" value="Beasiswa PPA" id="7e">
											<label for="7e">
												Beasiswa PPA
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_7" value="Beasiswa AFIRMASI" id="7f">
											<label for="7f">
												Beasiswa AFIRMASI
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_7" value="Beasiswa perusahaan/swasta" id="7g">
											<label for="7g">
												Beasiswa perusahaan/swasta
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_7" value="Lainnya" id="7h">
											<label for="7h">
												Lainnya
											</label>
										</div>
									</div>
								</div>
								<!-- end pertanyaan -7  -->
								<hr>
								<!-- pertanyaan -8  -->
								<div class="col-sm-12">
									<h6><strong>8. Seberapa erat hubungan antara bidang studi dengan pekerjaan anda ? </strong></h6>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_8" value="Sangat erat" id="8a">
											<label for="8a">
												Sangat erat
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_8" value="Erat" id="8b">
											<label for="8b">
												Erat
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_8" value="Cukup erat" id="8c">
											<label for="8c">
												Cukup erat
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_8" value="Kurang erat" id="8d">
											<label for="8d">
												Kurang erat
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_8" value="Tidak sama sekali" id="8e">
											<label for="8e">
												Tidak sama sekali
											</label>
										</div>
									</div>
								</div>
								<!-- end pertanyaan -8  -->
								<hr>
								<!--  pertanyaan -9  -->
								<div class="col-sm-12">
									<h6><strong>9. Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</strong></h6>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_9" value="Setingkat lebih tingi" id="9a">
											<label for="9a">
												Setingkat lebih tingi
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_9" value="Tingkat yang sama" id="9b">
											<label for="9b">
												Tingkat yang sama
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_9" value="Setingkat lebih rendah" id="9c">
											<label for="9c">
												Setingkat lebih rendah
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_9" value="Tidak perlu pendidikan tinggi" id="9d">
											<label for="9d">
												Tidak perlu pendidikan tinggi
											</label>
										</div>
									</div>
								</div>
								<!-- end pertanyaan -9  -->
								<hr>
								<!-- pertanyaan -10  -->
								<div class="row">
									<!-- <div class="col-sm-12"> -->
									<div class="col-sm-6" style="float:left">
										<h6><strong>10. Menurut anda seberapa besar penekanan pada metode pembelajaran dibawah ini dilaksanakan pada program studi anda ?</strong></h6>
									</div>
									<div class="col-sm-6">
										<h6 class="mb-3"><strong>Perkuliahan</strong></h6>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_10" value="Sangat Besar" id="10a">
												<label for="10a">
													Sangat Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_10" value="Besar" id="10b">
												<label for="10b">
													Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_10" value="Cukup Besar" id="10c">
												<label for="10c">
													Cukup Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_10" value="Kurang" id="10d">
												<label for="10d">
													Kurang
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_10" value="Tidak sama sekali" id="10e">
												<label for="10e">
													Tidak sama sekali
												</label>
											</div>
										</div>
										<h6 class="mb-3"><strong>Demonstrasi</strong></h6>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_11" value="Sangat Besar" id="11a">
												<label for="11a">
													Sangat Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_11" value="Besar" id="11b">
												<label for="11b">
													Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_11" value="Cukup Besar" id="11c">
												<label for="11c">
													Cukup Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_11" value="Kurang" id="11d">
												<label for="11d">
													Kurang
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_11" value="Tidak sama sekali" id="11e">
												<label for="11e">
													Tidak sama sekali
												</label>
											</div>
										</div>
										<h6 class="mb-3"><strong>Partisipasi dalam proyek riset</strong></h6>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_12" value="Sangat Besar" id="12a">
												<label for="12a">
													Sangat Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_12" value="Besar" id="12b">
												<label for="12b">
													Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_12" value="Cukup Besar" id="12c">
												<label for="12c">
													Cukup Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_12" value="Kurang" id="12d">
												<label for="12d">
													Kurang
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_12" value="Tidak sama sekali" id="12e">
												<label for="12e">
													Tidak sama sekali
												</label>
											</div>
										</div>
										<h6 class="mb-3"><strong>Magang</strong></h6>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_13" value="Sangat Besar" id="13a">
												<label for="13a">
													Sangat Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_13" value="Besar" id="13b">
												<label for="13b">
													Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_13" value="Cukup Besar" id="13c">
												<label for="13c">
													Cukup Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_13" value="Kurang" id="13d">
												<label for="13d">
													Kurang
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_13" value="Tidak sama sekali" id="13e">
												<label for="13e">
													Tidak sama sekali
												</label>
											</div>
										</div>
										<h6 class="mb-3"><strong>Praktikum</strong></h6>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_14" value="Sangat Besar" id="14a">
												<label for="14a">
													Sangat Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_14" value="Besar" id="14b">
												<label for="14b">
													Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_14" value="Cukup Besar" id="14c">
												<label for="14c">
													Cukup Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_14" value="Kurang" id="14d">
												<label for="14d">
													Kurang
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_14" value="Tidak sama sekali" id="14e">
												<label for="14e">
													Tidak sama sekali
												</label>
											</div>
										</div>
										<h6 class="mb-3"><strong>Kerja Lapangan</strong></h6>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_15" value="Sangat Besar" id="15a">
												<label for="15a">
													Sangat Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_15" value="Besar" id="15b">
												<label for="15b">
													Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_15" value="Cukup Besar" id="15c">
												<label for="15c">
													Cukup Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_15" value="Kurang" id="15d">
												<label for="15d">
													Kurang
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_15" value="Tidak sama sekali" id="15e">
												<label for="15e">
													Tidak sama sekali
												</label>
											</div>
										</div>
										<h6 class="mb-3"><strong>Diskusi</strong></h6>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_16" value="Sangat Besar" id="16a">
												<label for="16a">
													Sangat Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_16" value="Besar" id="16b">
												<label for="16b">
													Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_16" value="Cukup Besar" id="16c">
												<label for="16c">
													Cukup Besar
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_16" value="Kurang" id="16d">
												<label for="16d">
													Kurang
												</label>
											</div>
										</div>
										<div class="form-group clearfix">
											<div class="icheck-success d-inline">
												<input type="radio" name="pertanyaan_16" value="Tidak sama sekali" id="16e">
												<label for="16e">
													Tidak sama sekali
												</label>
											</div>
										</div>
									</div>
								</div>
								<!-- end pertanyaan -10  -->
								<hr>
								<!-- pertanyaan -11  -->
								<div class="col-sm-12">
									<h6><strong>11. Kapan Anda mulai mencari pekerjaan ?</strong></h6>
									<div class="form-group ">
										<select class="form-control select" name="pertanyaan_17">
											<option selected="selected" class="pb-3"> -Pilih</option>
											<option value="Kira-kira 1-4 bulan sebelum lulus">Kira-kira 1-4 bulan sebelum lulus</option>
											<option value="Kira-kira 5-9 bulan sebelum lulus">Kira-kira 5-9 bulan sebelum lulus</option>
											<option value="Kira-kira 10 lebih bulan sebelum lulus">Kira-kira 10 lebih bulan sebelum lulus</option>
											<option value="Kira-kira 1-4 bulan sebelum lulus">Kira-kira 1-4 bulan sebelum lulus</option>
											<option value="Kira-kira 5-9 bulan sesudah lulus">Kira-kira 5-9 bulan sesudah lulus</option>
											<option value="Kira-kira 10 lebih bulan sesudah lulus">Kira-kira 10 lebih bulan sesudah lulus</option>
										</select>
									</div>
								</div>
								<!-- end pertanyaan -11  -->
								<hr>
								<!-- pertanyaan -12  -->
								<div class="col-sm-12">
									<h6><strong>12. Bagaimana Anda bisa mencari pekerjaan tersebut ? <i>jawaban bisa lebih dari satu</i></strong></h6>
									<div class="form-group">
										<select class="select2" multiple="multiple" name="pertanyaan_18" data-placeholder="Select a State" style="width: 100%;">
											<option value="Melalui Iklan di koran/majala, brosur">Melalui Iklan di koran/majala, brosur</option>
											<option value="Melamar ke perusahaan tanpa mengetahui lowongan yang ada">Melamar ke perusahaan tanpa mengetahui lowongan yang ada</option>
											<option value="Pergi ke bursa atau pameran kerja">Pergi ke bursa atau pameran kerja</option>
											<option value="Mencari lewat internet/iklan online">Mencari lewat internet/iklan online</option>
											<option value="Dihubungi oleh perusahaan">Dihubungi oleh perusahaan</option>
											<option value="Menghubungi kemenakertrans">Menghubungi kemenakertrans</option>
											<option value="Menghubungi agen tenaga kerja komersial/swasta">Menghubungi agen tenaga kerja komersial/swasta</option>
											<option value="Memperoleh perusahaan dari pusat/kantor pengembangan karir fakultas/univeritas">Memperoleh perusahaan dari pusat/kantor pengembangan karir fakultas/univeritas</option>
											<option value="Menghubungi kantor kemahasiswaan/hubungi alumni">Menghubungi kantor kemahasiswaan/hubungi alumni</option>
											<option value="Membangun jejaring sewaktu masih kuliah">Membangun jejaring sewaktu masih kuliah</option>
											<option value="Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll)">Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll)</option>
											<option value="Membangun bisnis sendiri">Membangun bisnis sendiri</option>
											<option value="Melalui penempatan kerja atau magang">Melalui penempatan kerja atau magang</option>
											<option value="Bekerja di tempat yang sama semasa masih kuliah">Bekerja di tempat yang sama semasa masih kuliah</option>
											<option value="Lainnya">Lainnya</option>
										</select>
									</div>
								</div>
								<!-- end pertanyaan -12  -->
								<hr>
								<!-- pertanyaan -13  -->
								<div class="col-sm-12">
									<h6><strong>13. Berapa perusahaan yang sudah anda lamar sebelum memperoleh pekerjaan pertama ?</strong></h6>
									<div class="form-group row">
										<div class="col-sm-10">
											<input type="number" name="pertanyaan_19" class="form-control" id="inputEmail" placeholder="">
										</div>
									</div>
								</div>
								<!-- end pertanyaan -13  -->
								<hr>
								<!-- pertanyaan -14  -->
								<div class="col-sm-12">
									<h6><strong>14. Berapa banyak perusahaan yang merespon lamaran anda ?</strong></h6>
									<div class="form-group row">
										<div class="col-sm-10">
											<input type="number" name="pertanyaan_20" class="form-control" id="inputEmail" placeholder="">
										</div>
									</div>
								</div>
								<!-- end pertanyaan -14  -->
								<hr>
								<!-- pertanyaan -15  -->
								<div class="col-sm-12">
									<h6><strong>15. Berapa banyak perusahaan yang mengundang anda wawancara ?</strong></h6>
									<div class="form-group row">
										<div class="col-sm-10">
											<input type="number" name="pertanyaan_21" class="form-control" id="inputEmail" placeholder="">
										</div>
									</div>
								</div>
								<!-- end pertanyaan -15  -->
								<hr>
								<!-- pertanyaan -16  -->
								<div class="col-sm-12">
									<h6><strong>16. Bagaiamana anda menggambarkan situasi anda saat ini ? <i>jawaban bisa dipilih lebih dari satu</i></strong></h6>
									<div class="form-group">
										<select class="select2" multiple="multiple" name="pertanyaan_22" data-placeholder="Select a State" style="width: 100%;">
											<option value="Saya masih belajar/ melanjutkan kuliah profesi atau pascasarjana">Saya masih belajar/ melanjutkan kuliah profesi atau pascasarjana</option>
											<option value="Saya menikah">Saya menikah</option>
											<option value="Saya sibuk dengan keluarga dan anak-anak">Saya sibuk dengan keluarga dan anak-anak</option>
											<option value="Saya sekarang sedang mencari pekerjaan">Saya sekarang sedang mencari pekerjaan</option>
											<option value="Lainnya">Lainnya</option>
										</select>
									</div>
								</div>
								<!-- end pertanyaan -16  -->
								<hr>
								<!-- pertanyaan -17  -->
								<div class="col-sm-12">
									<h6><strong>17. Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir ?</strong></h6>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_23" value="Tidak" id="23a">
											<label for="23a">
												Tidak
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_23" value="Tidak, Tapi saya sedang menunggu hasil lamaran kerja" id="23b">
											<label for="23b">
												Tidak, Tapi saya sedang menunggu hasil lamaran kerja
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_23" value="Ya , Saya akan memulai bekerja 2 minggu kedepan" id="23c">
											<label for="23c">
												Ya , Saya akan memulai bekerja 2 minggu kedepan
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_23" value="Ya, Tapi saya belum pasti akan bekerja dalam 2 minggu kedepan" id="23d">
											<label for="23d">
												Ya, Tapi saya belum pasti akan bekerja dalam 2 minggu kedepan
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="pertanyaan_23" value="Lainnya" id="23e">
											<label for="23e">
												Lainnya
											</label>
										</div>
									</div>
								</div>
								<!-- end pertanyaan -17  -->
								<hr>
								<!-- pertanyaan -18  -->
								<div class="col-sm-12">
									<h6><strong>18. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya ? <i>jawaban bisa lebih dari satu</i>
										</strong>
									</h6>
									<div class="form-group">
										<select class="select2" multiple="multiple" name="pertanyaan_24" data-placeholder="Select a State" style="width: 100%;">
											<option value="Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya">Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya</option>
											<option value="Saya belum mendapatkan pendidikan yang lebih sesuai">Saya belum mendapatkan pendidikan yang lebih sesuai</option>
											<option value="Di pekerjaan ini saya memperoleh prospek karir yang baik">Di pekerjaan ini saya memperoleh prospek karir yang baik</option>
											<option value="Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya">Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya</option>
											<option value="Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya">Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya</option>
											<option value="Saya dapat memperoleh pendapatan yang lebih tinggi dari pekerjaan ini">Saya dapat memperoleh pendapatan yang lebih tinggi dari pekerjaan ini</option>
											<option value="pekerjaan saya saat ini lebih aman/terjamin/secure">pekerjaan saya saat ini lebih aman/terjamin/secure</option>
											<option value="Pekerjaan saya saat ini lebih menarik">Pekerjaan saya saat ini lebih menarik</option>
											<option value="Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel">Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel</option>
											<option value="Pekerjaan saya saat ini lokasinya lebih dekat dengan rumah saya">Pekerjaan saya saat ini lokasinya lebih dekat dengan rumah saya</option>
											<option value="Pekerjaan saya saat ini lebih menjamin kebutuhan keluarga saya">Pekerjaan saya saat ini lebih menjamin kebutuhan keluarga saya</option>
											<option value="Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya">Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya </option>
											<option value="Lainnya">Lainnya</option>
										</select>
									</div>
								</div>
								<!-- end pertanyaan -18  -->

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
	</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- Modal edit Data -->
<!-- <?php foreach ($users as $us) { ?>
	<div class="modal fade" id="modal-edit-<?= $us['id'] ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-gray">
					<h4 class="modal-title"> Form Edit <?= $title ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">

					<form action="<?= base_url('user/edit/' . $us['id']); ?>" method="post">
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
								<input type="text" name="username" class="form-control" id="username" value="<?= $us['username'] ?>" required>
							</div>
							<div class="form-group">
								<label for="firman">Password</label>
								<input type="password" name="password" class="form-control" id="password" value="<?= $us['password'] ?>" readonly>
							</div>
							<button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php } ?> -->

<?php foreach ($tracer as $tr) { ?>
	<div class="modal fade" id="modal-lihat-<?= $tr['id'] ?>">
		<div class="modal-dialog modal-lg ">
			<div class="modal-content">
				<div class="modal-header bg-gray">
					<h4 class="modal-title"> Detail <?= $title ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<table class="table table-striped">
						<tr>
							<h5><strong>Data diri</strong></h5>
						</tr>
						<tr>
							<td>Nim</td>
							<td><?= $tr['nim'] ?></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td><?= $tr['nama'] ?></td>
						</tr>
						<tr>
							<td>Prodi</td>
							<td><?= $tr['prodi'] ?></td>
						</tr>
						<tr>
							<td>Tahun Lulus</td>
							<td><?= $tr['tahun_lulus'] ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?= $tr['email'] ?></td>
						</tr>
						<tr>
							<td>No hp</td>
							<td><?= $tr['nohp'] ?></td>
						</tr>
						<tr>
							<td>
								<hr>
							</td>
						</tr>
						<tr>
							<td>
								<h5><strong>List Pertanyaan Kuisioner</strong></h5>
							</td>
							<td>
								<h5><strong>Jawaban</strong></h5>
							</td>
						</tr>
						<tr>
							<td>Jelaskan Status Anda saat ini ?</td>
							<th><?= $tr['pertanyaan_1']; ?></th>
						</tr>
						<tr>
							<td>Apakah Anda telah mendapatkan pekerjaan kurang lebih dari 6 bulan / termasuk bekerja sebelum lulus ?</td>
							<th><?= $tr['pertanyaan_2']; ?></th>
						</tr>
						<tr>
							<td>Berapa rata-rata pendapatan anda perbulan ?</td>
							<th><?= $tr['pertanyaan_3']; ?></th>
						</tr>
						<tr>
							<td>Apa jenis perusahaan tempat anda bekerja sekarang ?</td>
							<th><?= $tr['pertanyaan_4']; ?></th>
						</tr>
						<tr>
							<td>Apa nama perusahaan tempat anda bekerja ?</td>
							<th><?= $tr['pertanyaan_5']; ?></th>
						</tr>
						<tr>
							<td>Apa posisi jabatan anda di tempat kerja ?</td>
							<th><?= $tr['pertanyaan_6']; ?></th>
						</tr>
						<tr>
							<td>Sebutkan sumber dana dalam pembiayaan kuliah ?</td>
							<th><?= $tr['pertanyaan_7']; ?></th>
						</tr>
						<tr>
							<td>Seberapa erat hubungan antara bidang studi dengan pekerjaan anda ?</td>
							<th><?= $tr['pertanyaan_8']; ?></th>
						</tr>
						<tr>
							<td>Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</td>
							<th><?= $tr['pertanyaan_9']; ?></th>
						</tr>
						<tr>
							<td>Menurut anda seberapa besar penekanan pada metode pembelajaran dibawah ini dilaksanakan pada program studi anda ?</td>
							<td></td>
						<tr>
							<td>Perkuliahan</td>
							<th><?= $tr['pertanyaan_10']; ?></th>
						</tr>
						<tr>
							<td>Demonstrasi</td>
							<th><?= $tr['pertanyaan_11']; ?></th>
						</tr>
						<tr>
							<td>Partisipasi dalam proyek riset</td>
							<th><?= $tr['pertanyaan_12']; ?></th>
						</tr>
						<tr>
							<td>Magang</td>
							<th><?= $tr['pertanyaan_13']; ?></th>
						</tr>
						<tr>
							<td>Praktikum</td>
							<th><?= $tr['pertanyaan_14']; ?></th>
						</tr>
						<tr>
							<td>Kerja Lapangan</td>
							<th><?= $tr['pertanyaan_15']; ?></th>
						</tr>
						<tr>
							<td>Diskusi</td>
							<th><?= $tr['pertanyaan_16']; ?></th>
						</tr>
						<tr>
							<td>Kapan Anda mulai mencari pekerjaan ?</td>
							<th><?= $tr['pertanyaan_17']; ?></th>
						</tr>
						<tr>
							<td>Bagaimana Anda bisa mencari pekerjaan tersebut ?</td>
							<th><?= $tr['pertanyaan_18']; ?></th>
						</tr>
						<tr>
							<td>Berapa perusahaan yang sudah anda lamar sebelum memperoleh pekerjaan pertama ?</td>
							<th><?= $tr['pertanyaan_19']; ?></th>
						</tr>
						<tr>
							<td>Berapa banyak perusahaan yang merespon lamaran anda ?</td>
							<th><?= $tr['pertanyaan_20']; ?></th>
						</tr>
						<tr>
							<td>Berapa banyak perusahaan yang mengundang anda wawancara ?</td>
							<th><?= $tr['pertanyaan_21']; ?></th>
						</tr>
						<tr>
							<td>Bagaiamana anda menggambarkan situasi anda saat ini ?</td>
							<th><?= $tr['pertanyaan_22']; ?></th>
						</tr>
						<tr>
							<td>Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir ?</td>
							<th><?= $tr['pertanyaan_23']; ?></th>
						</tr>
						<tr>
							<td>Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya ?</td>
							<th><?= $tr['pertanyaan_24']; ?></th>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
<!-- /.modal edit data -->