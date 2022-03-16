<?php	

	// Connect to server and select database
    $link = mysqli_connect('localhost', 'root', '', 'test');
	$sql = "SELECT * from test where name = '$_GET[id]' ";
	// Execute query
    $result = mysqli_query($link, $sql);
	$row = mysqli_fetch_assoc($result);
    
?>
<html>
<body>
<form action="wk6ex3action.php" method="post">

	Name :
	<input type=text name=txtname value="<?php echo $row['name'] ?>" readonly />
	</br>
	Phone number :
	<input type=text name=txttelno value="<?php echo $row['phone_number'] ?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<?php echo $row['email'] ?>" />
	</br>
	<input type=submit name=btnsubmit value="save" />
</form>
</body>
