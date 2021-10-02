<!-- /.content-wrapper -->
<footer class="main-footer">Copyright &copy;<script>
		document.write(new Date().getFullYear());
	</script> All rights reserved |<a href="<?= base_url('admin/dashboard') ?>">Tracer Study</a>.</strong>
	<div class="float-right d-none d-sm-inline-block">
		Version 1.0
	</div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

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
<script src="<?= base_url('assets/') ?>plugins/select2/js/select2.full.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
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
	$(document).ready(function() {
		$("#nim").keyup(function() {
			let nama = $(this).val();
			nama = nama.split(' ').join('-');
			nama = nama.toLowerCase();
			$('#username').val(nama);
			$('#password1').val(nama);
		});
	});
	$(function() {
		// Summernote
		$('#summernote').summernote()

		// CodeMirror
		CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
			mode: "htmlmixed",
			theme: "monokai"
		});
	})
</script>
<script>
	$(function() {
		/* ChartJS
		 * -------
		 * Here we will create a few charts using ChartJS
		 */

		//--------------
		//- AREA CHART -
		//--------------

		// Get context with jQuery - using jQuery's .get() method.
		var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

		var areaChartData = {
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
			datasets: [{
					label: 'Digital Goods',
					backgroundColor: 'rgba(60,141,188,0.9)',
					borderColor: 'rgba(60,141,188,0.8)',
					pointRadius: false,
					pointColor: '#3b8bba',
					pointStrokeColor: 'rgba(60,141,188,1)',
					pointHighlightFill: '#fff',
					pointHighlightStroke: 'rgba(60,141,188,1)',
					data: [28, 48, 40, 19, 86, 27, 90]
				},
				{
					label: 'Electronics',
					backgroundColor: 'rgba(210, 214, 222, 1)',
					borderColor: 'rgba(210, 214, 222, 1)',
					pointRadius: false,
					pointColor: 'rgba(210, 214, 222, 1)',
					pointStrokeColor: '#c1c7d1',
					pointHighlightFill: '#fff',
					pointHighlightStroke: 'rgba(220,220,220,1)',
					data: [65, 59, 80, 81, 56, 55, 40]
				},
			]
		}

		var areaChartOptions = {
			maintainAspectRatio: false,
			responsive: true,
			legend: {
				display: false
			},
			scales: {
				xAxes: [{
					gridLines: {
						display: false,
					}
				}],
				yAxes: [{
					gridLines: {
						display: false,
					}
				}]
			}
		}

		// This will get the first returned node in the jQuery collection.
		new Chart(areaChartCanvas, {
			type: 'line',
			data: areaChartData,
			options: areaChartOptions
		})

		//-------------
		//- LINE CHART -
		//--------------
		var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
		var lineChartOptions = $.extend(true, {}, areaChartOptions)
		var lineChartData = $.extend(true, {}, areaChartData)
		lineChartData.datasets[0].fill = false;
		lineChartData.datasets[1].fill = false;
		lineChartOptions.datasetFill = false

		var lineChart = new Chart(lineChartCanvas, {
			type: 'line',
			data: lineChartData,
			options: lineChartOptions
		})

		//-------------
		//- DONUT CHART -
		//-------------
		// Get context with jQuery - using jQuery's .get() method.
		var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
		var donutData = {
			labels: [
				'Chrome',
				'IE',
				'FireFox',
				'Safari',
				'Opera',
				'Navigator',
			],
			datasets: [{
				data: [700, 500, 400, 600, 300, 100],
				backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
			}]
		}
		var donutOptions = {
			maintainAspectRatio: false,
			responsive: true,
		}
		//Create pie or douhnut chart
		// You can switch between pie and douhnut using the method below.
		new Chart(donutChartCanvas, {
			type: 'doughnut',
			data: donutData,
			options: donutOptions
		})

		//-------------
		//- PIE CHART -
		//-------------
		// Get context with jQuery - using jQuery's .get() method.
		var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
		var pieData = donutData;
		var pieOptions = {
			maintainAspectRatio: false,
			responsive: true,
		}
		//Create pie or douhnut chart
		// You can switch between pie and douhnut using the method below.
		new Chart(pieChartCanvas, {
			type: 'pie',
			data: pieData,
			options: pieOptions
		})

		//-------------
		//- BAR CHART -
		//-------------
		var barChartCanvas = $('#barChart').get(0).getContext('2d')
		var barChartData = $.extend(true, {}, areaChartData)
		var temp0 = areaChartData.datasets[0]
		var temp1 = areaChartData.datasets[1]
		barChartData.datasets[0] = temp1
		barChartData.datasets[1] = temp0

		var barChartOptions = {
			responsive: true,
			maintainAspectRatio: false,
			datasetFill: false
		}

		new Chart(barChartCanvas, {
			type: 'bar',
			data: barChartData,
			options: barChartOptions
		})

		//---------------------
		//- STACKED BAR CHART -
		//---------------------
		var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
		var stackedBarChartData = $.extend(true, {}, barChartData)

		var stackedBarChartOptions = {
			responsive: true,
			maintainAspectRatio: false,
			scales: {
				xAxes: [{
					stacked: true,
				}],
				yAxes: [{
					stacked: true
				}]
			}
		}

		new Chart(stackedBarChartCanvas, {
			type: 'bar',
			data: stackedBarChartData,
			options: stackedBarChartOptions
		})
	})
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
		//Initialize Select2 Elements
		$('.select2').select2()

		//Initialize Select2 Elements
		$('.select2bs4').select2({
			theme: 'bootstrap4'
		})
	});
</script>
</body>

</html>