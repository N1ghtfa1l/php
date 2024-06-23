<?php
global $connect;
require_once 'connect.php';

$name = $_POST['name'];
$description = $_POST['description'];
$data_start = $_POST['data_start'];
mysqli_query($connect, "INSERT INTO `exhibition_schedule` (`id`, `name`, `description`, `data_start`) VALUES (NULL, '$name', '$description', '$data_start')");
header('Location: /index.php');
