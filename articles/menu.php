<?php $titre = 'ACTUALITES POLYTECHNICIENNES'; ?>

<?php include("entete.php"); ?>

<h1 id="titre">ACTUALITES POLYTECHNICIENNES</h1>
<?php
include 'bd.php';
$reponse = $bdd->query('SELECT * FROM Categorie');
?>
<div id="menu">
	<ul>
		<li><a href="index.php">Accueil</a></li>
		<?php foreach ($reponse as $donnee) { ?>
			<li><a href="afficheCategorie.php?id=<?= $donnee['id'] ?>"><?= $donnee['libelle'] ?></a></li>
		<?php }
		?>
	</ul>
</div>