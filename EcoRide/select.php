<?php
  switch ($_GET['ville']) {
    case "Rabat":
      $quart_sql = "SELECT * FROM rabat;";
      $result = mysqli_query($quartier_conn, $quart_sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $value_row = $row['nom_quartier'];
            echo "<option value='strtolower($value_row)'>$value_row</option>";
        }
      }
    case "Témara":
      $quart_sql = "SELECT * FROM temara;";
      $result = mysqli_query($quartier_conn, $quart_sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $value_row = $row['nom_quartier'];
            echo "<option value='strtolower($value_row)'>$value_row</option>";
        }
      }
      break;
    case "Salé":
      $quart_sql = "SELECT * FROM sale;";
      $result = mysqli_query($quartier_conn, $quart_sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $value_row = $row['nom_quartier'];
            echo "<option value='strtolower($value_row)'>$value_row</option>";
        }
      }
    break;
    default:
      echo "<option value=''>-</option>";
  }
