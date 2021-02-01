<?php
session_start();

if(isset($_POST['email'])){
    $_SESSION['email']=$_POST['email'];
    header('Location: ./panel.php');
}

?>