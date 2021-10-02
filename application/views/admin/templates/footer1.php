<!-- jQuery -->
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/') ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/') ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/') ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/') ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/') ?>dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/') ?>dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/') ?>dist/js/pages/dashboard.js"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url('assets/') ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url('assets/') ?>plugins/toastr/toastr.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
	$(function() {
		$("#example1").DataTable({
			"responsive": true,
			"lengthChange": false,
			"autoWidth": false,
			"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
		}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});
</script>
<script>
	$(function() {
		var Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
		});

		$('.swalDefaultSuccess').click(function() {
			Toast.fire({
				icon: 'success',
				title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
		$('.swalDefaultInfo').click(function() {
			Toast.fire({
				icon: 'info',
				title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
		$('.swalDefaultError').click(function() {
			Toast.fire({
				icon: 'error',
				title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
		$('.swalDefaultWarning').click(function() {
			Toast.fire({
				icon: 'warning',
				title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
		$('.swalDefaultQuestion').click(function() {
			Toast.fire({
				icon: 'question',
				title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});

		$('.toastrDefaultSuccess').click(function() {
			toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
		});
		$('.toastrDefaultInfo').click(function() {
			toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
		});
		$('.toastrDefaultError').click(function() {
			toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
		});
		$('.toastrDefaultWarning').click(function() {
			toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
		});

		$('.toastsDefaultDefault').click(function() {
			$(document).Toasts('create', {
				title: 'Toast Title',
				body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
		$('.toastsDefaultTopLeft').click(function() {
			$(document).Toasts('create', {
				title: 'Toast Title',
				position: 'topLeft',
				body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
		$('.toastsDefaultBottomRight').click(function() {
			$(document).Toasts('create', {
				title: 'Toast Title',
				position: 'bottomRight',
				body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
		$('.toastsDefaultBottomLeft').click(function() {
			$(document).Toasts('create', {
				title: 'Toast Title',
				position: 'bottomLeft',
				body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
		$('.toastsDefaultAutohide').click(function() {
			$(document).Toasts('create', {
				title: 'Toast Title',
				autohide: true,
				delay: 750,
				body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
		$('.toastsDefaultNotFixed').click(function() {
			$(document).Toasts('create', {
				title: 'Toast Title',
				fixed: false,
				body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
		$('.toastsDefaultFull').click(function() {
			$(document).Toasts('create', {
				body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
				title: 'Toast Title',
				subtitle: 'Subtitle',
				icon: 'fas fa-envelope fa-lg',
			})
		});
		$('.toastsDefaultFullImage').click(function() {
			$(document).Toasts('create', {
				body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
				title: 'Toast Title',
				subtitle: 'Subtitle',
				image: '../../dist/img/user3-128x128.jpg',
				imageAlt: 'User Picture',
			})
		});
		$('.tambah').click(function() {
			$(document).Toasts('create', {
				class: 'bg-success',
				title: 'Toast Title',
				subtitle: 'Subtitle',
				body: 'Berhasil ditambah.'
			})
		});
		$('.toastsDefaultInfo').click(function() {
			$(document).Toasts('create', {
				class: 'bg-info',
				title: 'Toast Title',
				subtitle: 'Subtitle',
				body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
		$('.toastsDefaultWarning').click(function() {
			$(document).Toasts('create', {
				class: 'bg-warning',
				title: 'Toast Title',
				subtitle: 'Subtitle',
				body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
		$('.toastsDefaultDanger').click(function() {
			$(document).Toasts('create', {
				class: 'bg-danger',
				title: 'Warning',
				body: 'Username atau password salah !!!'
			})
		});
		$('.toastsDefaultMaroon').click(function() {
			$(document).Toasts('create', {
				class: 'bg-maroon',
				title: 'Toast Title',
				subtitle: 'Subtitle',
				body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
	});
</script>
</body>

</html>
