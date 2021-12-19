<?php
session_start();
include_once "bddMythologie/mythologie-bdd.php";
include_once "bddMythologie/bddManager.php";


if (!empty($_POST['pseudo']) && !empty($_POST['password']) && !empty($_POST['password2'])) {
    $user = selectUser($_POST['pseudo'], $db);
    if ($user) {
        $error = "alreadyExist";
        header("Location: mythologie-view-register.html.php?error=" . $error);
    } else {
        if ($_POST['password'] != $_POST['password2']) {
            $error = "notSamePass";
            header("Location: mythologie-view-register.html.php?error=" . $error);
        } else {
            $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $result = addUser($_POST['pseudo'], $hash, $db);
            if ($result) {
                $user = selectUser($_POST['pseudo'], $db);
                $_SESSION['id'] = $user->id_user;
                $_SESSION['pseudo'] = $_POST['pseudo'];
                $_SESSION['admin'] = $user->id_user;
                header("Location: index.php?connexion=ok");
            } else {
                $error = "dbError";
                header("Location: mythologie-view-register.html.php?error=" . $error);
            }
        }
    }
} else {
    $error = "allField";
    header("Location: mythologie-view-register.html.php?error=" . $error);
}
