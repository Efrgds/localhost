<?php
require_once 'dbconnect.php' ; 
$id_player = $_GET['id_player'];
$query= ("DELETE FROM player WHERE `player`.`id_player` = '$id_player'");
mysqli_query($connect, $query);
header( 'Location: player.php');
?>