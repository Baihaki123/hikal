<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HIKAL</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url('assets/Template/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('assets/Template/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url('assets/Template/bower_components/Ionicons/css/ionicons.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/Template/plugins/select2/select2.min.css') ?>" type="text/css" />
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/Template/dist/css/AdminLTE.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/Template/dist/css/AdminLTE.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/Template/dist/css/admin.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/Template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/Template/bower_components/Ionicons/css/ionicons.min.css'); ?>">

	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url('assets/Template/dist/css/skins/_all-skins.min.css'); ?>">
	<!-- Morris chart -->
	<link rel="stylesheet" href="<?php echo base_url('assets/Template/bower_components/morris.js/morris.css'); ?>">
	<!-- jvectormap -->
	<link rel="stylesheet" href="<?php echo base_url('assets/Template/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url('assets/Template/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url('assets/Template/bower_components/bootstrap-daterangepicker/daterangepicker.css'); ?>">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="<?php echo base_url('assets/Template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">

	<link rel="stylesheet" href="<?php echo base_url('assets/Template/datepicker/datepicker.min.css'); ?>">


	<!-- css untuk select2 -->
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js" integrity="sha512-eYSzo+20ajZMRsjxB6L7eyqo5kuXuS2+wEbbOkpaur+sA2shQameiJiWEzCIDwJqaB0a4a6tCuEvCOBHUg3Skg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- jika menggunakan bootstrap4 gunakan css ini  -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css"> -->
	<!-- cdn bootstrap4 -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
	<!-- <script type="text/javascript">
		// 1 detik = 1000
		window.setTimeout("waktu()", 1000);

		function waktu() {
			var tanggal = new Date();
			setTimeout("waktu()", 1000);
			document.getElementById("jamServer").innerHTML = tanggal.getHours() + ":" + tanggal.getMinutes() + ":" + tanggal.getSeconds();
		}
	</script> -->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<header class="main-header">
			<a href="<?= base_url() ?>" class="logo">
				<span class="logo-mini shine"><b>T</b>HL</span>
				<span class="logo-lg shine"><b>HIKAL</b></span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav"></ul>
				</div>
			</nav>
		</header>
		<aside class="main-sidebar">
			<section class="sidebar">
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
					<li <?= $this->uri->segment(1) == 'welcome' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
						<a href="<?= base_url('welcome'); ?>"><i class="fa fa-home"></i> <span>Overview</span></a>
					</li>
					<li <?= $this->uri->segment(1) == 'realtime' ? 'class="active"' : '' ?>>
						<a href="<?= base_url('realtime'); ?>"><i class="fa fa-book"></i> <span>Realtime</span></a>
					</li>
					<li class="treeview <?= $this->uri->segment(1) == 'hibrida' || $this->uri->segment(1) == 'lokal' ? 'active' : '' ?>">
						<a href="#">
							<i class="fa fa-table"></i> <span>Data Rekap</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li <?= $this->uri->segment(2) == 'besar' ? 'class="active"' : '' ?>>
								<a href="<?= base_url('hibrida/besar'); ?>"><i class="fa fa-circle-o"></i> Hibrida Besar</a>
							</li>
							<li <?= $this->uri->segment(2) == 'kecil' ? 'class="active"' : '' ?>>
								<a href="<?= base_url('hibrida/kecil'); ?>"><i class="fa fa-circle-o"></i> Hibrida Kecil</a>
							</li>
							<li <?= $this->uri->segment(2) == 'big' ? 'class="active"' : '' ?>>
								<a href="<?= base_url('lokal/big'); ?>"><i class="fa fa-circle-o"></i> Lokal Besar</a>
							</li>
							<li <?= $this->uri->segment(2) == 'small' ? 'class="active"' : '' ?>>
								<a href="<?= base_url('lokal/small'); ?>"><i class="fa fa-circle-o"></i> Lokal Kecil</a>
							</li>
						</ul>
					</li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->


			<!-- Main content -->

			<!-- /.content -->
			<?php $this->load->view($page); ?>
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 2.4.0
			</div>
			<strong>Copyright &copy; 2022 <a href="">Hikal</a>.</strong> All rights
			reserved.
		</footer>


		<!-- /.control-sidebar -->
		<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->

	<script src="<?php echo base_url('assets/Template/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/Template/bower_components/jquery-ui/jquery-ui.min.js'); ?>"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url('assets/Template/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
	<!-- Morris.js charts -->
	<script src="<?php echo base_url('assets/Template/bower_components/raphael/raphael.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/Template/bower_components/morris.js/morris.min.js'); ?>"></script>
	<!-- Sparkline -->
	<script src="<?php echo base_url('assets/Template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
	<!-- jvectormap -->
	<script src="<?php echo base_url('assets/Template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/Template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?php echo base_url('assets/Template/bower_components/jquery-knob/dist/jquery.knob.min.js'); ?>"></script>
	<!-- daterangepicker -->
	<script src="<?php echo base_url('assets/Template/bower_components/moment/min/moment.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/Template/bower_components/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
	<!-- datepicker -->
	<script src="<?php echo base_url('assets/Template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="<?php echo base_url('assets/Template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
	<!-- Slimscroll -->
	<script src="<?php echo base_url('assets/Template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url('assets/Template/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
	<script src="<?php echo base_url('assets/Template/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/Template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/Template/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url('assets/Template/dist/js/adminlte.min.js'); ?>"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url('assets/Template/dist/js/pages/dashboard.js'); ?>"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url('assets/Template/dist/js/demo.js'); ?>"></script>
	<script src="<?php echo base_url('assets/Template/plugins/select2/select2.full.min.js'); ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

	<script src="<?php echo base_url('assets/Template/datepicker/bootstrap-datepicker.js'); ?>"></script>
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
	<script>
		$(function() {
			$('#example1').DataTable()
			$('#example2').DataTable({
				'paging': true,
				'lengthChange': false,
				'searching': false,
				'ordering': true,
				'info': true,
				'autoWidth': false
			})
		})
	</script>
</body>

</html>