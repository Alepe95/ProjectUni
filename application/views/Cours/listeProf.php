<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Liste des professeurs de <?php echo $mat ?></h1>
</div>

<div class="row">

<?php foreach ($prof as $id => $value) { ?>
	<div class="col-4 mb-2">
		<div class="card">
			<div class="card-header col-12 text-xl-center"><?php echo $value->titre ?></div>
			<div class="card-body">
				<div>
					<a class="btn btn-outline-success col-12" href="#" role="button">Prendre un cours</a>
				</div>
				<div>
					<div class="col-12"><hr></div>
					<a class="col-9 badge badge-primary" href="<?php echo site_url('Main/note_prof/'.$value->id_user) ?>" >
						<span class="mr-2 d-none d-lg-inline text-white small"><?php echo $value->prenom." ".$value->nom; ?></span>
						<img class="img-profile rounded-circle" width="30px" height="30px" src="<?php echo ($value->photo == '' ? img_profil('vide.png') : img_profil($value->photo)) ?>">
					</a>
					<span class="badge badge-success col-2"><?php echo $value->prix ?> € /h</span>
				</div>
			</div>
			<div class="card-footer">
				<?php if($value->lundi) { ?><span class="badge badge-pill badge-primary">Lundi</span> <?php } ?>
				<?php if($value->mardi) { ?><span class="badge badge-pill badge-secondary">Mardi</span> <?php } ?>
				<?php if($value->mercredi) { ?><span class="badge badge-pill badge-success">Mercredi</span> <?php } ?>
				<?php if($value->jeudi) { ?><span class="badge badge-pill badge-danger">Jeudi</span> <?php } ?>
				<?php if($value->vendredi) { ?><span class="badge badge-pill badge-warning">Vendredi</span> <?php } ?>
				<?php if($value->samedi) { ?><span class="badge badge-pill badge-info">Samedi</span> <?php } ?>
				<?php if($value->dimanche) { ?><span class="badge badge-pill badge-dark">Dimanche</span> <?php } ?>
			</div>
		</div>
	</div>
<?php  } ?>

</div>

<br>
