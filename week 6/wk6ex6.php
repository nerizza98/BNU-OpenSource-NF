<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay £ " . taxallowance(15000,10000,22) . " tax </br>";
	html_footer();
?>