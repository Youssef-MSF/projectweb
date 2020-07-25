<?php

session_start();

$db = mysqli_connect("localhost", "root", "", "projetweb");
if (isset($_POST['log'])) {

  $user = mysqli_real_escape_string($db, $_POST['email']);
  $pass = mysqli_real_escape_string($db, $_POST['password']);

  if (trim($user) != "" && trim($pass) != "") {
    $sql = "SELECT * FROM client WHERE mail = '$user'";
    $result = mysqli_query($db, $sql);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if ($count > 0 AND  password_verify($pass, $row["password"])) {
      echo "nice";
      $_SESSION["pass"] = $pass;
      $_SESSION["mail"] = $user;
      $_SESSION["id"] = $row["id"];
      $_SESSION["nom"] = $row["nom"];
      $_SESSION["prenom"] = $row["prenom"];
      $_SESSION["age"] = $row["age"];
      $_SESSION["adresse"] = $row["adresse"];
      $_SESSION["ville"] = $row["ville"];
      $_SESSION["tele"] = $row["tele"];
      header("location:profile.php");
    } else {
      header("location:login.php");
      $_SESSION['varname'] = "Email ou mot de passe sont incorrectes !!!";
    }
  }
}
