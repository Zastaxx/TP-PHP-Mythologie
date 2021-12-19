<?php
include_once "bddMythologie/mythologie-bdd.php";
include_once "bddMythologie/bddManager.php";

$data = deleteCom($_GET['delete'], $db);
header("Location: index.php");

