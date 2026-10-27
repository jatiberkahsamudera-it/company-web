<section class="hero-section" id="top">
    <div class="container hero-container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5 hero-copy">
                <span class="eyebrow"><?php echo e($sectionContent['eyebrow']); ?></span>
                <h1><?php echo e($sectionContent['title']); ?></h1>
                <p><?php echo e($sectionContent['description']); ?></p>
                <a href="#contact" class="btn btn-accent"><?php echo e(t('topbar.contact')); ?> <span aria-hidden="true">→</span></a>
            </div>
            <div class="col-lg-7">
                <?php if (!empty($sectionContent['image']) && image_exists($sectionContent['image'])): ?>
                    <div class="hero-image">
                        <img src="<?php echo e($sectionContent['image']); ?>" alt="<?php echo e($sectionContent['image_alt']); ?>" class="placeholder-image">
                    </div>
                <?php else: ?>
                    <div class="image-placeholder hero-image" role="img" aria-label="<?php echo e($sectionContent['image_alt']); ?>">
                        <!-- Add the image to public/assets/images and set its path in config/site.php. -->
                        <span class="placeholder-mark" aria-hidden="true">+</span>
                        <span><?php echo e($sectionContent['image_alt']); ?></span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
