<?php
error_reporting(E_ALL ^ E_WARNING); 
define("HOST","localhost");
define("USER_NAME","root");
define("PASSWORD","");
define("DATABASE","timelines");
try{

$con = mysqli_connect(HOST,USER_NAME,PASSWORD,DATABASE);

if (mysqli_connect_errno())
  {
  throw new Exception("".mysqli_connect_error());
  }
}
catch(Exception $e) {
  echo "<h3 class='error'>" . $e->getMessage() . "</h3>";
}



?>
