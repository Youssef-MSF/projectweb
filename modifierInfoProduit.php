<?php

session_start();
if (isset($_POST['eng'])) {

    $id = $_POST['id'];
    $design = $_POST['nom'];
    $prix = $_POST['prix'];
    $categorie = $_POST['categorie'];
    $image = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    try {
        // Connecter à Mysql
        $conn = new PDO('mysql:host=localhost; dbname=projetweb;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $sql = "UPDATE article SET design='$design', categorie='$categorie', prix='$prix', image='$image' WHERE id='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
header("location:EspaceAdmin.php");
?>