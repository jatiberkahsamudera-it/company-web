<section class="testimonials-section section-padding" id="testimonials">
    <div class="container">
        <div class="section-heading">
            <div>
                <span class="eyebrow"><?php echo e($sectionContent['eyebrow']); ?></span>
                <h2><?php echo e($sectionContent['title']); ?></h2>
            </div>
        </div>
        <div class="testimonial-grid">
            <?php foreach ($sectionContent['items'] as $item): ?>
                <figure class="testimonial-card">
                    <blockquote>“<?php echo e($item['quote']); ?>”</blockquote>
                    <figcaption>
                        <strong><?php echo e($item['name']); ?></strong>
                        <span><?php echo e($item['role']); ?></span>
                    </figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>
