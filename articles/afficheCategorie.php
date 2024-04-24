<?php $titre = 'Actualite'; ?>

<?php include("entete.php") ?>

<?php include 'menu.php'; ?>

<?php
include 'bd.php';

$id = $_GET['id'];

$req = $bdd->prepare('SELECT Article.titre, Categorie.libelle, Article.contenu FROM Article
		INNER JOIN Categorie ON Article.categorie = Categorie.id WHERE Article.categorie = :id');
$req->execute(array(
	'id' => $id
));
$Mesarticles = $req->fetchAll(PDO::FETCH_ASSOC);
?>

<div>
	<?php
	if (count($Mesarticles) > 0) {
		foreach ($Mesarticles as $donnee) { ?>
			<div id="articles">
				<h3><?= $donnee['titre'] ?></h3>
				<p><?= $donnee['contenu'] ?></p>
			</div>
		<?php }
	} else { ?>
		<p id="message">Aucun article pour cette catégorie</p>
	<?php } ?>
</div>