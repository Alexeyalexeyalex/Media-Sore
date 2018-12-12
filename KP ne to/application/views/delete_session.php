<?php session_start();
unset($_SESSION['login']);
unset($_SESSION['password']);
session_unset(); // осов все переменные
session_destroy(); // всю информацию убиваем

header("location:http://localhost/autorization");
exit;
