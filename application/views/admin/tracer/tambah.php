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
				<div class="col-sm-12">
					<H1>Identitas</H1>
					<!-- iCheck -->
					<div class="card card-success">
						<div class="card-body">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group row">
										<label for="inputEmail" class="col-sm-2 col-form-label">NIM</label>
										<div class="col-sm-10">
											<input type="number" name="nim" class="form-control" id="inputEmail" placeholder="">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
										<div class="col-sm-10">
											<input type="text" name="nama" class="form-control" id="inputEmail" placeholder="">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Prodi</label>
										<div class="form-group ml-2">
											<select class="form-control select2" style="width: 100%;">
												<option selected="selected">Pilih Prodi</option>
												<option>Ilmu kesejahteraan sosial S-1</option>
												<option>Ilmu kesejahteraan sosial S-2</option>
												<option>Ilmu Komunikasi</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail" class="col-sm-2 col-form-label">Tahun lulus</label>
										<div class="col-sm-10">
											<input type="date" class="form-control" id="inputEmail" placeholder="">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="inputEmail" placeholder="">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail" class="col-sm-2 col-form-label">No hp</label>
										<div class="col-sm-10">
											<input type="number" class="form-control" id="inputEmail" placeholder="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /.card-body -->
					</div>
					<h2>Tracer Study</h2>
					<h6>Pertanyaan Wajib</h6>
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Jelaskan Status Anda saat ini ?</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-12">
									<!-- radio -->
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="r3" id="radioSuccess1">
											<label for="radioSuccess1">
												Bekerja (Full time/part time)
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="r3" id="radioSuccess2">
											<label for="radioSuccess2">
												Wiraswasta
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="r3" id="radioSuccess3">
											<label for="radioSuccess3">
												Melanjutkan pendidikan
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="r3" id="radioSuccess4">
											<label for="radioSuccess4">
												Tidak kerja tetapi sedang mencari kerja
											</label>
										</div>
									</div>
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="r3" id="radioSuccess5">
											<label for="radioSuccess5">
												Belum memungkinkan bekerja
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /.card-body -->
					</div>
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Apakah Anda telah mendapatkan pekerjaan kurang lebih 6 bulan / termasuk bekerja sebelum lulus ?</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-12">
									<!-- radio -->
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="r3" id="radioSuccess2a">
											<label for="radioSuccess2a">
												Ya
											</label>
										</div>
									</div>
									<!-- radio -->
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" name="r3" id="radioSuccess2b">
											<label for="radioSuccess2b">
												Tidak
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Berapa rata-rata pendapatan anda perbulan ?</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group row">Rp
										<div class="col-sm-10">
											<input type="number" class="form-control" id="inputEmail" placeholder="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Apa jenis perusahaan tempat anda bekerja sekarang ?</h3>
						</div>
						<div class="card-body">
							<div class="col-sm-12">
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="instansi">
										<label for="instansi">
											Instansi pemerintah
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="bumn">
										<label for="bumn">
											BUMN/BIMD
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="institusi">
										<label for="institusi">
											Institusi/Organisasi Bilateral
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Organisasi non-profit/lembaga swadaya masyarakt
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="swasta">
										<label for="swasta">
											Perusahaan Swasta
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="wiraswasta">
										<label for="wiraswasta">
											Wiraswasta/perusahaan sendiri
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lainnya">
										<label for="lainnya">
											Lainnya
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.card -->
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Apa nama perusahaan tempat anda bekerja ?</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group row">
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputEmail" placeholder="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Apa posisi jabatan anda di tempat kerja ?</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group row">
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputEmail" placeholder="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Sebutkan sumber dana dalam pembiayaan kuliah ?</h3>
						</div>
						<div class="card-body">
							<div class="col-sm-12">
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="instansi">
										<label for="instansi">
											Biaya sendiri/keluarga
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="bumn">
										<label for="bumn">
											Beasiswa ADIK
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="institusi">
										<label for="institusi">
											Beasiswa BIDIKMISI
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Beasiswa PPA
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="swasta">
										<label for="swasta">
											Beasiswa AFIRMASI
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="wiraswasta">
										<label for="wiraswasta">
											Beasiswa perusahaan/swasta
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lainnya">
										<label for="lainnya">
											Lainnya
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Seberapa erat hubungan antara bidang studi dengan pekerjaan anda ? </h3>
						</div>
						<div class="card-body">
							<div class="col-sm-12">
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="instansi">
										<label for="instansi">
											Sangat erat
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="bumn">
										<label for="bumn">
											Erat
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="institusi">
										<label for="institusi">
											Cukup erat
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Kurang erat
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="swasta">
										<label for="swasta">
											Tidak sama sekali
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</h3>
						</div>
						<div class="card-body">
							<div class="col-sm-12">
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="instansi">
										<label for="instansi">
											Setingkat lebih tingi
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="bumn">
										<label for="bumn">
											Tingkat yang sama
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="institusi">
										<label for="institusi">
											Setingkat lebih rendah
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Tidak perlu pendidikan tinggi
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Menurut anda seberapa besar penekanan pada metode pembelajaran dibawah ini dilaksanakan pada program studi anda ?</h3>
						</div>
						<div class="card-body">
							<div class="col-sm-12">
								<h4 class="card-title"><strong>Perkuliahan</strong></h4><br><br>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="instansi">
										<label for="instansi">
											Sangat Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="bumn">
										<label for="bumn">
											Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="institusi">
										<label for="institusi">
											Cukup Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Kurang
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Tidak sama sekali
										</label>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<h4 class="card-title"><strong>Demonstrasi</strong></h4><br><br>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="instansi">
										<label for="instansi">
											Sangat Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="bumn">
										<label for="bumn">
											Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="institusi">
										<label for="institusi">
											Cukup Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Kurang
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Tidak sama sekali
										</label>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<h4 class="card-title"><strong>Partisipasi dalam proyek riset</strong></h4><br><br>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="instansi">
										<label for="instansi">
											Sangat Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="bumn">
										<label for="bumn">
											Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="institusi">
										<label for="institusi">
											Cukup Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Kurang
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Tidak sama sekali
										</label>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<h4 class="card-title"><strong>Magang</strong></h4><br><br>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="instansi">
										<label for="instansi">
											Sangat Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="bumn">
										<label for="bumn">
											Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="institusi">
										<label for="institusi">
											Cukup Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Kurang
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Tidak sama sekali
										</label>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<h4 class="card-title"><strong>Praktikum</strong></h4><br><br>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="instansi">
										<label for="instansi">
											Sangat Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="bumn">
										<label for="bumn">
											Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="institusi">
										<label for="institusi">
											Cukup Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Kurang
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Tidak sama sekali
										</label>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<label for="">Kerja Lapangan</label>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="instansi">
										<label for="instansi">
											Sangat Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="bumn">
										<label for="bumn">
											Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="institusi">
										<label for="institusi">
											Cukup Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Kurang
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Tidak sama sekali
										</label>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<label for=""> Diskusi</label>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="instansi">
										<label for="instansi">
											Sangat Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="bumn">
										<label for="bumn">
											Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="institusi">
										<label for="institusi">
											Cukup Besar
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Kurang
										</label>
									</div>
								</div>
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="radio" name="r3" id="lsm">
										<label for="lsm">
											Tidak sama sekali
										</label>
									</div>
								</div>
								<div class="card card-success">
									<div class="card-header">
										<h3 class="card-title">Kapan Anda mulai mencari pekerjaan ?</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group ">
													<select class="form-control select2 ">
														<option selected="selected" class="pb-3"> -Pilih</option>
														<option>Kira-kira 1-4 bulan sebelum lulus</option>
														<option>Kira-kira 5-9 bulan sebelum lulus</option>
														<option>Kira-kira 10 lebih bulan sebelum lulus</option>
														<option>Kira-kira 1-4 bulan sebelum lulus</option>
														<option>Kira-kira 5-9 bulan sesudah lulus</option>
														<option>Kira-kira 10 lebih bulan sesudah lulus</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card card-success">
									<div class="card-header">
										<h3 class="card-title">Bagaimana Anda bisa mencari pekerjaan tersebut ? <i>jawaban bisa lebih dari satu</i></h3>
									</div>
									<div class="card-body">
										<div class="col-sm-12">
											<div class="form-group">
												<select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
													<option>Melalui Iklan di koran/majala, brosur</option>
													<option>Melamar ke perusahaantanpa mengetahui lowongan yang ada</option>
													<option>Pergi ke bursa atau pameran kerja</option>
													<option>Mencari lewat internet/iklan online</option>
													<option>Dihubungi oleh perusahaan</option>
													<option>Menghubungi kemenakertrans</option>
													<option>Menghubungi agen tenaga kerja komersial/swasta</option>
													<option>Memperoleh perusaan dari pusat/kantor pengembangan karir fakultas/univeritas</option>
													<option>Menghubungi kantor kemahasiswaan/hubungi alumni</option>
													<option>Membangun jejaring sewaktu masih kuliah</option>
													<option>Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll)</option>
													<option>Membangun bisnis sendiri</option>
													<option>Melalui penempatan kerja atau magang</option>
													<option>Bekerja di tempat yang sama semasa masih kuliah</option>
													<option>Lainnya</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="card card-success">
									<div class="card-header">
										<h3 class="card-title">Berapa perusahaan yang sudah anda lamar sebelum memperoleh pekerjaan pertama ?</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group row">
													<div class="col-sm-10">
														<input type="number" class="form-control" id="inputEmail" placeholder="">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card card-success">
									<div class="card-header">
										<h3 class="card-title">Berapa banyak perusahaan yang merespon lamaran anda ?</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group row">
													<div class="col-sm-10">
														<input type="number" class="form-control" id="inputEmail" placeholder="">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card card-success">
									<div class="card-header">
										<h3 class="card-title">Berapa banyak perusahaan yang mengundang anda wawancara ?</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group row">
													<div class="col-sm-10">
														<input type="number" class="form-control" id="inputEmail" placeholder="">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card card-success">
									<div class="card-header">
										<h3 class="card-title">Bagaiamana anda menggambarkan situasi anda saat ini ? <i>jawaban bisa dipilih lebih dari satu</i></h3>
									</div>
									<div class="card-body">
										<div class="col-sm-12">
											<div class="form-group">
												<select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
													<option>Saya masih belajar/ melanjutkan kuliah profesi atau pascasarjana</option>
													<option>Saya menikah</option>
													<option>Saya sibuk dengan keluarga dan anak-anak</option>
													<option>Saya sekarang sedang mencari pekerjaan</option>
													<option>Lainnya</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="card card-success">
									<div class="card-header">
										<h3 class="card-title">Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir ?</h3>
									</div>
									<div class="card-body">
										<div class="col-sm-12">
											<div class="form-group clearfix">
												<div class="icheck-success d-inline">
													<input type="radio" name="r3" id="lsm">
													<label for="lsm">
														Tidak
													</label>
												</div>
											</div>
											<div class="form-group clearfix">
												<div class="icheck-success d-inline">
													<input type="radio" name="r3" id="lsm">
													<label for="lsm">
														Tidak, Tapi saya sedang menunggu hasil lamaran kerja
													</label>
												</div>
											</div>
											<div class="form-group clearfix">
												<div class="icheck-success d-inline">
													<input type="radio" name="r3" id="lsm">
													<label for="lsm">
														Ya , Saya akan memulai bekerja 2 minggu kedepan
													</label>
												</div>
											</div>
											<div class="form-group clearfix">
												<div class="icheck-success d-inline">
													<input type="radio" name="r3" id="lsm">
													<label for="lsm">
														Ya, Tapi saya belum pasti akan bekerja dalam 2 minggu kedepan
													</label>
												</div>
											</div>
											<div class="form-group clearfix">
												<div class="icheck-success d-inline">
													<input type="radio" name="r3" id="lsm">
													<label for="lsm">
														Lainnya
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="card card-success">
										<div class="card-header">
											<h3 class="card-title">Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya ? <i>jawaban bisa lebih dari satu</i></h3>
										</div>
										<div class="card-body">
											<div class="col-sm-12">
												<div class="form-group">
													<select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
														<option>Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya</option>
														<option>Saya belum mendapatkan pendidikan yang lebih sesuai</option>
														<option>Di pekerjaan ini saya memperoleh prospek karir yang baik</option>
														<option>Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya</option>
														<option>Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya</option>
														<option>Saya dapat memperoleh pendapatan yang lebih tinggi dari pekerjaan ini</option>
														<option>pekerjaan saya saat ini lebih aman/terjamin/secure</option>
														<option>Pekerjaan saya saat ini lebih menarik</option>
														<option>Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel</option>
														<option>Pekerjaan saya saat ini lokasinya lebih dekat dengan rumah saya</option>
														<option>Pekerjaan saya saat ini lebih menjamin kebutuhan keluarga saya</option>
														<option>Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya </option>
														<option>Lainnya</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.row (main row) -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>