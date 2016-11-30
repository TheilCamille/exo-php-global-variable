<?php

$login = $_POST['login'];
$mdp = $_POST['password'];

setcookie('pseudo', $login, time() + 365*24*3600, null, null, false, true);
setcookie('password', $mdp, time() + 365*24*3600, null, null, false, true);

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Cookie Jar</title>
    </head>
    <body>
        <form method='post' action='cookie.php'>
            <input type='text' name='login'/>
            <input type='password' name='password'/>
            <input type='submit' name='valider'/>
        </form>
        <?php echo 'le pseudo entrée est : '.$_COOKIE['pseudo'].'<br/>'; ?>
        <?php echo 'le mot de passe est : '.$_COOKIE['password']; ?>
    </body>
</html>
