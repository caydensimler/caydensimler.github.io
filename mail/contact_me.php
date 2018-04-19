<?php
// Check for empty fields
if(empty($_REQUEST['name'])      ||
   empty($_REQUEST['email'])     ||
   empty($_REQUEST['phone'])     ||
   empty($_REQUEST['message'])   ||
   !filter_var($_REQUEST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_REQUEST['name']));
$email_address = strip_tags(htmlspecialchars($_REQUEST['email']));
$phone = strip_tags(htmlspecialchars($_REQUEST['phone']));
$message = strip_tags(htmlspecialchars($_REQUEST['message']));
   
// Create the email and send the message
$to = 'cayden.simler@hotmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form!\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@caydensimler.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   

mail($to,$email_subject,$email_body,$headers);
return true;         
?>
