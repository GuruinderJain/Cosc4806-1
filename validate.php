<?php
session_start();

$valid_username = "Guru";
$valid_password = "password";

$username = $_REQUEST['username'];
$SESSION['username'] = $username;
$password = $_REQUEST['password'];

if ($valid_username == $username && $valid_password == $password){
  header ('location: /');
} else {
  
  if (!isset($_SESSION['failed_attempts'])){
    $_SESSION['failed_attempts'] = 1;
  } else {
    $_SESSION['failed_attempts'] = $_SESSION['failed_attempts'] + 1;
  }
  echo " This is unsuccessful attempt number: " . $_SESSION['failed_attempts'];
}

?>