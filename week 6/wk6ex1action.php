<?php
	$sql = "INSERT INTO test (name, email , phone_number) 
	values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

	// Connect to server and select database

    $link = mysqli_connect('localhost', 'root', '', 'test');

	// Execute sql statement	
    
    $sql = "SELECT * from test";
	$result = mysqli_query($link, $sql);

	// Execute sql statement
	
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}

    mysqli_free_result($result);
    mysqli_close($link);
?>
