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
header("Location: mypage.html");
?>