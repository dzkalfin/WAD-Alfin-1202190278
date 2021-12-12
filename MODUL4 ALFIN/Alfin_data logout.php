<?php 
$_SESSION['logout']  = 'berhasil Logout';

header('Location: Alfin_Login.php');
exit();
session_destroy();

// header('Location:Alfin_Login.php');
// exit();
?>