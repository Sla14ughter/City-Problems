<?php
$pdo = new PDO('mysql:host=openserver;dbname=city;charset=utf8', 'root', '', [
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
?>