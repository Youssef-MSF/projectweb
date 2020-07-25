<?php

session_start();

if(isset($_SESSION['id'])){
    header("location:paiment.php");
}else{
    header("location:login.php");
}

?>