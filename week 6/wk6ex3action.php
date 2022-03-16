<?php
 
// Create connection
$conn = new mysqli("localhost", "root", "", "test");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$newnum = $_POST[phone_number];

$sql = "UPDATE test SET phone_number= $newnum WHERE name = '$_GET[id]'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>