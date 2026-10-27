<?php

function load_environment(string $path): void
{
    if (!is_file($path)) {
        return;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES);
    if ($lines === false) {
        throw new RuntimeException('Unable to read environment file: ' . $path);
    }

    foreach ($lines as $lineNumber => $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#')) {
            continue;
        }

        if (!preg_match('/^([A-Za-z_][A-Za-z0-9_]*)\s*=\s*(.*)$/', $line, $matches)) {
            throw new RuntimeException('Invalid environment entry on line ' . ($lineNumber + 1));
        }

        $name = $matches[1];
        $value = trim($matches[2]);
        if (strlen($value) >= 2 && (($value[0] === '"' && str_ends_with($value, '"')) || ($value[0] === "'" && str_ends_with($value, "'")))) {
            $value = substr($value, 1, -1);
        }

        if (getenv($name) === false) {
            putenv($name . '=' . $value);
            $_ENV[$name] = $value;
        }
    }
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function image_exists(string $source): bool
{
    if (!str_starts_with($source, '/assets/images/')) {
        return false;
    }

    $imageDirectory = realpath(dirname(__DIR__) . '/public/assets/images');
    $imagePath = realpath(dirname(__DIR__) . '/public' . $source);

    return $imageDirectory !== false
        && $imagePath !== false
        && str_starts_with($imagePath, $imageDirectory . DIRECTORY_SEPARATOR)
        && is_file($imagePath);
}

function t(string $key): string
{
    global $language, $translations;

    if (!isset($translations[$language][$key])) {
        throw new LogicException('Missing translation: ' . $key . ' (' . $language . ')');
    }

    return $translations[$language][$key];
}

function theme_style(array $theme): string
{
    $properties = [
        'ink' => '--ink',
        'accent' => '--accent',
        'muted' => '--muted',
        'paper' => '--paper',
        'surface' => '--surface',
        'line' => '--line',
    ];
    $declarations = [];

    foreach ($properties as $key => $property) {
        $value = $theme[$key] ?? null;
        if (!is_string($value) || !preg_match('/^#[0-9a-fA-F]{6}$/', $value)) {
            throw new UnexpectedValueException('Theme color must be a six-digit hex value: ' . $key);
        }

        $declarations[] = $property . ':' . strtolower($value);
        if ($key === 'ink' || $key === 'accent') {
            $declarations[] = $property . '-rgb:' . implode(', ', sscanf(substr($value, 1), '%2x%2x%2x'));
        }
    }

    return implode(';', $declarations);
}
