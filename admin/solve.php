<?php
require_once "../db.php";
$stmt = $pdo->prepare("update request set statusid = 2 where requestid = ?"); 
$stmt->execute([$_GET['id']]);
header("Location: index.php"); 
?>