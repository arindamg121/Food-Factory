<?php
$error='';
if(isset($_POST['register']))
{

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$password=$_POST["password"];
$address=$_POST["address"];
$zipcode=$_POST["zipcode"];
$location=$_POST["location"];
$city=$_POST["city"];
$state=$_POST["state"];											
    
	$conn=mysqli_connect("localhost","id9284607_mehul","mehul", "id9284607_foodfactory");

	$query = mysqli_query($conn, "SELECT * FROM user_acc WHERE email='$email'");
	
	$rows = mysqli_num_rows($query);
	if($rows>=1)
	{  
	    $error = "Email id entered is already used";
	}
	else
	{	
		$sql="INSERT INTO `user_acc`(`fname`, `lname`, `dob`, `gender`, `mobile`, `email`, `password`, `address`, `zipcode`, `location`, `city`, `state`) VALUES ('$fname','$lname','$dob','$gender',$mobile,'$email','$password','$address',$zipcode,'$location','$city','$state')";
		$query=mysqli_query($conn,$sql);
		echo "<script> confirm('Your Account Has been Successfully Created\n Click Ok to login')</script>";
	}
	mysqli_close($conn); 
}
?>


