<section class="hero-section hero-section-centered" id="top">
    <div class="container hero-centered-content">
        <span class="eyebrow"><?php echo e($sectionContent['eyebrow']); ?></span>
        <h1><?php echo e($sectionContent['title']); ?></h1>
        <p><?php echo e($sectionContent['description']); ?></p>
        <a href="#contact" class="btn btn-accent"><?php echo e(t('topbar.contact')); ?> <span aria-hidden="true">→</span></a>
        <?php if (!empty($sectionContent['image']) && image_exists($sectionContent['image'])): ?>
            <div class="hero-centered-image">
                <img src="<?php echo e($sectionContent['image']); ?>" alt="<?php echo e($sectionContent['image_alt']); ?>" class="placeholder-image">
            </div>
        <?php endif; ?>
    </div>
</section>
