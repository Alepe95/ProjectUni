<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<title>UnivShop - <?php echo $titre; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>" />
	<?php foreach($css as $url): ?>
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $url; ?>" />
	<?php endforeach; ?>

	<!-- Custom fonts for this template-->
	<link href="<?php echo vendor_url("fontawesome-free/css/all.min.css") ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo css_url("sb-admin-2.min") ?>" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

	<!-- Sidebar -->
	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

		<!-- Sidebar - Brand -->
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('Main/home') ?>">
			<div class="sidebar-brand-icon rotate-n-15">
				<i class="fas fa-laugh-wink"></i>
			</div>
			<div class="sidebar-brand-text mx-3">Univ' <sup>Shop</sup></div>
		</a>

		<!-- Divider -->
		<hr class="sidebar-divider my-0">

		<!-- Nav Item - Dashboard -->
		<li class="nav-item active">
			<a class="nav-link" href="<?php echo site_url('Main/home') ?>">
				<i class="fas fa-fw fa-home"></i>
				<span>Accueil</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			<i class="fas fa-fw fa-book"></i> Manuel
		</div>

		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
				<i class="fas fa-fw fa-shopping-basket"></i>
				<span>Acheter</span>
			</a>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Custom Components:</h6>
					<a class="collapse-item" href="<?php echo site_url('Manuel/liste') ?>">Liste</a>
					<a class="collapse-item" href="#">????</a>
				</div>
			</div>
		</li>

		<!-- Nav Item - Utilities Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
				<i class="fas fa-fw fa-money-bill-alt"></i>
				<span>Vendre</span>
			</a>
			<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="<?php echo site_url('Manuel/vendre') ?>">Vendre un manuel</a>
					<a class="collapse-item" href="#">Mes manuels en ventes</a>
					<a class="collapse-item" href="#">Mes manuels vendu</a>

				</div>
			</div>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			<i class="fas fa-fw fa-book-reader"></i> Cours
		</div>

		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReserv" aria-expanded="true" aria-controls="collapseReserv">
				<i class="fas fa-fw fa-book-reader"></i>
				<span>Réserver</span>
			</a>
			<div id="collapseReserv" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Login Screens:</h6>
					<a class="collapse-item" href="#">Login</a>
					<a class="collapse-item" href="#">Register</a>
					<a class="collapse-item" href="#">Forgot Password</a>
					<div class="collapse-divider"></div>
					<h6 class="collapse-header">Other Pages:</h6>
					<a class="collapse-item" href="#">404 Page</a>
					<a class="collapse-item" href="#">Blank Page</a>
				</div>
			</div>
		</li>

		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
				<i class="fas fa-fw fa-book-reader"></i>
				<span>Proposer</span>
			</a>
			<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Login Screens:</h6>
					<a class="collapse-item" href="#">Login</a>
					<a class="collapse-item" href="#">Register</a>
					<a class="collapse-item" href="#">Forgot Password</a>
					<div class="collapse-divider"></div>
					<h6 class="collapse-header">Other Pages:</h6>
					<a class="collapse-item" href="#">404 Page</a>
					<a class="collapse-item" href="#">Blank Page</a>
				</div>
			</div>
		</li>



		<!-- Divider -->
		<hr class="sidebar-divider d-none d-md-block">

		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>

	</ul>
	<!-- End of Sidebar -->

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">

			<!-- Topbar -->
			<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

				<!-- Sidebar Toggle (Topbar) -->
				<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
					<i class="fa fa-bars"></i>
				</button>

				<!-- Topbar Search -->
				<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
					<div class="input-group">
						<input type="text" class="form-control bg-light border-0 small" placeholder="Recherche ..." aria-label="Search" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-primary" type="button">
								<i class="fas fa-search fa-sm"></i>
							</button>
						</div>
					</div>
				</form>

				<!-- Topbar Navbar -->
				<ul class="navbar-nav ml-auto">

					<!-- Nav Item - Search Dropdown (Visible Only XS) -->
					<li class="nav-item dropdown no-arrow d-sm-none">
						<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-search fa-fw"></i>
						</a>
						<!-- Dropdown - Messages -->
						<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
							<form class="form-inline mr-auto w-100 navbar-search">
								<div class="input-group">
									<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
									<div class="input-group-append">
										<button class="btn btn-primary" type="button">
											<i class="fas fa-search fa-sm"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</li>


					<div class="topbar-divider d-none d-sm-block"></div>

					<!-- Nav Item - User Information -->
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->nom." ".$this->session->prenom; ?></span>
							<img class="img-profile rounded-circle" src="<?php echo ($this->session->photo == '' ? img_profil('vide.png') : img_profil($this->session->photo)) ?>">
						</a>
						<!-- Dropdown - User Information -->
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
							<a class="dropdown-item" href="<?php echo site_url('Main/profil') ?>">
								<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
								Profil
							</a>
							<a class="dropdown-item" href="#">
								<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
								Réglages
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
								Deconnexion
							</a>
						</div>
					</li>

				</ul>

			</nav>
			<!-- End of Topbar -->

			<!-- Begin Page Content -->
			<div class="container-fluid">

<div id="contenu">
	<?php echo $output; ?>
</div>




			</div>
			<!-- /.container-fluid -->
			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; UnivShop 2019</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Vous nous quittez déjà ?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Sélectionnez "Deconnexion" en dessous, si vous êtes sur de vouloir fermer votre session actuelle.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
					<a class="btn btn-primary" href="<?php echo site_url('Main/deco') ?>">Deconnexion</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo vendor_url("jquery/jquery.min.js") ?>"></script>
	<script src="<?php echo vendor_url("bootstrap/js/bootstrap.bundle.min.js") ?>"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo vendor_url("jquery-easing/jquery.easing.min.js") ?>"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo js_url("sb-admin-2.min") ?>"></script>

	<!-- Page level plugins -->
	<script src="<?php echo vendor_url("chart.js/Chart.min.js") ?>"></script>

	<!-- Page level custom scripts -->
	<script src="<?php echo js_url("demo/chart-area-demo") ?>"></script>
	<script src="<?php echo js_url("demo/chart-pie-demo") ?>"></script>

<?php foreach($js as $url): ?>
	<script type="text/javascript" src="<?php echo $url; ?>"></script>
<?php endforeach; ?>

</body>

</html>
