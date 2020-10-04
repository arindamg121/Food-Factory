<?php
	$error='';
	if(isset($_POST['login']))
	{
 
		$user=$_POST['email'];
		$pass=$_POST['password'];
		$conn = mysqli_connect("localhost","id9284607_mehul","mehul");
		$db = mysqli_select_db($conn, "id9284607_foodfactory");
		
		$query = mysqli_query($conn, "SELECT * FROM user_acc WHERE password='$pass' && email='$user'");
		
		$rows = mysqli_num_rows($query);
		if($rows == 1)
		{
			header("Location: Slideshow.html"); // Redirecting to other page
		}
		else
		{
			$error = "Username or Password is Invalid";
		}
		mysqli_close($conn); 
	}
?>