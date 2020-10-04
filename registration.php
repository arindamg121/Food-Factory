<?php 
include("registration_check.php"); //checking Email id  with the database
$sitekey='6Lfb7IwUAAAAAGWWzpFX7RKbr15tQsGABpg2VOPA';
$secretkey='6Lfb7IwUAAAAAAqVU12KPtJQN8KOJEDLIDd_q0ZW';
 
?>

<html>
	<head><title>Food Factory</title>
		<link rel="stylesheet" a href="css/registration.css">
		<script>
			var check = function() 
			{
				if (document.getElementById('password').value == document.getElementById('confirm_password').value) 
				{
					document.getElementById('message').innerHTML = '';
				} 
				else {
						document.getElementById('message').style.color = 'red';
						document.getElementById('message').innerHTML = 'not matching';
				}
			}
		</script>
		<script>
				function submitUserForm() {
					var response = grecaptcha.getResponse();
					if(response.length == 0) {
						document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;margin-left:-190px;">This field is required.</span>';
						return false;
					}
				return true;
				}
 
				function verifyCaptcha() {
				document.getElementById('g-recaptcha-error').innerHTML = '';
				}
</script>
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
		
	</head>
	<body>
		
		<BR><BR><BR>
		
		<div class="container">
			<h1>Create your free account<h1>
			<div class="signin">Already have an account?&nbsp;&nbsp;<a href="login.php"><input type="button" value="Sign in"/></a></div>
			<h2>Start ordering Yummy Meal</h2>
			
			
			<form method="POST" onsubmit="return submitUserForm();" action="registration.php">
				<div class="form-input1">
					First Name *</br><input type="text" name="fname" placeholder="Enter the First Name" tabindex=1 required></br>
					Date of Birth *</br><input type="date" name="dob" tabindex=3 required></br>
					Mobile Number *</br><input type="text" maxlength="12" name="mobile" placeholder="Enter Mobile Number" tabindex=6 required ></br>
					Password *</br><input type="password" id="password" name="password" onkeyup="check();" placeholder="Enter your Password" tabindex=8 required ></br>
					Address *</br><input type="text" name="address" placeholder="Enter your address" tabindex=10 required></br>
					Location * </br><select tabindex=12 name="location"> <option value="">--- Select a Location ---</option>
															 <option value="Khargar">Khargar</option>
															 <option value="Belapur CBD">Belapur CBD</option>
									</select></br>
					
				</div>
				
				<div class="form-input2">
					Last Name *</br><input type="text" name="lname" placeholder="Enter the Last Name" tabindex=2 required></br>
					Gender </br><input type="radio" value="Male" name="gender" tabindex=4/>Male&nbsp;&nbsp;
								<input type="radio" value="Female" name="gender" tabindex=5 />Female</br>
					Email Id *</br><input type="Email" name="email" placeholder="Enter your Email" tabindex=7 required ></br>
					Confirm Password *</br><input type="password" id="confirm_password" name="Confirm_password" onkeyup='check();' placeholder="Retype your Password" tabindex=9 required ><blink><span id='message'></span></blink></br>
					
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					Zip Code *</br><input type="text" name="zipcode" tabindex=11 required></br>
					<label name="city">City *</label><label name="state">State *</label></br>
					
					<select name="city" tabindex=13><option value="">--- Select a City ---</option>
										<option value="Navi Mumbai">Navi Mumbai</option>
					</select>
					<select name="state" tabindex=14><option value="">--- Select a State ---</option> 
										 <option value="Maharashtra">Maharashtra</option>
					</select></br></br>
					<div class="g-recaptcha" style="margin-left:-50px;" tabindex=15 data-sitekey="6Lfb7IwUAAAAAGWWzpFX7RKbr15tQsGABpg2VOPA" data-callback="verifyCaptcha"></div>
					<div id="g-recaptcha-error"></div>
					</br><hr><input type="checkbox" name="privacy" tabindex=16 required> By checking this box, I certify that i am 18 or older and agree to the <a href="https://policies.google.com/terms?hl=en">Privacy Policy</a> *<hr>
				</div>
				<input type="submit" name="register" value="Register" tabindex=17 >
				<div style="color:red;font-weight:bold;margin-top:-50px;padding-left:80px;"><br><?php echo $error ?></div>
		</form>
	</body>
</html>