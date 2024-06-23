<?php
global $connect;
require_once 'connect.php';
$login = $_POST['login'];
$pass = $_POST['pass'];
if ($login == 'admin' && $pass == 5679) {
$sql = "SELECT * FROM 'auth' WHERE login = '$login' && pass = '$pass' ";

    setcookie('admin', $login['login'], time() + 60);
}
header('Location: /index.php');
