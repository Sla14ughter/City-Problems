<?php
require_once "db.php";
if(!empty($_POST['login']))
{
  $fio=$_POST['fio'];
  $f_i_o = explode(" ", $fio);
  $stmt = $pdo->prepare("insert into user(userlogin, password, firstname, lastname, patronymic, email) values(?,?,?,?,?,?)"); 
  $stmt->execute([
    $_POST['login'], 
    $_POST['pass'], 
    $f_i_o[0], 
    $f_i_o[1], 
    $f_i_o[2], 
    $_POST['mail']
  ]); 
  header("Location: index.html");
} 
?>