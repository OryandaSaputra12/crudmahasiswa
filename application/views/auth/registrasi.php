<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Register - SB Admin</title>
	<link href="css/styles.css" rel="stylesheet" />
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-7">
							<div class="card shadow-lg border-0 rounded-lg mt-5">
								<div class="card-header">
									<h3 class="text-center font-weight-light my-4">Buat Account</h3>
								</div>
								<form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>">
									<div class="card-body">
										<form class="user">
											<div class="form-floating mb-3">
												<input class="form-control" id="nama" type="nama"
													value="<?= set_value('nama') ?>" placeholder="" name="nama" />
												<label for="nama">nama </label>
												<?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
											</div>
											<div class="form-floating mb-3">
												<input class="form-control" id="inputEmail" type="email"
													value="<?= set_value('email') ?>" placeholder="" name="email" />
												<label for="inputEmail">Email </label>
												<?= form_error('email', '<small class="text-danger p1-3">', '</small>'); ?>
											</div>
											<div class="row mb-3">
												<div class="col-md-6">
													<div class="form-floating mb-3 mb-md-0">
														<input class="form-control" id="password" type="password"
															value="<?= set_value('password') ?> " placeholder=""
															name="password" />
														<label for="password">Password</label>
														<?= form_error('password', '<small class="text-danger p1-3">', '</small>'); ?>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-floating mb-3 mb-md-0">
														<input class="form-control" id="ulangpassword"
															value="<?= set_value('ulangpassword') ?>" type="password"
															placeholder="" name="ulangpassword" />
														<label for="ulangpassword">Ulangi Password</label>
														<?= form_error('ulangpassword', '<small class="text-danger p1-3">', '</small>'); ?>
													</div>
												</div>
											</div>
											<div class="text-center"><button type="submit"
													class="btn btn-color px-5 mb- 5 w- 100">
													Daftar Account</button>
											</div>

										</form>
									</div>
									<div class="card-footer text-center py-3">
										<div class="small"><a href="<?= base_url('AUTH') ?>">Punya akun?? login</a>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
		<div id="layoutAuthentication_footer">
			<footer class="py-4 bg-light mt-auto">
				<div class="container-fluid px-4">
					<div class="d-flex align-items-center justify-content-between small">
						<div class="text-muted">Copyright &copy; Your Website 2023</div>
						<div>
							<a href="#">Privacy Policy</a>
							&middot;
							<a href="#">Terms &amp; Conditions</a>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		crossorigin="anonymous"></script>
	<script src="js/scripts.js"></script>
</body>

</html>