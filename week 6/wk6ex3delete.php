<?php    

    // Connect to server and select database
    $mysqli = new mysqli("localhost","root","","test");

    $sql = "DELETE FROM test WHERE name = '{$_POST["txtname"]}' ";

    // Execute query
    $result = $mysqli->query($sql);

    header('Location: wk6ex2.php?msg=Deleted successfully!'); 


?>