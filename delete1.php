<?php
require_once 'dbconnect.php' ; 
$id = $_GET['id'];
$query= ("DELETE FROM report WHERE `report`.`id` = '$id'");
mysqli_query($connect, $query);
header( 'Location: red_arh.php');
?>