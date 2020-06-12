<?php
session_start();

$email = $_POST['email'];
$pw = $_POST['password'];

$_SESSION['email'] = $email;

Header('location:Ifynitz.php');

?>
