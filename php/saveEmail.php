<?php
//saveEmail.php
if(isset($_REQUEST['email']))
{
	include("connect.php");
 $email=$_REQUEST['email'];
 $sql="INSERT INTO newsletter(id,email) VALUES(0,'$email');";
 if(!mysqli_query($con,$sql))
 {
	  echo "<h3 class='error'>" . mysqli_error($con) . "</h3>";
	 break;
 }
 else
 {
 	echo "You Have Successfully Subscribed to our News Letter";
 }
 mysqli_close($con);

}

?>