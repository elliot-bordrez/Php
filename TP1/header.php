<?php 
session_start();

$isconnect=false;

if(isset($_SESSION['Connect'])) {
    $isconnect=$_SESSION['Connect'];
} else {

    $_SESSION['Connect'] = true;
}

?>