<section class="about-section section-padding" id="about">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <?php if (!empty($sectionContent['image']) && image_exists($sectionContent['image'])): ?>
                    <div class="about-image">
                        <img src="<?php echo e($sectionContent['image']); ?>" alt="<?php echo e($sectionContent['image_alt']); ?>" class="placeholder-image">
                    </div>
                <?php else: ?>
                    <div class="image-placeholder about-image" role="img" aria-label="<?php echo e($sectionContent['image_alt']); ?>">
                        <!-- Add the image to public/assets/images and set its path in config/site.php. -->
                        <span class="placeholder-mark" aria-hidden="true">+</span>
                        <span><?php echo e($sectionContent['image_alt']); ?></span>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <span class="eyebrow"><?php echo e($sectionContent['eyebrow']); ?></span>
                <h2 class="section-title"><?php echo e($sectionContent['title']); ?></h2>
                <p class="section-description"><?php echo e($sectionContent['description']); ?></p>
            </div>
        </div>
    </div>
</section>
