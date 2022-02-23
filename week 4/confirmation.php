<?php
    switch ($_COOKIE['ckSize']):
    case "small":
        $_COOKIE['ckSize'] = 15.75;
        break;
    case "medium":
        $_COOKIE['ckSize'] = 16.75;
        break;
    case "large":
        $_COOKIE['ckSize'] = 17.75;
        break;
    case "extralarge":
        $_COOKIE['ckSize'] = 18.75;
        break;
    default:
         $_COOKIE['ckSize'] = 0;
    endswitch;
    $totalPrice = $_COOKIE['selQuantity'] * $_COOKIE['ckSize'];
    $qtyfinal = $_COOKIE['selQuantity'];
   echo "<h2> Your order qty is $qtyfinal </h2>" ;
   echo "<h2> and the selected colour is $_POST[selcolour].</h2>";
   echo "<h2> Your total price is $totalPrice </h2>";

?>
