<?php
include_once "bddMythologie/mythologie-bdd.php";
include_once "bddMythologie/bddManager.php";
$data = selectArticleByID($_GET['delete'], $db);

foreach ($data as $value) {
    deleteAllCom($value->id_article, $db);
    deleteArticle($value->id_article, $db);
    unlink("assets/img/" . $value->img_article);
    header("Location: index.php");
}
