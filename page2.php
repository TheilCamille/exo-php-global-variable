<?php

session_start();

echo "Je me souviens de toi ! Tu t'appels ".$_SESSION['prenom'].' '.$_SESSION['nom']." et tu as ".$_SESSION['age']." ans.";