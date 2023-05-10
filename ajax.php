<?php
    require_once "db.php";
    $stmt = $pdo->prepare("select * from user where userlogin = ? and password = ?"); 
    $stmt->execute([$_GET['login'],hash("sha256", $_GET['password'], false)]);
    $date = array('correct'=> $stmt->rowCount() > 0);
    header("Content-Type: application/json");
    echo json_encode($date);
?>