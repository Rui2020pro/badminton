<?php 

$user = 'badminton';
$password = 'badminton';
$servidor = 'localhost';
$database = 'badminton-site';


$dbh = new PDO('mysql:host=localhost;dbname=badminton-site; charset=utf8', $user, $password);
/*
$dbh-> setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

include 'class.php';
$display = new display($dbh);*/

 ?>