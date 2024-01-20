
<?php
// $var = "45.*50.2&31abc" ;
// $var = filter_var($var,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
//
// if(filter_var($var,FILTER_VALIDATE_FLOAT)){
//   echo "<br> $var is VALID FLOAT ";
//
//
// }else {
//   echo "<br> $var is not an VALID FLOAT";
// }

$var = "<h2>Shamim $ AFIAêïî</h2>";
echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);

 ?>
