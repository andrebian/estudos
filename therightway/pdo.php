<?php

$pdo = new PDO('sqlite:users.db');
$stmt = $pdo->prepare('SELECT name FROM users WHERE id = :id');
$stmt->bindParam(':id', 1, PDO::PARAM_INT); //<-- Higienizado automaticamente sanitized pela PDO
$stmt->execute();

?>
