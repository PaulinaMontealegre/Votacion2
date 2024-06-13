<?php
session_start();
error_reporting(0);
if ($_POST['btnBoton1']) 
    $_SESSION['candidata1']+=1;
if ($_POST['btnBoton2'])    
    $_SESSION['candidata2']+=1;
if ($_POST['btnBoton3']) 
    $_SESSION['candidata3']+=1;
if ($_POST['btnBoton4']) 
    $_SESSION['candidata4']+=1;
$_SESSION['total']=$_SESSION['candidata1']+$_SESSION['candidata2']+
    $_SESSION['candidata3']+$_SESSION['candidata4'];
header('location:index.php');
?>


