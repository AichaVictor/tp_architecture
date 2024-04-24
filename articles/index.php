<?php $titre = 'ACTUALITES POLYTECHNICIENNES'; ?>

<?php include("entete.php"); ?>

<?php include 'menu.php'; ?>

<h2>Les dernières actualités</h2>
<div id="all">
	<?php
	include 'bd.php';
	$reponse = $bdd->query('SELECT * FROM Article');
	?>

	<div>
		<?php foreach ($reponse as $donnee) { ?>
			<div id="articles">
				<h3><?= $donnee['titre'] ?></h3>
				<p><?= $donnee['contenu'] ?></p>
			</div>
		<?php } ?>
	</div>

</div>