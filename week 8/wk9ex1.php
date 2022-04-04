<?php
     $lottodate = date("dmY");
     echo "The lottery numbers for $lottodate are ";
     for($n=1;$n<7;$n++){
        $number[$n] = rand(1,49);
        echo "<br/> $number[$n]";
     }

     $conn = mysqli_connect("localhost", "root", "", "lotto");

     $sql = "INSERT into lotto (lottodate,number1,number2, 
     number3,number4,number5,number6) VALUES ('$lottodate','$number[1]','$number[2]',
     '$number[3]','$number[4]','$number[5]','$number[6]');";

     $result = mysqli_query($conn, $sql);
     echo "<br/>This weeks numbers have been saved";

?>
