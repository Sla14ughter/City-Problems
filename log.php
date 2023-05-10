<?php
require_once "db.php";
$stmt = $pdo->prepare("select * from user where userlogin = ?"); 
$stmt->execute([$_POST['login']]);
$array = $stmt->fetchAll();
$user = $array[0];
$name = $user['lastname']." ".mb_substr($user['firstname'], 0, 1).". ".mb_substr($user['patronymic'], 0, 1)." .";
setcookie('name', $name);
setcookie('login', $_POST['login']);
header("Location: mypage.php"); 
?>