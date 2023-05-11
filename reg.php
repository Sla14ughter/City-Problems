<?php
require_once "db.php";
$fio=$_POST['fio'];
$f_i_o = explode(" ", $fio);
$stmt = $pdo->prepare("insert into user(userlogin, password, lastname, firstname, patronymic, email) values(?,?,?,?,?,?)"); 
$stmt->execute([
  $_POST['login'], 
  hash("sha256", $_POST['pass'], false), 
  $f_i_o[0], 
  $f_i_o[1], 
  $f_i_o[2], 
  $_POST['mail']
]); 
$name = $f_i_o[0]." ".mb_substr($f_i_o[1], 0, 1).". ".mb_substr($f_i_o[2], 0, 1).".";
setcookie('name', $name);
setcookie('login', $_POST['login']);
header("Location: mypage.php");
?>