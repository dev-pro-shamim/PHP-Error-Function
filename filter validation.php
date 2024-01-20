<?php
$var = "192.168.1.100" ;
//var_dump(filter_var($var,FILTER_VALIDATE_EMAIL));

if(filter_var($var,FILTER_VALIDATE_MAC)){
  echo "<br> $var is VALID IP";


}else {
  echo "$ <br> $var is not an VALID IP";
}

 ?>
