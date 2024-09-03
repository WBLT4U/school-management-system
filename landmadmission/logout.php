<?php
session_start();

unset($_SESSION['logged']) ;
unset($_SESSION['log']) ;
session_destroy() ;

session_start();
$_SESSION['msg'] = "Logout Executed!" ;
header("Location:../indexes.php") ;
?>