<?php
  require_once 'dbconnect.php' ; 
  $id_player = $_POST["id_player"];
  $full_name = $_POST["full_name"];
  $place_of_work = $_POST["place_of_work"];
  $work = $_POST["work"];
  $topic = $_POST["topic"];
  mysqli_query($connect, "UPDATE `player` SET `full_name` = '$full_name', `work` = '$work', `place_of_work` = '$place_of_work', `topic` = '$topic' WHERE  `player`.`id_player` = '$id_player'");
  echo "<script>window.location = 'player.php';</script>"
?>