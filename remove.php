<?php
require_once "db.php";
$stmt = $pdo->prepare("delete from request where requestid = ?"); 
$stmt->execute([$_GET['id']]);
unlink(dirname(__FILE__).'/'.$request['photo']);
?>