<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <title>Admin du site</title>
</head>
<body>
<h1>Admin du site</h1>
<div id="menu">
    <a href="./">Retour sur l'accueil</a>
</div>
<div id="contenu">
        <ul>
            <li><a href="?admin&ajout">Ajouter un article</a></li>
        </ul>
    <?php


    // pas d'articles
    if ($articles == false) {
        echo "<h2>Pas encore d'articles!</h2>";
    } else {
        foreach ($articles AS $item) {
            ?>
            <h3><a href="?article=<?= $item['idarti'] ?>"><?= $item['titre'] ?></a></h3>
            <!-- ici le foreach pour les categ -->
            <p><?= $item['texte'] ?> ... <a href="?article=<?= $item['idarti'] ?>">Lire la suite</a></p>
            <p><?= $item['publie'] ?></p>
            <hr>
            <?php
        }
=======
    <title><?= $article['admin'] ?></title>
</head>
<body>
<h1><?= $article['admin'] ?></h1>
<div id="contenu">
    <h2><?= $article['admin'] ?></h2>
    <p><button onclick="document.location='./'">BACK</button></p>
    <?php

    // pas d'articles
    if ($article == false) {
        echo "<h2>Cet article n'existe plus</h2>";
    } else {
        ?>
        <p><?= nl2br($article['texte']) ?></p>
        <p><?= $article['publie'] ?></p>
        <hr>
        <?php
>>>>>>> 234990fd959c3f5bcbf78cc200fa568444c7e6d1
    }
    ?>
</div>
</body>
</html>
