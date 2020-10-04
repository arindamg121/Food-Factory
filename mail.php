<?php
//id:foodfactory.offical@gmail.com or foodfactorybvp@gmail.com
//pass:foodfactory


$name=$_REQUEST['CardHolder'];
$Amount=$_REQUEST['Amount'];
$date=date(DATE_RFC822);
$orderid= mt_rand(1000,9999);
//MAIL FUNCTION
$to=$_REQUEST['Email'];
$subject="FOOD FACTORY__Order confirmation";
$message="Hello $name,
		Thank you for placing the order. We'd like to let you know that your order has been placed Successfully. 
		
		Following are the deails of your Order
		Order ID: $orderid.
		Order Date: $date.
		Order Total: Rs 1500.00.
		
		We hope to see you again soon:)
		FoodFactoryOffical.com  ";

		
		if(mail($to,$subject,$message)) 
{
	echo "</br></br><h1 align='center'>Thank You for Ordering</h1>";
	echo "<h2 align='center'>Your Order has been placed successfully</h2>";
	echo "<h3 align='center'>Kindly check your Order Details Send to your mail</h3></br></br>";
	echo "<h4 align='center'><a href='Slideshow.html'>Back to Home Page</h4>";
}
else
{
	echo "<h1 align='center'>Unable to place your order</h1>";
	echo "<h4 align='center'>Try Again after some time</h4>";
}
?>