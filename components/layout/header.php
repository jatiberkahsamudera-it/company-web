<!DOCTYPE html>
<html lang="<?php echo e($language); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="<?php echo e($site['theme']['ink']); ?>">
    <meta name="description" content="<?php echo e($content['site_description']); ?>">
    <title><?php echo e($content['site_title']); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>:root{<?php echo e(theme_style($site['theme'])); ?>}</style>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<div class="topbar">
    <div class="container topbar-inner">
        <span><?php echo e($content['topbar_label']); ?></span>
        <div class="language-switch" role="group" aria-label="<?php echo e(t('language.label')); ?>">
            <a href="?lang=en" lang="en" hreflang="en"<?php echo $language === 'en' ? ' aria-current="true"' : ''; ?>>EN</a>
            <span aria-hidden="true">/</span>
            <a href="?lang=id" lang="id" hreflang="id"<?php echo $language === 'id' ? ' aria-current="true"' : ''; ?>>ID</a>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg site-navbar" aria-label="<?php echo e(t('nav.primary')); ?>">
    <div class="container">
        <a class="navbar-brand" href="/#top" aria-label="<?php echo e($site['company']['name']); ?>">
            <span class="brand-mark" aria-hidden="true"><?php echo e($site['company']['brand_mark']); ?></span>
            <span class="brand-name"><?php echo e($site['company']['name']); ?></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php echo e(t('nav.toggle')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <?php foreach ($site['navigation'] as $item): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e($item['href']); ?>"><?php echo e(t($item['label'])); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>
