<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualite</title>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>

<body>
    <h1>Actualites Polytechniciennes</h1>
    <div class="menu">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <?php foreach ($categories as $categorie) : ?>
                <li><a href="index.php?action=categorie&id=<?= $categorie->getId() ?>"><?= $categorie->getLibelle() ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>
    <h2>Les dernieres actualites</h2>
    <div id="contenu">
        <?php if (!empty($articles)) : ?>
            <?php foreach ($articles as $article) : ?>
                <div class="article">
                    <h3><?= $article->getTitre() ?></h3>
                    <p><?= substr($article->getContenu(), 0, 300) . '...' ?></p>
                </div>
            <?php endforeach ?>

        <?php else : ?>
            <div class="message">Aucun article pour cette categorie</div>
        <?php endif ?>
    </div>

</body>

</html>