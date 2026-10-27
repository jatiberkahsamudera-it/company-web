<?php

$_SERVER['REQUEST_METHOD'] = 'GET';
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['REQUEST_URI'] = '/';

ob_start();
require dirname(__DIR__) . '/public/index.php';
$html = ob_get_clean();

foreach (['Company Name', 'id="top"', 'id="services"', 'id="about"', 'id="contact"', 'hero-section'] as $expected) {
    if (!str_contains($html, $expected)) {
        throw new RuntimeException('Homepage is missing expected content: ' . $expected);
    }
}

if (substr_count($html, '<article class="service-card">') !== 3) {
    throw new RuntimeException('Homepage did not render each configured service.');
}

if (str_contains($html, 'homeCarousel')) {
    throw new RuntimeException('The one-page profile should not render a carousel.');
}

$registry = require dirname(__DIR__) . '/app/component_registry.php';
foreach ($registry as $componentPath) {
    if (!is_file($componentPath)) {
        throw new RuntimeException('Registered component does not exist: ' . $componentPath);
    }
}

foreach ([0, 1, 7] as $serviceCount) {
    $sectionContent = [
        'eyebrow' => 'Services',
        'title' => 'Configured services',
        'items' => array_fill(0, $serviceCount, ['title' => 'Service', 'description' => 'Description']),
    ];
    ob_start();
    require dirname(__DIR__) . '/components/services/a.php';
    $serviceHtml = ob_get_clean();

    if (substr_count($serviceHtml, '<article class="service-card">') !== $serviceCount) {
        throw new RuntimeException('Services component did not render the configured number of items.');
    }
}

echo "Homepage smoke test passed.\n";
