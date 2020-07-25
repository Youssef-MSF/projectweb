<?php

    session_start();

    if(!empty($_POST["email"]) && !empty($_POST["password"])){
        $connexion=mysqli_connect("localhost","root","","projetweb");
        $email=mysqli_real_escape_string($connexion,$_POST['email']);
        $password=mysqli_real_escape_string($connexion,$_POST['password']);
        $stmt=mysqli_stmt_init($connexion);
        $sql="SELECT * FROM client WHERE isadmin=?";
        mysqli_stmt_prepare($stmt,$sql);$True=1;
        mysqli_stmt_bind_param($stmt,"s",$True);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        if($login=mysqli_fetch_array($result)){
            if($login["mail"]==$_POST["email"]){
                if(password_verify($_POST["password"], $login["password"])){
                    header("location:EspaceAdmin.php");

                    $_SESSION['adminLogin'] = $login["mail"];

                }else header("location:adminLogin.php?email=$email&password=false");
            }else header("location:adminLogin.php?email=false");
        }else echo "<script>window.alert(\"Vous n'etes pas admin !!!!\")</script>";
    }else header("location:adminLogin.php?");
?>