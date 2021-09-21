<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Satu Data Banyuwangi</title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets_backend/backend/images/favicon.ico">
	<link href="<?php echo base_url()?>assets_backend/backend/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url()?>assets_backend/backend/vendor/chartist/css/chartist.min.css">
	<link href="<?php echo base_url()?>assets_backend/backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets_backend/backend/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets_backend/backend/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<!-- Datatable -->
	<link href="<?php echo base_url()?>assets_backend/backend/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body>
	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->
	<!--**********************************
            Main wrapper start
        ***********************************-->
	<div id="main-wrapper">
		<!--**********************************
                Nav header start
            ***********************************-->
		<div class="nav-header">	<a href="<?php echo base_url()?>backend" class="brand-logo">
    				<!-- <img class="logo-abbr" src="<?php echo base_url()?>assets_backend/backend/images/logo.png" alt="">
    				<img class="logo-compact" src="<?php echo base_url()?>assets_backend/backend/images/logo-text.png" alt="">
    				<img class="brand-title" src="<?php echo base_url()?>assets_backend/backend/images/logo-text.png" alt=""> -->
    			</a>
			<div class="nav-control">
				<div class="hamburger"> <span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>
		<!--**********************************
                Nav header end
            ***********************************-->
		<!--**********************************
                    Header start
                ***********************************-->
		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<div class="dashboard_bar">
								<div class="input-group search-area d-lg-inline-flex d-none">
									<input type="text" class="form-control" placeholder="Search here...">
									<div class="input-group-append">	<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
									</div>
								</div>
							</div>
						</div>
						<ul class="navbar-nav header-right">
							<li class="nav-item dropdown header-profile">	<a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
        									<img src="<?php echo base_url()?>assets_backend/backend/images/profile/17.jpg" width="20" alt="" />
        								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="<?php echo base_url()?>login/logout" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
											<polyline points="16 17 21 12 16 7"></polyline>
											<line x1="21" y1="12" x2="9" y2="12"></line>
										</svg> <span class="ml-2">Logout</span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!--**********************************
                    Header end ti-comment-alt
                ***********************************-->
		<!--**********************************
                            Sidebar start
                        ***********************************-->
		<div class="deznav">
			<div class="deznav-scroll">
				<ul class="metismenu" id="menu">
						<a><h4><span class="nav-text">Dashoard</span></h4></a>
						<li>
							<a class=" ai-icon" href="<?php echo base_url()?>backend/" aria-expanded="false">	<i class="flaticon-381-home-2"></i>
								<span class="nav-text">Dashoard</span>
							</a>
						</li>
					<!-- <li>
						<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">	<i class="flaticon-381-networking"></i>
							<span class="nav-text">Data</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="<?php echo base_url()?>dashboard/portal">Portal</a>
							</li>
							<li><a href="<?php echo base_url()?>dashboard/individu">Individu</a>
							</li>
							<li><a href="<?php echo base_url()?>dashboard/desa">Desa</a>
							</li>
							<li><a href="<?php echo base_url()?>dashboard/api">Api Service</a>
							</li>
						</ul>
					</li> -->
					<a><h4><span class="nav-text">Portal Data</span></h4></a>
					<li>
						<a class=" ai-icon" href="#" aria-expanded="false">	<i class="flaticon-381-networking"></i>
							<span class="nav-text">Data BPS</span>
						</a>
					</li>
					<li>
						<a class=" ai-icon" href="#" aria-expanded="false">	<i class="flaticon-381-networking"></i>
							<span class="nav-text">Data Sektoral</span>
						</a>
					</li>
					<!-- <li>
						<a class=" ai-icon" href="#" aria-expanded="false">	<i class="flaticon-381-networking"></i>
							<span class="nav-text">Data Kecamatan</span>
						</a>
					</li> -->
					<!-- <li>
						<a class=" ai-icon" href="#" aria-expanded="false">	<i class="flaticon-381-networking"></i>
							<span class="nav-text">Data Desa</span>
						</a>
					</li> -->
					<!-- <li>
						<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">	<i class="flaticon-381-networking"></i>
							<span class="nav-text">Data Portal</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="<?php echo base_url()?>backend/portal_data">Data BPS</a>
							</li>
							<li><a href="patient.html">Data Sektoral</a>
							</li>
							<li><a href="patient-details.html">Data Kecamatan</a>
							</li>
						</ul>
					</li> -->
					<!-- <li>
						<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">	<i class="flaticon-381-networking"></i>
							<span class="nav-text">Data Individu</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="./app-profile.html">Pendidikan</a>
							</li>
							<li><a href="./app-calender.html">Kesehatan</a>
							</li>
							<li><a href="./app-calender.html">Pertanian</a>
							</li>
						</ul>
					</li> -->
					<!-- <li>
						<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">	<i class="flaticon-381-networking"></i>
							<span class="nav-text">Data Desa</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="./chart-flot.html">IDM</a>
							</li>
							<li><a href="./chart-morris.html">PODES</a>
							</li>
							<li><a href="./chart-chartjs.html">BDA</a>
							</li>
						</ul>
					</li> -->
					<!-- <li>
						<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">	<i class="flaticon-381-networking"></i>
							<span class="nav-text">Data API Service</span>
						</a>
					</li> -->
					<a><h4><span class="nav-text">Master</span></h4></a>
					<li>
						<a class=" ai-icon" href="<?php echo base_url()?>master/pengguna" aria-expanded="false">	<i class="flaticon-381-user-2"></i>
							<span class="nav-text">Pengguna</span>
						</a>
					</li>
					<li>
						<a class="ai-icon" href="<?php echo base_url()?>master/skpd" aria-expanded="false">	<i class="flaticon-381-box-2"></i>
							<span class="nav-text">SKPD</span>
						</a>
					</li>
					<li>
						<a class="ai-icon" href="<?php echo base_url()?>master/urusan" aria-expanded="false">	<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Urusan</span>
						</a>
					</li>
					<li>
						<a class="ai-icon" href="<?php echo base_url()?>master/satuan" aria-expanded="false">	<i class="flaticon-381-network"></i>
							<span class="nav-text">Satuan</span>
						</a>
					</li>
					<li>
						<a class="ai-icon" href="<?php echo base_url()?>master/kategori" aria-expanded="false">	<i class="flaticon-381-layer-1"></i>
							<span class="nav-text">Kategori</span>
						</a>
					</li>

				</ul>
			</div>
		</div>
		<!--**********************************
                            Sidebar end
                        ***********************************-->
		<?php $this->load->view($layout); ?>
		<!--**********************************
        Scripts
    ***********************************-->
		<!-- Required vendors -->
		<script src="<?php echo base_url()?>assets_backend/backend/vendor/global/global.min.js"></script>
		<script src="<?php echo base_url()?>assets_backend/backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
		<script src="<?php echo base_url()?>assets_backend/backend/vendor/chart.js/Chart.bundle.min.js"></script>
		<script src="<?php echo base_url()?>assets_backend/backend/js/custom.min.js"></script>
		<script src="<?php echo base_url()?>assets_backend/backend/js/deznav-init.js"></script>
		<script src="<?php echo base_url()?>assets_backend/backend/vendor/bootstrap-datetimepicker/js/moment.js"></script>
		<script src="<?php echo base_url()?>assets_backend/backend/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
		<!-- Chart piety plugin files -->
		<script src="<?php echo base_url()?>assets_backend/backend/vendor/peity/jquery.peity.min.js"></script>
		<!-- Apex Chart -->
		<script src="<?php echo base_url()?>assets_backend/backend/vendor/apexchart/apexchart.js"></script>
		<!-- Dashboard 1 -->
		<script src="<?php echo base_url()?>assets_backend/backend/js/dashboard/dashboard-1.js"></script>
		<!-- Datatable -->
		<script src="<?php echo base_url()?>assets_backend/backend/vendor/datatables/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url()?>assets_backend/backend/js/plugins-init/datatables.init.js"></script>
		<script>
			$(function () {
				$('#datetimepicker1').datetimepicker({
					inline: true,
				});
			});
		</script>

		<!-- <script type="text/javascript">
			$(document).ready(function(){
				document.querySelectorAll("#data_menu_backend").forEach((item) => {
					item.addEventListener('click',function(){
						let tipe_data=$(this).attr("data-id");
						console.log(tipe_data);
						$.ajax({
							url  : "<?php echo base_url()?>Data_sektoral/Menu_data", // File tujuan
							type : 'POST', // Tentukan type nya POST atau GET
							data : {tipe_data: tipe_data}, // Set data yang akan dikirim
							dataType: "json",
							// beforeSend: function(response) {},
							success: function(response){ // Ketika proses pengiriman berhasil
								// Ganti isi dari div view dengan view yang diambil dari controller siswa function search
								$("#menu_data").html(response.hasil);
								// console.log(response);
							},
							error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
								alert(xhr.responseText); // munculkan alert
							}
						});
					});
				});
				 });
		</script> -->
</body>

</html>
