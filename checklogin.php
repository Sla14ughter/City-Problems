<?php
require_once "db.php";
$stmt = $pdo->prepare("select * from user where userlogin = ?");
$stmt->execute([$_GET['login']]);
$stmt2 = $pdo->prepare("select * from user where email = ?");
$stmt2->execute([$_GET['email']]);
$data = array(
	'loginexists' => $stmt->rowCount() > 0,
	'mailexists' => $stmt2->rowCount() > 0
);
header('Content-Type: application/json');
echo json_encode($data);
?>