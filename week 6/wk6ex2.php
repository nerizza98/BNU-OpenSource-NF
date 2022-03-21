<?php	

	// Connect to server and select database
    $mysqli = new mysqli("localhost","root","","test");

	$sql = "SELECT * from test";
	// Execute sql statement

	$result = $mysqli->query($sql);
	//$result = mysqli_query($link, $sql);
    
?>
<html>
<body>

<?php
if (isset($_GET["msg"])){
	echo "<p>{$_GET["msg"]}</p>";
}

while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[ID]\">$row[name] ($row[ID])</a></br>";  	
}
?>
</body>
</html>
