<?php
  require 'bddm-inc.php';

  $ville = mysqli_real_escape_string($quartier_conn, $_SESSION['ville']);
  $quartier = mysqli_real_escape_string($quartier_conn, $_GET['quartier']);

  if (strlen($ville) > 0 and strlen($quartier) > 0) {
    $update_sql="UPDATE users SET ville=$ville, quartier=$quartier WHERE email=$email AND mdp=$mdp;";
    mysqli_query($quartier_conn, $update_sql);

    unset($_GET['ville']);
    unset($_SESSION['ville']);

    header("Location: index.php?id=#intro");
  } else {
    header("Location: index.php?info_about=failure");
  };
