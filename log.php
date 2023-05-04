<?php
require_once "db.php";
$stmt = $pdo->prepare("select * from user where userlogin = ?"); 
$stmt->execute([$_POST['login']]);
if($stmt->rowCount() == 0) {
  header("Location: login.html");
  setcookie('error', 'errorlog', time() + 1);
}
else {
  $array = $stmt->fetchAll();
  $password = $array[0]['password'];
  $passcheck = hash("sha256", $_POST['pass'], false);
  $user = $array[0];
  $name = $user['lastname']." ".substr($user['firstname'], 0, 1).". ".substr($user['patronymic'], 0, 1)." .";
  if($password == $passcheck){
    setcookie('name', $name);
    setcookie('login', $_POST['login']);
    setcookie('error', '', time() - 1);
    header("Location: index.html"); 
  }else{
    header("Location: login.html");
    setcookie('error', 'errorpass', time() + 1); 
  }
}
?>