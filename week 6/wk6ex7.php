<?php
	include("myfunctions.inc");
	html_header("My third function demo");
	echo "I pay " . calculatetax(15000) . " tax";
	html_footer();
?>
