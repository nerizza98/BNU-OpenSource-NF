<?php
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;
?>
<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>Year</th><th>Marks</th></tr> 
<?php
  foreach( $mymarks as $index => $value)
  {
    echo "<tr><td>$index</td><td>$value</td></tr>";
    echo "for  $index  my grade was  $value <br/>";
  }
    echo "<br/> My best year was Year 3 when I averaged ". $mymarks["year 3"];
?>
</table>
</body>
</html>