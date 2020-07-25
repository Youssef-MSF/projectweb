<?php

session_start();
$id_client = $_SESSION['id'];

if (isset($_POST['adresse']) && isset($_POST['ville']) && isset($_POST['numeroCarteBancaire'])) {
  if (!empty($_POST['adresse']) && !empty($_POST['ville']) && !empty($_POST['numeroCarteBancaire'])) {

    $codeBanqueTable = str_split($_POST['numeroCarteBancaire'], 1);
    if (testValidCarteNumber($codeBanqueTable)) {

      $adresse = htmlspecialchars($_POST['adresse']);
      $ville = htmlspecialchars($_POST['ville']);
      $tel = htmlspecialchars($_POST['tel']);
      $codeBanque = password_hash($_POST['numeroCarteBancaire'], PASSWORD_DEFAULT);

      try {
        // Connecter à Mysql
        $conn = new PDO('mysql:host=localhost; dbname=projetweb;charset=utf8', 'root', '');
      } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
      }

      $sql1 = "UPDATE client SET adresse='$adresse', ville='$ville', codeBanque='$codeBanque', tele='$tel' WHERE id='$id_client'";
      $sql2 = "INSERT INTO commande(id_client) VALUES($id_client)";

      // Prepare statement
      $stmt1 = $conn->prepare($sql1);
      $stmt2 = $conn->prepare($sql2);

      // execute the query
      $stmt1->execute();
      $stmt2->execute();

      foreach ($conn->query("SELECT id_comm FROM commande") as $row) {
        $myID = $row['id_comm'];
      }

      foreach ($_SESSION['prpduitsListe'] as $index => $product) {
        $sql3 = "INSERT INTO ligne(id_comm, id_article, quantite, prix_unitaire) VALUES($myID, $product[3], $product[4], $product[1])";
        $stmt3 = $conn->prepare($sql3);
        $stmt3->execute();
      }

      if ($stmt2 == true) {
        $_SESSION['prpduitsListe'] = null;
        header("location:finAchat.php");
        $conn = null;
      } else {
        echo "<script>window.alert(\"Désolé il y a un problème dans le serveur !!\")</script>";
      }

      if ($stmt1 == true) {
        //header("location:paiment.php");
        $conn = null;
      } else {
        echo "<script>window.alert(\"Désolé il y a un problème dans le serveur !!\")</script>";
      }
    } else {
      $_SESSION['codeBanqueInvalid'] = "Code carte banquaire est incorrecte !!";
      header("location:paiment.php");
    }
  } else {
    header("location:paiment.php");
    echo "variables are empty";
  }
} else {
  header("location:paiment.php");
  echo "fields not set !!";
}

// Fonction qui teste la validitée d'une carte banquaire en utilisant l'algorithme Luhn.

function sumArray($A)
{
  $sum = 0;
  foreach ($A as $element) {
    $sum += $element;
  }

  return $sum;
}

function testValidCarteNumber($codeBanque)
{

  // Odd array
  $pair = new ArrayObject();

  for ($i = 15; $i > 0; $i -= 2) {
    $pair->append($codeBanque[$i]);
  }


  // Even array

  $impair = new ArrayObject();

  for ($i = 14; $i >= 0; $i -= 2) {
    if ($codeBanque[$i] * 2 <= 9) {
      $impair->append($codeBanque[$i] * 2);
    } else {
      $impair->append(($codeBanque[$i] * 2) - 9);
    }
  }

  if ((sumArray($pair) + sumArray($impair)) % 10 == 0) {
    return true;
  } else {
    return false;
  }
}
