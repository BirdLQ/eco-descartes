<?php
  require 'bddm-inc.php';

  $ville = mysqli_real_escape_string($quartier_conn, $_GET['ville']);
  $quartier = mysqli_real_escape_string($quartier_conn, $_GET['quartier']);

  if (strlen($ville) > 0 and strlen($quartier) > 0) {

    $sql = "UPDATE users SET ville = $ville, quartier = $quartier WHERE email = $_SESSION['email'] AND mdp = $_SESSION['mdp'];";
    mysqli_query($quartier_conn, $sql);

    session_destroy();
    header("Location: index.php?id=#intro");
  } else {
    header("Location: index.php?info_about=failure");
  };
