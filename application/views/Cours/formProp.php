<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Proposer un cours de <?php echo $mat ?></h1>
</div>

<form enctype="multipart/form-data" class="card bg-light" method="post">

	<div class="form-row card-body">
		<div class="col-12 mb-3"><input class="form-control form-control-lg" type="text" placeholder="Titre de l'annonce" name="titre" required></div>
		<div class="col-12 mb-3"><hr></div>


		<div class="col-6 mb-3">
			<label for="mat">Matière</label>
			<input type="text" disabled value="<?php echo $mat ?>" class="form-control" id="mat" name="mat">

		</div>




		<div class="col-12 mb-3">
			<div class="form-group">
				<label for="desc">Description</label>
				<textarea class="form-control" id="desc" name="description" rows="7" required></textarea>
			</div>
		</div>

		<div class="col-12 mb-2">
			Prix (/h)
		</div>

		<div class="col-12 mb-3">
			<div id="prix" class="input-group mb-3">
				<input type="text" class="form-control" placeholder="15" name="prix" required>
				<div class="input-group-append">
					<span class="input-group-text">€</span>
				</div>
			</div>
		</div>

		<div class="col-12 mb-3"><hr></div>
		<div class="col-12 mb-3"><h3 class="h4">Disponibilitées</h3></div>
		<p class="h6 col-12">Les horaires seront à définir avec le client</p>
		<div class="col-12 mb-3"></div>

		<label class="checkbox-inline mr-4"><input type="checkbox" name="dispo[]" value="lundi">Lundi</label>
		<label class="checkbox-inline mr-4"><input type="checkbox" name="dispo[]" value="mardi">Mardi</label>
		<label class="checkbox-inline mr-4"><input type="checkbox" name="dispo[]" value="mercredi">Mercredi</label>
		<label class="checkbox-inline mr-4"><input type="checkbox" name="dispo[]" value="jeudi">Jeudi</label>
		<label class="checkbox-inline mr-4"><input type="checkbox" name="dispo[]" value="vendredi">Vendredi</label>
		<label class="checkbox-inline mr-4"><input type="checkbox" name="dispo[]" value="samedi">Samedi</label>
		<label class="checkbox-inline mr-4"><input type="checkbox" name="dispo[]" value="dimanche">Dimanche</label>

		<div class="col-12 mb-3"><hr></div>

		<div class="col-12 mb-3">
			<button type="submit" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
				<span class="text">Mettre mon annonce en ligne</span>
			</button>
		</div>
	</div>
</form>


<br>
