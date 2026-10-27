<footer class="site-footer">
    <div class="container">
        <div class="footer-main">
            <div>
                <a class="footer-brand" href="/#top"><?php echo e($site['company']['name']); ?></a>
                <p><?php echo e($content['footer_description']); ?></p>
            </div>
            <nav class="footer-links" aria-label="<?php echo e(t('footer.navigation')); ?>">
                <?php foreach ($site['navigation'] as $item): ?>
                    <a href="<?php echo e($item['href']); ?>"><?php echo e(t($item['label'])); ?></a>
                <?php endforeach; ?>
            </nav>
            <?php if ($site['company']['social_links'] !== []): ?>
                <nav class="footer-links" aria-label="Social media">
                    <?php foreach ($site['company']['social_links'] as $socialLink): ?>
                        <a href="<?php echo e($socialLink['url']); ?>" target="_blank" rel="noopener noreferrer"><?php echo e($socialLink['label']); ?></a>
                    <?php endforeach; ?>
                </nav>
            <?php endif; ?>
        </div>
        <div class="footer-bottom">
            <span>© <?php echo date('Y'); ?> <?php echo e($site['company']['name']); ?>. <?php echo e($content['footer_rights']); ?></span>
            <span><?php echo e($content['footer_tagline']); ?></span>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
