<?php
session_destroy();
session_start();
$_SESSION['connecte']=false;
$_SESSION['connecte']="";
header('Location: accueil.php?');
exit;
?>
