<?php 
include("logincheck.php"); //checking Email id and password with the database
?>

<html>
<head><title>Food Factory</title>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="css/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
	<BR><BR><BR><BR><BR><BR><BR>
	<div class="container">
		<img src="images/login.png"/>
		
			<form method="POST"  action="login.php">
				<div class="form-input">
					<input type="text" name="email" placeholder="Enter the Email Id" required >
				</div>
			
				<div class="form-input">
					<input type="password" name="password" placeholder="Enter the Password" required>
				</div>
				<div class="form_checkbox">
					<input type="checkbox" checked >Keep me signed in
				</div>
				<button type="submit" name="login" class="btn-login"><i class="fa fa-thumbs-up"></i>  Login</button></br>
				<div style="color:#f4c842;font-weight:bold;"><br><?php echo $error ?></div>
				<div class="reg_link">
					Don't have a account? <a href="registration.php" style="color:FC6C00;font-style:italic">
					Create a new Account</a>
					
				</div>
				
				
		</form>
	</div>
</body>
</html>