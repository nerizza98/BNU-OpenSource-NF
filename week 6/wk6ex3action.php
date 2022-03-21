<?php    

    // Connect to server and select database
    $link = mysqli_connect('localhost', 'root', '', 'test');

    $sql = "UPDATE test SET name = '{$_POST["txtname"]}',
    email = '{$_POST["txtemail"]}',
    phone_number = '{$_POST["txttelno"]}' 
    where ID = '{$_GET["id"]}'; ";

    // Execute query
    $result = mysqli_query($link, $sql);
    
    header('Location: wk6ex2.php?msg=Saved successfully!');

?>