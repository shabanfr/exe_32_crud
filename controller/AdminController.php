<?php
/**
<<<<<<< HEAD
 * Contrôleur gérant l'adùministration
 */

// chargement des modeles
require_once "modeles/ArticleModele.php";

// on récupère les résumés d'articles depuis arti
$articles = listeArtiAccueil($mysqli);

// on prend la vue
require_once "vues/Admin.html.php";
=======
 * Contrôleur gérant les articles
 */
// chargement des modeles
require_once "modeles/ArticleModele.php";


$idarti = (int) $_GET["article"];

// si on a tenté de nous attaquer
if($idarti===0){
    // on redirige vers un site externe avec header("location: url d'un site")
    header("Location: https://fr.wiktionary.org/wiki/d%C3%A9chet");
    die();
}

// on récupère l'article complet avec ses categ (si présentes)
$article = listeArtiComplet($mysqli,$idarti);

// on prend la vue
require_once "vues/Article.html.php";
>>>>>>> 234990fd959c3f5bcbf78cc200fa568444c7e6d1
