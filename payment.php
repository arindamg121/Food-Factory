<?php
	session_start();
	$price=$_SESSION["final_price"];
?>

<html>
<head>	<title>Food Factory</title>
	<link rel="stylesheet" a href="css/payment.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="boxed">
		<div class="upper">
			<h1>PAYMENT DETAILS</h1>
			<img src="images/payment.jpg">
		</div>
		<p style="font-weight:bold;margin-top:10px;margin-left:20px;">Fields with an &nbsp;' * '&nbsp; are required.</p></br></br></br>
		<div class="lower">
		<form method="POST" action="mail.php">
				Card Type*<label name="cno">Card Number*</label></br>
				<select name="CardType">
					<option value="">--- Select Card Type ---</option> 
					<option value="Master">Master Card</option>
					<option value="Visa">VISA Card</option>
					<option value="Rupay">Rupay Card</option></select>
					<input type="number"  name="CardNumber"  required </input> </br>
				Expiry Date* </br>
				<select name="ExpiryDateMonth">
					<option value="">--- Month ---</option> 
					<option value="01">01</option><option value="02">02</option>
					<option value="03">03</option><option value="04">04</option>
					<option value="05">05</option><option value="06">06</option>
					<option value="07">07</option><option value="08">08</option>
					<option value="09">09</option><option value="10">10</option>
					<option value="11">11</option><option value="12">12</option></select>
					<select name="ExpiryDateYear">
					<option value="">--- Year ---</option> 
					<option value="2019">2019</option><option value="2020">2020</option>
					<option value="2021">2021</option><option value="2022">2022</option>
					<option value="2023">2023</option><option value="2024">2024</option>
					<option value="2025">2025</option><option value="2026">2026</option>
					<option value="2027">2027</option><option value="2028">2028</option>
					<option value="2029">2029</option><option value="2030">2030</option></select></br>
					
					Card Holder*<label name="email">Email</label></br>
					<input type="text" name="CardHolder" required>
					<input type="email" name="Email" required></br>
					Amount to be charged:<span name="rupee" style="font-size:30px;margin-left:35px;">&#8377;</span><input type="number" name="Amount" value="<?php echo $price;?>" readonly>
					&nbsp;<label name="t&c">I have read & agree to the terms & conditions.<i style="font-size:15px" class="fa">&#xf15b;</i></label>
					<input type="checkbox" name="terms" required></br>
					<input type="submit" value="PAYMENT" name="paymentButton">
					<input type="reset" name="clear" value="CLEAR">
				</div>
			</form>
			
	</div>
</body>
</html>