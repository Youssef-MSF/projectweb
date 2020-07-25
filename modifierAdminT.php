<?php
    if(!empty($_POST["Nemail"]) && !empty($_POST["Npassword"]) && !empty($_POST["Apassword"])){
        $connexion=mysqli_connect("localhost","root","","zakariaweb");
        $email=mysqli_real_escape_string($connexion,$_POST['Nemail']);
        $Npassword=mysqli_real_escape_string($connexion,$_POST['Npassword']);
        $Apassword=mysqli_real_escape_string($connexion,$_POST['Apassword']);
        $stmt=mysqli_stmt_init($connexion);
        $sql="SELECT * FROM client WHERE isadmin=?";
        mysqli_stmt_prepare($stmt,$sql);$True="true";
        mysqli_stmt_bind_param($stmt,"s",$True);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        if($login=mysqli_fetch_array($result)){
            if($login['password']==$_POST['Apassword']){
                $sql="UPDATE client SET mail=?,password=? WHERE isadmin=?";
                mysqli_stmt_prepare($stmt,$sql);$True="true";
                mysqli_stmt_bind_param($stmt,"sss",$_POST["Nemail"],$_POST["Npassword"],$True);
                if(mysqli_stmt_execute($stmt)) header("location:modifierAdmin.php?success=true");
                else header("location:modifierAdmin.php?success=false");
            }else header("location:modifierAdmin.php?password=false");
        }
    } else header("location:modifierAdmin.php");
?>