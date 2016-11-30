<?php

session_start();

$user = $_SERVER["REMOTE_ADDR"];
echo "Mon adresse ip est ".$user."<br/>";

$env = $_SERVER["HTTP_USER_AGENT"];
echo "J'uttilise ".$env."<br/>";

$sname = $_SERVER["SERVER_NAME"];
echo "Le serveur se nomme ".$sname."<br/>";

$_SESSION['nom'] = 'Theil';
$_SESSION['prenom'] = 'Camille';
$_SESSION['age'] = 26;

echo "<a href='page2.php'>Suite !</a><br/>";

echo "<a href='cookie.php'>On est gourmand ? Cookie déliceux ici !</a><br/>";

$login = $_POST['login'];
$mdp = $_POST['password'];

setcookie('login', $login, time());
setcookie('password', $mdp, time());
