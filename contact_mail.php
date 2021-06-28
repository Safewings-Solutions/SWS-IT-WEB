<?php 
//print_r($_POST); die;
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$recipient = "phppdollarr30@gmail.com";
 
	// Mail subject
	$subject = "Good news! A new request $email";
 
	// Mail content
	$email_content = " Enquiry from $name 
Name : $name 
Email: $email
Message: $message";
 
	// Mail headers
	$email_headers = "From:Safewings Solutions";
  //print_r($email_content); die;
 //echo $email_headers;

	// Main messages
	if (mail($recipient, $subject, $email_content, $email_headers))
		{
		echo "<h1>Email has been sent successfully!</h1>";
		}
	  else
		{
		echo "<p>Oops! Something went wrong and we couldn't send your Mail.</p>";
		}
		?>