<?php require_once 'vue/inc/menu.php' ?>
<div class="article">
    <?php if (!empty($articles)) : ?>
        <?php foreach ($articles as $article) : ?>
            <div class="article">
                <h3><?= $article->getTitre() ?></h1>
                    <p><?= substr($article->getContenu(), 0, 300) . '...' ?></p>
            </div>
        <?php endforeach ?>

    <?php else : ?>
        <div class="message">Aucun article pour cette categorie</div>
    <?php endif ?>
</div>