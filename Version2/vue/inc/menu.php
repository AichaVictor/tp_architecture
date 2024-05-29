<h1>Actualites Polytechniciennes</h1>
<div class="menu">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <?php foreach ($categories as $categorie) : ?>
            <li><a href="index.php?action=categorie&id=<?= $categorie->getId() ?>"><?= $categorie->getLibelle() ?></a></li>
        <?php endforeach ?>
    </ul>
</div>