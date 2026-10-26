<?php

$name = htmlspecialchars($_POST['name']);
$company = htmlspecialchars($_POST['company']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$message = htmlspecialchars($_POST['message']);

$to = "sales@yourcompany.com";

$subject = "New Website Inquiry";

$body = "
Name: $name

Company: $company

Email: $email

Phone: $phone

Message:
$message
";

$headers = "From: noreply@yourcompany.com";

mail($to, $subject, $body, $headers);

echo "
<h2>Thank you.</h2>
<p>Your inquiry has been submitted.</p>
";