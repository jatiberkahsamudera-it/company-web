<?php

require dirname(__DIR__) . '/config/bootstrap.php';

$components = require dirname(__DIR__) . '/app/component_registry.php';

require dirname(__DIR__) . '/components/layout/header.php';
?>
<main>
    <?php foreach ($site['sections'] as $section): ?>
        <?php
        $componentPath = $components[$section['component']] ?? null;
        if ($componentPath === null || !isset($content[$section['content']])) {
            throw new UnexpectedValueException('Invalid site section configuration.');
        }
        $sectionContent = $content[$section['content']];
        require $componentPath;
        ?>
    <?php endforeach; ?>
</main>
<?php require dirname(__DIR__) . '/components/layout/footer.php'; ?>
