<?php
//add the recipient's address here
$myemail = 'info@dustinswords.com';

//grab named inputs from html then post to #thanks
if (isset($_POST['email'])) {
$email = strip_tags($_POST['email']);
//$reason = strip_tags($_POST['reason']);
echo "<span class=\"alert alert-success\" >Thanks. We will contact you soon.</span><br><br>";
//echo "<stong>Name:</strong> ".$name."<br>";   
//echo "<stong>Email:</strong> ".$email."<br>"; 
//echo "<stong>Message:</strong> ".$content."<br>";

if(isset($_POST['interested'])) { // honey pot check
    die();
} else {
//generate email and send!
$to = $myemail;
$email_subject = "Contact form: $email";
$email_body = "You have received a new message on Dustin's Words \n".
"Email: $email \n ".
"Reason: $reason \n ".
$headers = "From: Dustin's Words\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
}}
?>