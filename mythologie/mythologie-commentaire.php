<?php
session_start();
include_once "bddMythologie/mythologie-bdd.php";
include_once "bddMythologie/bddManager.php";

$getid = htmlspecialchars($_GET['id']);
// $data = allCommentaires($getid,$db);


if (!empty($_POST['commentaire'])) {
        $error = null;
        if (strlen($_POST['commentaire']) < 1) {
            $error = "com";
        }
        if ($error == null) {
            $result = addCommentaires($_POST['commentaire'],$getid,$_SESSION['id'],$db);
            header("Location: mythologie-view-article.html?id=".$getid);
        } else {
            header("Location: mythologie-view-article.html?id=".$getid . "?error=" . $error);
        }
    }