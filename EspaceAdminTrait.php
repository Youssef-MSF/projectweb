<?php
    session_start();
    $connex=mysqli_connect("localhost","root","","projetweb");
    if(!empty($connex)){
        $stmt=mysqli_stmt_init($connex);
        if(!empty($stmt)){
            $sql="SELECT * FROM article WHERE categorie=? AND is_deleted=0";
            if($_POST["catg"]=="Toutes les catégories"){
                $sql="SELECT * FROM article WHERE is_deleted=0";
            }
            if(mysqli_stmt_prepare($stmt,$sql)){
                mysqli_stmt_bind_param($stmt,"s",$_POST["catg"]);
                mysqli_stmt_execute($stmt);
                $result=mysqli_stmt_get_result($stmt);
                $arrayImg=array();$i=0;
                while($arrayImg[$i]=mysqli_fetch_array($result)){ $i++;}
                $_SESSION["arrayImg"]=$arrayImg;
                header("location:EspaceAdmin.php");
            }else echo "Insertion query has failed!!";
        }else echo "prepare statement build has failed!!";
    }else echo "connection failed!!";
?>
