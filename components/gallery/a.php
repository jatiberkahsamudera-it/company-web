<section class="gallery-section section-padding" id="gallery">
    <div class="container">
        <div class="section-heading">
            <div>
                <span class="eyebrow"><?php echo e($sectionContent['eyebrow']); ?></span>
                <h2><?php echo e($sectionContent['title']); ?></h2>
            </div>
        </div>
        <div class="gallery-grid">
            <?php foreach ($sectionContent['items'] as $item): ?>
                <figure class="gallery-item">
                    <?php if (!empty($item['image']) && image_exists($item['image'])): ?>
                        <img src="<?php echo e($item['image']); ?>" alt="<?php echo e($item['alt']); ?>" class="placeholder-image">
                    <?php else: ?>
                        <!-- Add the image to public/assets/images and set its path in config/site.php. -->
                        <div class="image-placeholder gallery-image" role="img" aria-label="<?php echo e($item['alt']); ?>">
                            <span class="placeholder-mark" aria-hidden="true">+</span>
                            <span><?php echo e($item['alt']); ?></span>
                        </div>
                    <?php endif; ?>
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>
