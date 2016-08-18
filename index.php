<?php
    require_once("models/articles.php");

    $articles = getAllArticles();
    require_once("views/index.php");
?>