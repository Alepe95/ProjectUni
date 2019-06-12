<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Votre profil</h1>
</div>


<!-- Collapsable photo -->
<div class="card shadow mb-4">
	<!-- Card Header - Accordion -->
	<a href="#photo" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"
	   aria-controls="photo">
		<h6 class="m-0 font-weight-bold text-primary">Photo de profil</h6>
	</a>
	<!-- Card Content - Collapse -->
	<div class="collapse" id="photo">
		<div class="card-body">
			Votre photo de profil sera visible par tous les autres membres de UnivShop !
			<hr>
			Votre photo de profil actuelle :

			<div class="row">
				<div class="col"> <img class="img-thumbnail" height="200px" width="200px" src="<?php echo ($this->session->photo=="" ?img_profil("vide.png"):img_profil($this->session->photo))  ?>"></div>
			</div>

			<br>

			<form enctype="multipart/form-data" action="" method="post">
			<div class="input-group">
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="photoInput" name="photo">
					<label class="custom-file-label" for="photoInput">Changer de photo de profil</label>
				</div>
				<input type="hidden" name="case" value="photo">
				<div class="input-group-append">
					<button class="btn btn-outline-success" type="submit">Valider</button>
				</div>

			</div>
			</form>
		</div>
	</div>
</div>

<!-- Collapsable informations -->
<div class="card shadow mb-4">
	<!-- Card Header - Accordion -->
	<a href="#infoPerso" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"
	   aria-controls="infoPerso">
		<h6 class="m-0 font-weight-bold text-primary">Informations personelles</h6>
	</a>
	<!-- Card Content - Collapse -->
	<div class="collapse" id="infoPerso">
		<div class="card-body">
			<form action="" method="post">
				<div class="form-row">
					<div class="col-6  mb-3">
						<label for="nom">Nom</label>
						<input type="text" class="form-control" id="nom" name="nom" value="<?php echo $this->session->nom ?>" readonly>
					</div>
					<input type="hidden" name="case" value="infos">
					<div class="col-6  mb-3">
						<label for="prenom">Prénom</label>
						<input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $this->session->prenom ?>" readonly>
					</div>

					<div class="col-6  mb-3">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="mail" name="mail" value="<?php echo $this->session->mail ?>" readonly>
					</div>
					<div class="col-6  mb-3"></div>

					<div class="col-6  mb-3">
						<label for="univ">Université</label>
						<input type="text" class="form-control" id="univ" name="univ" value="<?php echo $name_univ ?>" readonly>
					</div>

					<div class="col-6 mb-3"></div>

				</div>

			</form>
		</div>
	</div>
</div>

<!-- Collapsable password -->
<div class="card shadow mb-4">
	<!-- Card Header - Accordion -->
	<a href="#password" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"
	   aria-controls="password">
		<h6 class="m-0 font-weight-bold text-primary">Mot de passe</h6>
	</a>
	<!-- Card Content - Collapse -->
	<div class="collapse <?php echo ((isset($success) || isset($old_error) || isset($diff)) ? 'show': ''); ?>" id="password">
		<div class="card-body">
			<form action="" method="post">
				<div class="form-row">
					<?php if(isset($success)) { ?>
					<div class="col-12">
						<div class="alert alert-success" role="alert">
							<?php echo $success ?>
						</div>
					</div>
					<?php } ?>
					<?php if(isset($old_error)) { ?>
						<div class="col-12">
							<div class="alert alert-danger" role="alert">
								<?php echo $old_error?>
							</div>
						</div>
					<?php } ?>
					<?php if(isset($diff)) { ?>
						<div class="col-12">
							<div class="alert alert-danger" role="alert">
								<?php echo $diff ?>
							</div>
						</div>
					<?php } ?>
					<div class="col-3">
						<input type="password" class="form-control" placeholder="Ancien mot de passe" name="ancien" required>
					</div>
					<div class="col-4">
						<input type="password" class="form-control" placeholder="Nouveau mot de passe" name="new" required>
					</div>
					<div class="col-4">
						<input type="password" class="form-control" placeholder="Confirmation" name="confirm" required>
					</div>
					<input type="hidden" name="case" value="pass">
					<div class="col-1">
						<button type="submit" class="btn btn-success btn-circle btn-sm">
							<i class="fas fa-check"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>





