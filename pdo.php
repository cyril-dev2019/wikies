<?php

$pdo = new PDO("mysql:host=localhost;dbname=WIKIES", "root", "");

$categories = $pdo->query('SELECT * FROM categorie')->fetchAll();

?>
