<?php
require_once "../db.php";
$stmt = $pdo->prepare("insert into category(name) values(?)");
$stmt->execute([$_POST['name']]); 
header("Location: index.php");
?>