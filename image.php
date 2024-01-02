<?php

require 'connexion.php';

$server = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'piste';
    $conn = mysqli_connect($server,$user,$password,$db);
//include 'index.php';
session_start();

$log =$_SESSION['login'];
$requete = "SELECT login,passwrd,prenom,nom,profil,signature FROM users WHERE login = '$log'";


$admin_brute = mysqli_query($conn, $requete);

$row=mysqli_fetch_row($admin_brute);

$_SESSION['login']=$row[0];
$_SESSION['passwrd']=$row[1];
$_SESSION['prenom']=$row[2];
$_SESSION['nom']=$row[3];
$_SESSION['profil']=$row[4];
$_SESSION['signature']=$row[5];


echo  '<img base64_decode($row[5])  />' ;

?>