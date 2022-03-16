<?php	

	// Connect to server and select database
    $link = mysqli_connect('localhost', 'root', '', 'test');
	$sql = "SELECT * from test";
	// Execute sql statement
    $sql = "SELECT * from test";
	$result = mysqli_query($link, $sql);
    

	
?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[name]\">$row[name]</a></br>";  	
}

mysqli_free_result($result);
mysqli_close($link);
?>
</body>
</html>
