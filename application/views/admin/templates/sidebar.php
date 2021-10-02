<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
	<!-- Brand Logo -->
	<a href="<?= base_url('admin/dashboard') ?>" class="brand-link">
		<img src="<?= base_url('assets/') ?>dist/image/1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">TRACER STUDI</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar ">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url('assets/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="<?= base_url('admin/user/profile') ?>" class="d-block">
					<?= $user; ?>

				</a>
			</div>
		</div>


		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
				with font-awesome or any other icon font library -->
				<li class="nav-header">MAIN NAVIGATION</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/dashboard') ?>" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Beranda
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-table"></i>
						<p>
							Tracer Study
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url('admin/tracer') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Tracer Study</p>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a href="<?= base_url('admin/event') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Event</p>
							</a>
						</li> -->
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-list-alt"></i>
						<p>
							Data
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url('admin/alumni/index') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Data Alumni</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/lowongan') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Lowongan</p>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a href="<?= base_url('admin/kusioner') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>
									Kusioner
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/kusioner/pertanyaan') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>
									Pertanyaan
								</p>
							</a>
						</li> -->
					</ul>
				</li>
				<!-- <li class="nav-item">
					<a href="<?= base_url('admin/laporan') ?>" class="nav-link">
						<i class="nav-icon fas fa-tag"></i>
						<p>
							Laporan
						</p>
					</a>
				</li> -->
				<li class="nav-item">
					<a href="<?= base_url('admin/user') ?>" class="nav-link">
						<i class="nav-icon fas fa-user"></i>
						<p>
							User
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('auth/login') ?>" class="nav-link">
						<i class="nav-icon fas fa-sign-out-alt"></i>
						<p>
							Logout
						</p>
					</a>
				</li>


			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>