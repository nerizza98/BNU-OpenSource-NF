<?php

  header("Content-type: audio/wav");

  $conn = mysqli_connect('localhost', 'root', '', 'monster');

  $sql = "SELECT audio FROM monster WHERE id='$_GET[id]';";
	
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  
  $audio = $row["audio"];

  echo $audio;
?>
