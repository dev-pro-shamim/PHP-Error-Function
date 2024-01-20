<!DOCTYPE html>
<html>
<body>

<h2>How To Create an Email Field</h2>

<p>Show an email field:</p>
<form method= "get" action="<?PHP echo $_SERVER[PHP_SELF]   ?>">
  <label for="email">Enter your email:</label>
  <input type="email" id="email" name="email">
  <input type="submit">
</form>
<br>

<?php
if(isset($_REQUEST['submit'])){

  echo filter_input(INPUR_GET,"email",FILTER_VALIDATE_EMAIL);
}


 ?>
</body>
</html>
