<section class="contact-section section-padding" id="contact">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5">
                <span class="eyebrow"><?php echo e($sectionContent['eyebrow']); ?></span>
                <h2 class="section-title"><?php echo e(t('contact.title')); ?></h2>
                <p class="section-description"><?php echo e($sectionContent['title']); ?></p>
                <?php if ($site['company']['email'] !== ''): ?>
                    <p><a href="mailto:<?php echo e($site['company']['email']); ?>"><?php echo e($site['company']['email']); ?></a></p>
                <?php endif; ?>
                <?php if ($site['company']['phone'] !== ''): ?>
                    <p><a href="tel:<?php echo e(preg_replace('/[^0-9+]/', '', $site['company']['phone'])); ?>"><?php echo e($site['company']['phone']); ?></a></p>
                <?php endif; ?>
                <?php if ($site['company']['address'] !== ''): ?>
                    <p><?php echo e($site['company']['address']); ?></p>
                <?php endif; ?>
            </div>
            <div class="col-lg-7">
                <?php if ($contactStatus === 'success'): ?>
                    <p class="alert alert-success" role="status"><?php echo e(t('contact.success')); ?></p>
                <?php elseif ($contactStatus === 'error'): ?>
                    <p class="alert alert-danger" role="alert"><?php echo e(t('contact.error')); ?></p>
                <?php endif; ?>
                <form action="/contact-submit.php" method="POST" class="contact-form">
                    <input type="hidden" name="csrf_token" value="<?php echo e($csrfToken); ?>">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label"><?php echo e(t('contact.name')); ?></label>
                            <input type="text" id="name" name="name" class="form-control" autocomplete="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="company" class="form-label"><?php echo e(t('contact.company')); ?></label>
                            <input type="text" id="company" name="company" class="form-control" autocomplete="organization">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label"><?php echo e(t('contact.email')); ?></label>
                            <input type="email" id="email" name="email" class="form-control" autocomplete="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label"><?php echo e(t('contact.phone')); ?></label>
                            <input type="tel" id="phone" name="phone" class="form-control" autocomplete="tel">
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label"><?php echo e(t('contact.message')); ?></label>
                            <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-accent"><?php echo e(t('contact.submit')); ?> <span aria-hidden="true">→</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
