<?php

$arr = array(
"stname" =>"<H1>Shamim Islam<H1>" ,
  "stmarks" =>"10"  ,
"stemail" =>"shami mal ok@gm ail.com",


);
$filters =  array(
  "stname" => FILTER_SANITIZE_STRING,
  "stmarks" => array(
    "filter" => FILTER_VALIDATE_INT,
    "options" => array(
      "min_range" =>1,
      "max_range" =>100
    )
  ),

   "stemail" => FILTER_SANITIZE_EMAIL
 );
 echo "<pre>";
 print_r(filter_var_array($arr,$filters));
 echo "<pre>";

 ?>
