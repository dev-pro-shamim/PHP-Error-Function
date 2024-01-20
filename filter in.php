<!DOCTYPE html>
<html>
<body>

<form method= "post" action="<?php   echo $_SERVER['PHP_SELF']; ?>">
  <label for="email">Enter your </label>
  Marks : <input type="text"  name="marks" autocomplete="off">
  <input type="submit" name="submit" value="submit">
</form>
<br>

<?php
if(isset($_REQUEST['submit'])){
$options = array(
"options" => array(
  "min" => 1,
    "max" => 100
)
);

  //echo filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL);
  if(filter_input(INPUT_COOKIE,"marks",FILTER_VALIDATE_INT,$options)){
echo "Marks is Valid";

  }else {
echo "Marks is  not Valid";
  }
}


 ?>
</body>
</html>
