<html>
  <head><title>Select the size</title></head>
    <body>
      <?php
      $cookieName = 'selQuantity';
      setcookie ($cookieName, $_POST['selqty']);
      ?>
      <table border=1 align="center">
        <tr><th>Size</th><th>Prize</th></tr>
        <tr><td>Small</td><td>£15.75</td>
        <tr><td>Medium</td><td>£16.75</td>
        <tr><td>Large</td><td>£17.75</td>
        <tr><td>Extra Large</td><td>£18.75</td>
     </tr>
    </table>
      <form action="selectcolour.php"  method="post">
	<br/>Select the size for the <?php echo $_POST['selqty'] ?>
        widgets you are ordering
    	<select name="selSize">
   	  <option>small</option>
	  <option>medium</option>
	  <option>large</option>
	  <option>extralarge</option>
        </select>
        <br/><br/>

        <input type="submit" value="Buy"/>
      </form>
   </body>
</html
