<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	$gross = $hourlyrate * $hoursperweek;
	$tax = $gross * 0.22;
    $netwage = $gross - $tax;
    echo "Gross: ", $gross;
    echo "<br>";
    echo "Net wage: ", $netwage;

?>
</body>
</html>
