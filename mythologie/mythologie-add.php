<?php
session_start();
include_once "bddMythologie/mythologie-bdd.php";
include_once "bddMythologie/bddManager.php";

$data = selectArticle($_POST['nom_article'], $db);
if (!empty($data)) {
    header("Location: mythologie-view-add.html.php?error=exist");
} else {
    // $checkCarac = str_replace(["é","è","à"],["e","e","a"],$_POST['nom_article']);
    // if(preg_match('/\W+/', $checkCarac)){
    //     $error = "specialC";
    //     header("Location: mythologie-view-add.html.php?error=" . $error);exit;
    // }
    if (!empty($_FILES['img_article'])) {
        $info = pathinfo($_FILES['img_article']['name']);

        $_FILES['img_article']['name'] = $_POST['nom_article'] . "." . $info['extension'];

        $error = null;
        if ($_FILES['img_article']['size'] > 1000000) {
            $error = "size";
        }
        if (strlen($_POST['nom_article']) < 1) {
            $error .= "-nom";
        }
        if (strlen($_POST['desc_article']) < 25) {
            $error .= "-desc";
        }
        if (strlen($_POST['mytextarea']) < 100) {
            $error .= "-strlen";
        }
        if ($info['extension'] != "jpg" && $info['extension'] != "png") {
            $error .= "-format";
        }

        if ($error == null) {
            move_uploaded_file($_FILES['img_article']['tmp_name'], "assets/img/" . $_FILES['img_article']['name']);

            $result = addArticle($_POST['nom_article'], $_POST['desc_article'], $_POST['mytextarea'], $_FILES['img_article']['name'], $_SESSION['id'], $db);
        } else {
            header("Location: mythologie-view-add.html.php?error=" . $error);
        }
    }
    if ($result) {
        header("Location: mythologie-view-add.html.php?add=success");
    }
}
