<?php

$x = "Female";
$y = "Male";

  if ($_POST['txtage'] < 21) 
  {
	echo "You are under 21 years old<br/>";
  }
  else
  {
	echo "You are  21 years old or over<br/>";
  }

  if($_POST['txtgender'] == $x)
  {
    echo "You are $x <br/>";
  }
  else
  {
    echo "You are $y <br/>";
  }
?>
