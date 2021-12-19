<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=mythologie;charset=utf8", "root", "");
} catch (Exception $e) {
    die($e->getMessage());
}