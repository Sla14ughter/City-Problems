<?php
require_once "db.php";
if (isset($_GET['id'])){
    $stmt = $pdo->prepare("select * from request where requestid = ?"); 
    $stmt->execute([$_GET['id']]);
    $request = $stmt->fetch();
    if($request){
        $stmt = $pdo->prepare("delete from request where requestid = ?"); 
        $stmt->execute([$_GET['id']]);
        unlink(dirname(__FILE__).'/'.$request['photo']);
    }
}
header("Location: mypage.php")
?>