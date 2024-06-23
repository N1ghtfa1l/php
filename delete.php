<?php
global $connect;
require_once 'connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `exhibition_schedule` WHERE `exhibition_schedule`.`id` = '$id'");
header('Location: /index.php');