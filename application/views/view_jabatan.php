<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Dashboard - Ace Admin</title>

	<meta name="description" content="overview &amp; stats" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>" />
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/4.5.0/css/font-awesome.min.css' ?>" />

	<!-- page specific plugin styles -->

	<!-- text fonts -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/fonts.googleapis.com.css' ?>" />

	<!-- ace styles -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/ace.min.css' ?>" class="ace-main-stylesheet" id="main-ace-style" />

	<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/ace-skins.min.css' ?>" />
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/ace-rtl.min.css' ?>" />

	<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

	<!-- inline styles related to this page -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

	<!-- ace settings handler -->
	<script src="<?php echo base_url() . 'assets/js/ace-extra.min.js' ?>"></script>
	
	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

	<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

		<style type="text/css">
			#page_list td
			{
				padding:16px;
				background-color:#f9f9f9;
				border:1px dotted #ccc;
				cursor:move;
				margin-top:12px;
			}
		</style>
</head>

<body class="no-skin">
	<div id="navbar" class="navbar navbar-default ace-save-state">
		<div class="navbar-container ace-save-state" id="navbar-container">
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>
			</button>

			<div class="navbar-header pull-left">
				<a href="index.html" class="navbar-brand">
					<small>
						<i class="fa fa-leaf"></i>
						Ace Admin
					</small>
				</a>
			</div>
		</div>
		<!-- /.navbar-container -->
	</div>

	<div class="main-container ace-save-state" id="main-container">
		<!-- <script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script> -->

		<div id="sidebar" class="sidebar responsive ace-save-state">
			<!-- <script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script> -->

			<ul class="nav nav-list">
				<li class="">
					<a href="index.html">
						<i class="menu-icon fa fa-tachometer"></i>
						<span class="menu-text"> Dashboard </span>
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-list"></i>
						<span class="menu-text"> Menu </span>

						<b class="arrow fa fa-angle-down"></b>
					</a>

					<b class="arrow"></b>

					<ul class="submenu">
						<li class="">
							<a href="<?php echo base_url() . 'karyawan' ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								Karyawan
							</a>

							<b class="arrow"></b>
						</li>

						<li class="active">
							<a href="<?php echo base_url() . 'jabatan' ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								Jabatan
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="<?php echo base_url() . 'unit_kerja' ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								Unit Kerja
							</a>

							<b class="arrow"></b>
						</li>
					</ul>
				</li>
			</ul>
			<!-- /.nav-list -->

			<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
				<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
			</div>
		</div>

		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="#">Home</a>
						</li>
						<li class="">Menu</li>
						<li class="active">Jabatan</li>
					</ul><!-- /.breadcrumb -->
				</div>

				<div class="page-content">
					<div class="page-header">
						<h1>
							Jabatan
							<!-- <small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									overview &amp; stats
								</small> -->

						</h1>

					</div>
					<!-- /.page-header -->

					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							<?php
								// foreach ($urutan as $baris) {
								// 	$a =$baris->urutan;
								// 	$b = $a + 1;
								// 	echo $b;
								// }
							?>
							<div class="pull-right"><a href="#" class="btn btn-sm btn-success" id="item_add"><span class="fa fa-plus"></span> Tambah Jabatan</a></div>
							<div class="row">
								<div class="col-xs-12">
									<table id="simple-table" class="table  table-bordered table-hover">
										<thead>
											<tr>
												<th>ID Jabatan</th>
												<th>Nama Jabatan</th>
												<th>Aksi</th>
											</tr>
										</thead>

										<tbody id="show_data">
											<!-- <tr>
													<td>
														<a href="#">ace.com</a>
													</td>
													<td>$45</td>
													<td>
														<div class="hidden-sm hidden-xs btn-group">
															<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>

															<button class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button>
														</div>
													</td>
												</tr> -->
										</tbody>
									</table>
								</div><!-- /.span -->
							</div><!-- /.row -->
							<!-- PAGE CONTENT ENDS -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.page-content -->
			</div>
		</div><!-- /.main-content -->

		<!-- MODAL ADD -->
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h3 class="modal-title" id="myModalLabel">Tambah Jabatan</h3>
					</div>
					<form class="form-horizontal">
						<div class="modal-body">

							<div class="form-group">
								<label class="control-label col-xs-3">Nama Jabatan</label>
								<div class="col-xs-9">
									<input name="nama_jabatan_add" id="nama_jabatan" class="form-control" type="text" placeholder="Nama Jabatan" style="width:335px;" required>
								</div>
							</div>

						</div>

						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button class="btn btn-info" data-dismiss="modal" aria-hidden="true" id="btn_simpan">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--END MODAL ADD-->

		<!-- MODAL EDIT -->
		<div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h3 class="modal-title" id="myModalLabel">Edit Jabatan</h3>
					</div>
					<form class="form-horizontal">
						<div class="modal-body">

							<div class="form-group">
								<label class="control-label col-xs-3">Nama Jabatan</label>
								<div class="col-xs-9">
									<input name="id_jabatan_edit" id="id_jabatan2" class="form-control" type="hidden" placeholder="ID Jabatan" style="width:335px;" readonly>
									<input name="nama_jabatan_edit" id="nama_jabatan2" class="form-control" type="text" placeholder="Nama Jabatan" style="width:335px;" required>
								</div>
							</div>

						</div>

						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button class="btn btn-info" id="btn_update">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--END MODAL EDIT-->

		<!--MODAL HAPUS-->
		<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
						<h4 class="modal-title" id="myModalLabel">Hapus Jabatan</h4>
					</div>
					<form class="form-horizontal">
						<div class="modal-body">

							<input type="hidden" name="id_jabatan" id="textid" value="">
							<div class="alert alert-warning">
								<p>Apakah Anda yakin mau menghapus?</p>
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							<button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--END MODAL HAPUS-->

		<div class="footer">
			<div class="footer-inner">
				<div class="footer-content">
					<span class="bigger-120">
						<span class="blue bolder">Ace</span>
						Application &copy; 2013-2014
					</span>

					&nbsp; &nbsp;
					<span class="action-buttons">
						<a href="#">
							<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
						</a>
					</span>
				</div>
			</div>
		</div>

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	</div><!-- /.main-container -->

	<!-- basic scripts -->

	
	

	<!-- page specific plugin scripts -->

	<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
	<script src="<?php echo base_url() . 'assets/js/jquery-ui.custom.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/jquery.ui.touch-punch.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/jquery.easypiechart.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/jquery.sparkline.index.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/jquery.flot.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/jquery.flot.pie.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/jquery.flot.resize.min.js' ?>"></script>

	<!-- ace scripts -->
	<script src="<?php echo base_url() . 'assets/js/ace-elements.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/ace.min.js' ?>"></script>
	
	
	<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.dataTables.min.js' ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			tampil_data_jabatan(); //pemanggilan fungsi tampil jabatan.

			//Sorting
			$('table tbody').sortable({
				update: function(event, ui) {
					$(this).children().each(function(index) {
						if ($(this).attr('data-position') != (index + 1)) {
							$(this).attr('data-position', (index + 1)).addClass('updated');
						}
					});
					saveNewPositions();
				}
			});

			function saveNewPositions() {
				var positions = new Array();
				$('.updated').each(function() {
					positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
					$(this).removeClass('updated');
				});

				$.ajax({
					url: "<?php echo base_url('index.php/jabatan/sort_jabatan') ?>",
					method: "POST",
					dataType: "text",
					data: {
						update: 1,
						positions: positions
					},
					success: function(data) {
						// alert(result);
					}
				});
			}

			$('#mydata').dataTable();

			//fungsi tampil jabatan
			function tampil_data_jabatan() {
				$.ajax({
					type: 'GET',
					url: '<?php echo base_url() ?>index.php/jabatan/data_jabatan',
					async: true,
					dataType: 'json',
					success: function(data) {
						var html = '';
						var i;
						for (i = 0; i < data.length; i++) {
							html += '<tr data-index="' + data[i].id_jabatan + '" data-position="' + data[i].urutan + '" id="page_list">' +
								'<td>' + data[i].id_jabatan + '</td>' +
								'<td>' + data[i].nama_jabatan + '</td>' +
								'<td>' +
								'<div class="hidden-sm hidden-xs btn-group">' +
								'<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="' + data[i].id_jabatan + '"><i class="ace-icon fa fa-pencil bigger-120"></i></a>' + ' ' +
								'<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="' + data[i].id_jabatan + '"><i class="ace-icon fa fa-trash-o bigger-120"></i></a>' +
								'</div>' +
								'</td>' +
								'</tr>';
						}
						$('#show_data').html(html);
					}

				});
			}

			//SHOW MODAL ADD
			$('#item_add').on('click', function() {
				$('#ModalAdd').modal('show');
			});

			//GET UPDATE
			$('#show_data').on('click', '.item_edit', function() {
				var id_jabatan = $(this).attr('data');
				$.ajax({
					type: "GET",
					url: "<?php echo base_url('index.php/jabatan/get_jabatan') ?>",
					dataType: "JSON",
					data: {
						id_jabatan: id_jabatan
					},
					success: function(data) {
						$.each(data, function(id_jabatan, nama_jabatan) {
							$('#ModalaEdit').modal('show');
							$('[name="id_jabatan_edit"]').val(data.id_jabatan);
							$('[name="nama_jabatan_edit"]').val(data.nama_jabatan);
						});
					}
				});
				return false;
			});


			//GET HAPUS
			$('#show_data').on('click', '.item_hapus', function() {
				var id_jabatan = $(this).attr('data');
				$('#ModalHapus').modal('show');
				$('[name="id_jabatan"]').val(id_jabatan);
			});

			//Simpan Jabatan
			$('#btn_simpan').on('click', function() {
				// var kobar = $('#kode_barang').val();
				var nama_jabatan = $('#nama_jabatan').val();
				$.ajax({
					type: "POST",
					url: "<?php echo base_url('index.php/jabatan/simpan_jabatan') ?>",
					dataType: "JSON",
					data: {
						nama_jabatan: nama_jabatan,
					},
					success: function(data) {
						$('[name="nama_jabatan_add"]').val("");
						$('#ModalAdd').modal('hide');
						tampil_data_jabatan();
					}
				});
				return false;

			});

			//Update Jabatan
			$('#btn_update').on('click', function() {
				var id_jabatan = $('#id_jabatan2').val();
				var nama_jabatan = $('#nama_jabatan2').val();
				$.ajax({
					type: "POST",
					url: "<?php echo base_url('index.php/jabatan/update_jabatan') ?>",
					dataType: "JSON",
					data: {
						id_jabatan: id_jabatan,
						nama_jabatan: nama_jabatan,
					},
					success: function(data) {
						$('[name="id_jabatan_edit"]').val("");
						$('[name="nama_jabatan_edit"]').val("");
						$('#ModalaEdit').modal('hide');
						tampil_data_jabatan();
					}
				});
				return false;
			});

			//Hapus Jabatan
			$('#btn_hapus').on('click', function() {
				var id_jabatan = $('#textid').val();
				$.ajax({
					type: "POST",
					url: "<?php echo base_url('index.php/jabatan/hapus_jabatan') ?>",
					dataType: "JSON",
					data: {
						id_jabatan: id_jabatan
					},
					success: function(data) {
						$('#ModalHapus').modal('hide');
						tampil_data_jabatan();
					}
				});
				return false;
			});

			


		});
	</script>
</body>

</html>