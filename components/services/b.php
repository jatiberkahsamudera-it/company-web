<section class="section-padding" id="services">
    <div class="container">
        <div class="section-heading">
            <div>
                <span class="eyebrow"><?php echo e($sectionContent['eyebrow']); ?></span>
                <h2><?php echo e($sectionContent['title']); ?></h2>
            </div>
        </div>
        <div class="service-list">
            <?php foreach ($sectionContent['items'] as $index => $service): ?>
                <article class="service-list-item">
                    <span class="card-number"><?php echo e(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)); ?></span>
                    <div>
                        <h3><?php echo e($service['title']); ?></h3>
                        <p><?php echo e($service['description']); ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
