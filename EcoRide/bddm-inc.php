<?php

$bdd_server = "localhost";
$bdd_username = "root";

$bddquartier_mdp = "";
$bddquartier_nom = "quartiers";

$bddlogin_mdp = "";
$bddlogin_nom = "loginsystem";

$quartier_conn = mysqli_connect($bdd_server, $bdd_username, $bddquartier_mdp, $bddquartier_nom);
$login_conn = mysqli_connect($bdd_server, $bdd_username, $bddlogin_mdp, $bddlogin_nom);
