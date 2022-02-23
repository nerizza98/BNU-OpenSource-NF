<html>
  <head><title>Select colour page</title></head>
    <body>
      <?php
      $cookieSize = 'ckSize';
      setcookie ($cookieSize, $_POST['selSize']);
      ?>
      <form action="confirmation.php"  method="post">
    Selected <?php echo "$_POST[selSize]"; ?> size for <?php echo $_COOKIE['selQuantity'] . " widgets </br>"; 
    ?>
	Select the colour for the <?php echo $_COOKIE['selQuantity'] . " widgets ";
    ?> you are ordering
   	<select name="selcolour">
   	  <option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>
        </select>
        <br/><br/>	
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html
