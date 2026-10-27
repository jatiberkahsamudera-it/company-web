<?php

require_once __DIR__ . '/../app/helpers.php';
require_once __DIR__ . '/../app/translations.php';

load_environment(dirname(__DIR__) . '/.env');

$site = require __DIR__ . '/site.php';
$site['company']['email'] = getenv('PUBLIC_CONTACT_EMAIL') ?: $site['company']['email'];
$activeSections = array_column($site['sections'], 'content');
$site['navigation'] = array_values(array_filter(
    $site['navigation'],
    static fn (array $item): bool => !isset($item['section'])
        || in_array($item['section'], $activeSections, true)
));

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$supportedLanguages = ['en', 'id'];
$requestedLanguage = $_GET['lang'] ?? null;

if (is_string($requestedLanguage) && in_array($requestedLanguage, $supportedLanguages, true)) {
    $_SESSION['language'] = $requestedLanguage;
}

$language = $_SESSION['language'] ?? 'en';
if (!in_array($language, $supportedLanguages, true)) {
    $language = 'en';
}

$content = $site['content'][$language];
$csrfToken = $_SESSION['csrf_token'] ??= bin2hex(random_bytes(32));
$contactStatus = $_SESSION['contact_status'] ?? null;
unset($_SESSION['contact_status']);
