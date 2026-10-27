<?php

require dirname(__DIR__) . '/config/bootstrap.php';

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    http_response_code(405);
    header('Allow: POST');
    exit('Method not allowed.');
}

$postedToken = $_POST['csrf_token'] ?? '';
if (!is_string($postedToken) || !hash_equals($csrfToken, $postedToken)) {
    $_SESSION['contact_status'] = 'error';
    header('Location: /#contact', true, 303);
    exit;
}

$postValue = static function (string $key): string {
    $value = $_POST[$key] ?? '';
    return is_string($value) ? trim($value) : '';
};

$name = $postValue('name');
$company = $postValue('company');
$email = $postValue('email');
$phone = $postValue('phone');
$message = $postValue('message');

if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $message === '') {
    $_SESSION['contact_status'] = 'error';
    header('Location: /#contact', true, 303);
    exit;
}

$recipient = getenv('CONTACT_RECIPIENT');
$sender = getenv('MAIL_FROM');
if ($recipient === false || !filter_var($recipient, FILTER_VALIDATE_EMAIL)
    || $sender === false || !filter_var($sender, FILTER_VALIDATE_EMAIL)) {
    error_log('Contact form is not configured: set valid CONTACT_RECIPIENT and MAIL_FROM values.');
    $_SESSION['contact_status'] = 'error';
    header('Location: /#contact', true, 303);
    exit;
}

$body = "Name: $name\nCompany: $company\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
$sent = mail(
    $recipient,
    'New website inquiry',
    $body,
    "From: $sender\r\nReply-To: $email"
);

if (!$sent) {
    error_log('Contact form email could not be sent by the configured mail transport.');
}

$_SESSION['contact_status'] = $sent ? 'success' : 'error';
header('Location: /#contact', true, 303);
exit;
