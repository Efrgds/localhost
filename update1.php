<?php
require_once 'dbconnect.php' ; 
  $id = $_POST["id"];
  $player = $_POST["player"];
  $title = $_POST["title"];
  $text = $_POST["text"];
mysqli_query($connect, "UPDATE `report` SET `id` = '$id', `player` = '$player', `title` = '$title', `text` = '$text' WHERE  `report`.`id` = '$id'");

  echo "<script>window.location = 'red_arh.php';</script>"
?>