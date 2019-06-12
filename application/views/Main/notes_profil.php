<div class="row">
	<div class="col-6"> <img class="img-thumbnail" height="500px" width="500px" src="<?php echo ($user->photo=="" ?img_profil("vide.png"):img_profil($user->photo)) ?>"></div>
	<div class="col-6">
	<h1><?php echo strtoupper($user->nom)." ".ucfirst($user->prenom) ?></h1>
	<br>
		<p><?php echo $name_univ ?></p>
	</div>
</div>

<hr>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Mes notes</h1>
</div>

<!-- Content Row -->
<div class="row">

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Vendeur</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-book fa-2x text-gray-300"></i>
					</div>
				</div>

				<br><div class="col-12"><a class="col-12 btn btn-primary text-white">Notez le ! <i class="fas fa-star"></i></a></div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Acheteur</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-book fa-2x text-gray-300"></i>
					</div>
				</div>

				<br><div class="col-12"><a class="col-12 btn btn-success text-white">Notez le ! <i class="fas fa-star"></i></a></div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-info shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Professeur</div>
						<div class="row no-gutters align-items-center">
							<div class="col-auto">
								<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">0</div>
							</div>
						</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-book-reader fa-2x text-gray-300"></i>
					</div>
				</div>

				<br><div class="col-12"><a class="col-12 btn btn-info text-white">Notez le ! <i class="fas fa-star"></i></a></div>
			</div>
		</div>
	</div>

	<!-- Pending Requests Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Elève</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-book-reader fa-2x text-gray-300"></i>
					</div>
				</div>

				<br><div class="col-12"><a class="col-12 btn btn-warning text-white">Notez le ! <i class="fas fa-star"></i></a></div>
			</div>
		</div>
	</div>
</div>

<hr>



