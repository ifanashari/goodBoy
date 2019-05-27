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
		<!-- plugin css for this page -->
		<!-- End plugin css for this page -->
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
			<div class="container-fluid page-body-wrapper full-page-wrapper">
				<div class="content-wrapper d-flex align-items-center auth">
					<div class="row w-100">
						<div class="col-lg-4 mx-auto">
							<div class="auth-form-light text-left p-5">
								<div class="brand-logo">
									<img src="<?= base_url(); ?>assets/images/logo.svg" />
								</div>
								<h4>Hello! let's get started</h4>
								<h6 class="font-weight-light">Sign in to continue.</h6>
								<form action="<?= base_url(); ?>index.php/User_C/loginAction" method="POST" class="pt-3">
									<div class="form-group">
										<input
											type="text"
											class="form-control form-control-lg"
											placeholder="Username"
                      name="username"
                      required
										/>
									</div>
									<div class="form-group">
										<input
											type="password"
											class="form-control form-control-lg"
											placeholder="Password"
                      name="password"
                      required
										/>
									</div>
									<div class="mt-3">
                    <input class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="submit" value="SIGN IN">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- content-wrapper ends -->
			</div>
			<!-- page-body-wrapper ends -->
		</div>
		<!-- container-scroller -->
		<!-- plugins:js -->
		<script src="<?= base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
		<script src="<?= base_url(); ?>assets/vendors/js/vendor.bundle.addons.js"></script>
		<!-- endinject -->
		<!-- inject:js -->
		<script src="<?= base_url(); ?>assets/js/off-canvas.js"></script>
		<script src="<?= base_url(); ?>assets/js/misc.js"></script>
		<!-- endinject -->
	</body>
</html>
