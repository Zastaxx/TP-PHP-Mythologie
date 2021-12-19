<?php

function selectUser($user, $db)
{
    $sql = "SELECT * from user WHERE nom_user = :user";
    $req =  $db->prepare($sql);
    $result = $req->execute([
        ":user" => $user
    ]);
    $data = $req->fetch(PDO::FETCH_OBJ);
    return $data;
}

function addUser($pseudo,$password,$db){
    $sql = "insert into user (nom_user,pass_user,admin_user) VALUES (:pseudo, :password, false)";
    $req =  $db->prepare($sql);
    $result = $req->execute([
        ":pseudo" => $pseudo,
        ":password" => $password
    ]);
    return $result;
}

function whoPost($idArticle, $db)
{
    $sql = "SELECT user.nom_user FROM `user` INNER JOIN article on user.id_user = article.id_user WHERE id_article = :id_article";
    $req =  $db->prepare($sql);
    $result = $req->execute([
        ":id_article"=>$idArticle
    ]);
    $data = $req->fetch(PDO::FETCH_OBJ);
    return $data;
}

function whoPostCom($idCom, $db)
{
    $sql = "SELECT user.nom_user FROM `user` INNER JOIN commentaire on user.id_user = commentaire.id_user WHERE id_com = :id_com";
    $req =  $db->prepare($sql);
    $result = $req->execute([
        ":id_com"=>$idCom
    ]);
    $data = $req->fetch(PDO::FETCH_OBJ);
    return $data;
}

function allArticle($db)
{
    $sql = "SELECT * FROM article ORDER BY date_article DESC";
    $req = $db->query($sql);
    $data = $req->fetchAll(PDO::FETCH_OBJ);

    return $data;
}

function allCommentaires($idArticle, $db)
{
    $sql = "SELECT * FROM commentaire WHERE id_article = :id ORDER BY id_com DESC";
    $req =  $db->prepare($sql);
    $result = $req->execute([
        ":id" => $idArticle
    ]);
    $data = $req->fetchAll(PDO::FETCH_OBJ);

    return $data;
}

function addCommentaires($commentaire,$idarticle,$iduser,$db){
    $sql = "insert into commentaire (text_com,id_article,id_user) VALUES (:textcom, :idarticle, :iduser)";
    $req =  $db->prepare($sql);
    $result = $req->execute([
        ":textcom" => $commentaire,
        ":idarticle" => $idarticle,
        ":iduser" => $iduser

    ]);
    return $result;
}


function deleteArticle($article,$db){
    $sql = "DELETE FROM article WHERE id_article = :id_article";
    $req =  $db->prepare($sql);
    $result = $req->execute([
        ":id_article"=>$article
    ]);
    return $result;
}

function deleteAllCom($commentaire,$db){
    $sql = "DELETE FROM commentaire WHERE id_article = :id_article";
    $req =  $db->prepare($sql);
    $result = $req->execute([
        ":id_article"=>$commentaire
    ]);
    return $result;
}

function deleteCom($com,$db){
    $sql = "DELETE FROM commentaire WHERE id_com = :id_com";
    $req =  $db->prepare($sql);
    $result = $req->execute([
        ":id_com"=>$com
    ]);
    return $result;
}

function selectArticleByID($articleById, $db)
{
    $sql = "SELECT * from article WHERE id_article = :id_article";
    $req =  $db->prepare($sql);
    $result = $req->execute([
        ":id_article" => $articleById
    ]);
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
}

function selectArticle($article, $db)
{
    $sql = "SELECT * from article WHERE nom_article = :nom";
    $req =  $db->prepare($sql);
    $result = $req->execute([
        ":nom" => $article
    ]);
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
}

function addArticle($articleNom,$articleDesc,$articleText,$articleImg,$id,$db){
    $sql = "insert into article (nom_article,desc_article,text_article,img_article,id_user) VALUES (:nom, :description, :texte,:image, :userid)";
    $req =  $db->prepare($sql);
    $result = $req->execute([
        ":nom" => ucfirst($articleNom),
        ":description" => ucfirst($articleDesc),
        ":texte" => ucfirst($articleText),
        ":image" => $articleImg,
        ":userid" => $id

    ]);
    return $result;
}
