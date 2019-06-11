<?php

$pdo = new PDO("mysql:host=localhost;dbname=WIKIES", "root", "");

$user = $pdo->query('SELECT * FROM user')->fetchAll();
?>
