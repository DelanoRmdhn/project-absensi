<?php 

session_start();
session_unset();
session_destroy();
header("Location: login.php");

setcookie("id","",time()-3600);
setcookie("key","",time()-3600);
?>