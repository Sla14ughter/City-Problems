<?php
require_once "db.php";
$apppath = dirname(__FILE__);
$filepath = 'uploads/'.time().basename($_FILES['img']['name']);
$uploadfile = $apppath.'/'.$filepath;
move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
    
$stmt = $pdo->prepare("insert into request(title, userlogin, categoryid, description, photo) values(?,?,?,?,?)"); 
$stmt->execute([
  $_POST['title'],
  $_COOKIE['login'],  
  $_POST['category'], 
  $_POST['description'], 
  $filepath
]); 
header("Location: index.html");
?>