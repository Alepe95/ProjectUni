<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Liste des matières</h1>
</div>

<div class="row">

<?php foreach ($mat as $id => $value) { ?>
	<div class="col-4 mb-2"><a class="btn btn-warning col-12" href="<?php echo site_url('Cours/proposer/'.$value->id_matiere) ?>"><?php echo $value->libelle ?></a></div>
<?php  } ?>

</div>

<br>
