<?php
setcookie('name', '', time() - 1);
setcookie('login', '', time() - 1);
header("Location: index.php"); 
?>