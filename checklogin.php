<?php
require_once "db.php";
$stmt = $pdo->prepare("select * from user where userlogin = ?");
$stmt->execute([$_GET['login']]);
$data = array(
	'loginexists' => $stmt->rowCount() > 0
);
header('Content-Type: application/json');
echo json_encode($data);
?>