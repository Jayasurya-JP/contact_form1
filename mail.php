<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message']

$email_form = 'jayasurya151199jp@gmail.com';

$email_subject = "new form submissinon";

$email_body = "user name: $name.\n".
                "user email: $visitor_email.\n".
                   "user message: $message.\n";


$to = " jayasuryajp151199@gmail.com";

$headers = "From: $email_form\r\n";

$headers = "Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");


?>