<?php 
	// $this->load->model('User_M');
	

	$dataBarber = $this->User_M->getBarberP();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>
		<title>Purple Admin</title>
		<!-- plugins:css -->
		<link
			rel="stylesheet"
			href="<?= base_url(); ?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css"
		/>
		<link
			rel="stylesheet"
			href="<?= base_url(); ?>assets/vendors/css/vendor.bundle.base.css"
		/>
		<!-- endinject -->
		<!-- inject:css -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css" />
		<!-- endinject -->
		<link
			rel="shortcut icon"
			href="<?= base_url(); ?>assets/images/favicon.png"
		/>
	</head>
	<body>
		<div class="container-scroller">
			<!-- partial:partials/_navbar.html -->
			<nav
				class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row"
			>
				<div
					class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
				>
					<a
						class="navbar-brand brand-logo"
						href="<?= base_url(); ?>assets/index.html"
						><img src="<?= base_url(); ?>assets/images/logo.svg" alt="logo"
					/></a>
					<a
						class="navbar-brand brand-logo-mini"
						href="<?= base_url(); ?>assets/index.html"
						><img src="<?= base_url(); ?>assets/images/logo-mini.svg" alt="logo"
					/></a>
				</div>
				<div class="navbar-menu-wrapper d-flex align-items-stretch">
					<ul class="navbar-nav navbar-nav-right">
						<li class="nav-item nav-profile dropdown">
							<a
								class="nav-link dropdown-toggle"
								id="profileDropdown"
								href="<?= base_url(); ?>assets/#"
								data-toggle="dropdown"
								aria-expanded="false"
							>
								<div class="nav-profile-img">
									<!-- <img
										src="<?= base_url(); ?>assets/images/faces/face1.jpg"
										alt="image"
									/> -->
									<!-- <i class="mdi mdi-account"></i> -->
									<!-- <span class="availability-status online"></span> -->
								</div>
								<div class="nav-profile-text">
									<p class="mb-1 text-black"><?= $this->session->userdata("name"); ?></p>
								</div>
							</a>
							<div
								class="dropdown-menu navbar-dropdown"
								aria-labelledby="profileDropdown"
							>
								<a class="dropdown-item" href="<?= base_url(); ?>index.php/Dashboard_C/logout">
									<i class="mdi mdi-logout mr-2 text-primary"></i>
									Log out
								</a>
							</div>
						</li>
					</ul>
					<button
						class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
						type="button"
						data-toggle="offcanvas"
					>
						<span class="mdi mdi-menu"></span>
					</button>
				</div>
			</nav>
			<!-- partial -->
			<div class="container-fluid page-body-wrapper">
				<!-- partial:partials/_sidebar.html -->
				<nav class="sidebar sidebar-offcanvas" id="sidebar">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url(); ?>index.php/Dashboard_C">
								<span class="menu-title">Dashboard</span>
								<i class="mdi mdi-home menu-icon"></i>
							</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url(); ?>index.php/Product_C">
								<span class="menu-title">Manage product</span>
								<i class="mdi mdi-settings menu-icon"></i>
							</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url(); ?>index.php/Personnel_C/">
								<span class="menu-title">Manage personnel</span>
								<i class="mdi mdi-account-settings-variant menu-icon"></i>
							</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url(); ?>index.php/P_Barber_C/">
								<span class="menu-title">Bayar cukur</span>
								<i class="mdi mdi-content-cut menu-icon"></i>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="<?= base_url(); ?>index.php/P_Product_C/">
								<span class="menu-title">Bayar product</span>
								<i class="mdi mdi-cart menu-icon"></i>
							</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url(); ?>index.php/P_Product_C/report">
								<span class="menu-title">Laporan product</span>
								<i class="mdi mdi-library-books menu-icon"></i>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
								<span class="menu-title">Laporan Cukur</span>
								<i class="menu-arrow"></i>
								<!-- <i class="mdi mdi-medical-bag menu-icon"></i> -->
							</a>
							<div class="collapse" id="general-pages">
								<ul class="nav flex-column sub-menu">
									<?php
										foreach($dataBarber as $barber){
									?>

									<li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>index.php/P_Barber_C/report/<?= $barber->id; ?>"><?= $barber->name; ?></a></li>
									
									<?php
										}
									?>
								</ul>
							</div>
						</li>
					</ul>
				</nav>
				<!-- partial -->
				<div class="main-panel">
					<div class="content-wrapper">
						<div class="page-header">
							<h3 class="page-title">
								<span
									class="page-title-icon bg-gradient-primary text-white mr-2"
								>
									<i class="mdi mdi-google-pages"></i>
								</span>
								<?= $content; ?>
							</h3>
						</div>

						<?php $this->load->view($content)?>
					</div>
					<!-- content-wrapper ends -->
					<!-- partial:partials/_footer.html -->
					<footer class="footer">
						<div
							class="d-sm-flex justify-content-center justify-content-sm-between"
						>
							<span
								class="text-muted text-center text-sm-left d-block d-sm-inline-block"
								>Copyright © 2019
								<!-- <a
									href=""
									target="_blank"
									>Bootstrap Dash</a
								> -->
								. All rights reserved.</span
							>
							<!-- <span
								class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
								>Hand-crafted & made with
								<i class="mdi mdi-heart text-danger"></i
							></span> -->
						</div>
					</footer>
					<!-- partial -->
				</div>
				<!-- main-panel ends -->
			</div>
			<!-- page-body-wrapper ends -->
		</div>
		<!-- container-scroller -->

		<!-- plugins:js -->
		<script src="<?= base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
		<script src="<?= base_url(); ?>assets/vendors/js/vendor.bundle.addons.js"></script>
		<!-- endinject -->
		<!-- Plugin js for this page-->
		<!-- End plugin js for this page-->
		<!-- inject:js -->
		<script src="<?= base_url(); ?>assets/js/off-canvas.js"></script>
		<script src="<?= base_url(); ?>assets/js/misc.js"></script>
		<!-- endinject -->
		<!-- Custom js for this page-->
		<script src="<?= base_url(); ?>assets/js/dashboard.js"></script>
		<!-- End custom js for this page-->
	</body>
</html>
