
<!doctype html>
<html lang="en">
		<head>
				<meta charset="utf-8"/>
				<title>Saving Feedback </title>
				<link rel="stylesheet" href="">
				
		
		</head>
			<body>
					<header>
						
					
					</header>
					<nav>
					
					
					</nav>
						<section>
								<article>
										<header>
										<h2> Thanks for your valuable feedback!</h2>
										</header>
										 
<?php
	
	# Function filterInputData() 
	 # filters input data to prevent from XSS
	function filterInputData($data)
{
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}


if(isset($_POST['subBtn']))
{
	     $name = filterInputData($_POST['name']);
         $email = filterInputData($_POST['email']);
		 $reason = filterInputData($_POST['reason']);
         $message = filterInputData($_POST['message']);
		
 include("connect.php");
 
 $sql="INSERT INTO contact_us(id,name,email,reason,message) VALUES(0,'$name','$email','$reason','$message');";
 if(!mysqli_query($con,$sql))
 {
	  echo "<h3 class='error'>" . mysqli_error($con) . "</h3>";
	 
 }
 mysqli_close($con);
}

?>
										<footer>
										
										</footer>
										
								</article>
						</section>
					
					
					<footer>
					
					</footer>
			
			</body>


</html>
