<?php
session_start();
include_once "bddMythologie/mythologie-bdd.php";
include_once "bddMythologie/bddManager.php";

if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
    $user = selectUser($_POST['pseudo'], $db);
    if (!$user) {
        $error = "dontExist";
        header("Location: mythologie-view-login.html.php?error=" . $error);
    } else {
        if (password_verify($_POST['password'], $user->pass_user)) {
            echo 'passOK';
            $_SESSION['id'] = $user->id_user;
            $_SESSION['pseudo'] = $user->nom_user;
            $_SESSION['mail'] = $user->mail_user;
            $_SESSION['admin'] = $user->admin_user;
            if (!empty($_POST['remember'])) {
                setcookie('id', $user->id_user, time() + 31556926, null, null, true, true);
                setcookie('pseudo', $user->nom_user, time() + 31556926, null, null, true, true);
                setcookie('mail', $user->mail_user, time() + 31556926, null, null, true, true);
                setcookie('admin', $user->admin_user, time() + 31556926, null, null, true, true);
            }
            header("Location: index.php?connexion=ok");
        } else {
            $error = "password";
            header("Location: mythologie-view-login.html.php?error=" . $error);
        }
    }
} else {
    $error = "allField";
    header("Location: mythologie-view-login.html.php?error=" . $error);
}
