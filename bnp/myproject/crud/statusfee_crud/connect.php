<?php
$conn= new PDO('mysql:host=localhost;dbname=customer_db;charset=utf8;','root','');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
