<?php
  require 'bddm-inc.php';

  $email = mysqli_real_escape_string($login_conn, $_POST['email']);
  $mdp = mysqli_real_escape_string($login_conn, $_POST['mdp']);

  if (strlen($email) > 0 and strlen($mdp) > 0) {

    $pos_period = strpos($email, ".");
    $pos_at = strpos($email, "@");

    $nom = substr($email, 0, $pos_period);
    $prenom = substr($email, $pos_period+1, $pos_at-$pos_period-1);

    $sql = "INSERT INTO users (email, nom, prenom, mdp) VALUES ('$email', '$nom', '$prenom', '$mdp');";
    mysqli_query($login_conn, $sql);

    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['mdp'] = $mdp;

    header("Location: index.php?id=#intro");
  } else {
    header("Location: index.php?signup=failure");
  };
