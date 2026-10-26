<?php include 'includes/header.php'; ?>

<main>
    <section class="hero-section" aria-label="Featured content">
        <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container hero-container">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-5 hero-copy">
                                <span class="eyebrow">YOUR COMPANY · YOUR INDUSTRY</span>
                                <h1>Your headline<br>goes right here.</h1>
                                <p>Add a short introduction to your company and what you do.</p>
                                <a href="contact.php" class="btn btn-accent">Get in touch <span aria-hidden="true">→</span></a>
                            </div>
                            <div class="col-lg-7">
                                <div class="image-placeholder hero-image" role="img" aria-label="Image placeholder">
                                    <span class="placeholder-mark" aria-hidden="true">+</span>
                                    <span>Hero image</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container hero-container">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-5 hero-copy">
                                <span class="eyebrow">A SECOND FEATURE</span>
                                <h2>Make this space<br>tell your story.</h2>
                                <p>Introduce a service, a project, or what makes your business different.</p>
                                <a href="services.php" class="btn btn-accent">Explore services <span aria-hidden="true">→</span></a>
                            </div>
                            <div class="col-lg-7">
                                <div class="image-placeholder hero-image" role="img" aria-label="Image placeholder">
                                    <span class="placeholder-mark" aria-hidden="true">+</span>
                                    <span>Feature image</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container hero-container">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-5 hero-copy">
                                <span class="eyebrow">READY WHEN YOU ARE</span>
                                <h2>Showcase what<br>you do best.</h2>
                                <p>Use this slide for a project highlight, announcement, or key message.</p>
                                <a href="contact.php" class="btn btn-accent">Start a conversation <span aria-hidden="true">→</span></a>
                            </div>
                            <div class="col-lg-7">
                                <div class="image-placeholder hero-image" role="img" aria-label="Image placeholder">
                                    <span class="placeholder-mark" aria-hidden="true">+</span>
                                    <span>Project image</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev" aria-label="Previous slide">
                <span class="carousel-arrow" aria-hidden="true">←</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next" aria-label="Next slide">
                <span class="carousel-arrow" aria-hidden="true">→</span>
            </button>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="section-heading">
                <div>
                    <span class="eyebrow">WHAT WE DO</span>
                    <h2>Services at a glance</h2>
                </div>
                <a class="text-link" href="services.php">View all services <span aria-hidden="true">→</span></a>
            </div>
            <div class="row g-4">
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <div class="col-md-4">
                        <article class="service-card">
                            <div class="image-placeholder service-image" role="img" aria-label="Service image placeholder">
                                <span class="placeholder-mark" aria-hidden="true">+</span>
                                <span>Image</span>
                            </div>
                            <div class="service-card-body">
                                <span class="card-number">0<?php echo $i; ?></span>
                                <h3>Service title</h3>
                                <p>Add a short description of this service.</p>
                                <a href="services.php" class="card-link" aria-label="Learn more about this service">Learn more <span aria-hidden="true">→</span></a>
                            </div>
                        </article>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <section class="about-section section-padding">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="image-placeholder about-image" role="img" aria-label="About image placeholder">
                        <span class="placeholder-mark" aria-hidden="true">+</span>
                        <span>About / team image</span>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <span class="eyebrow">A LITTLE ABOUT US</span>
                    <h2 class="section-title">A place for your company story.</h2>
                    <p class="section-description">Share a few words about your experience, your people, and the way you work.</p>
                    <a href="about.php" class="text-link">More about us <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-panel">
                <div>
                    <span class="eyebrow">LET'S WORK TOGETHER</span>
                    <h2>Have a project in mind?</h2>
                </div>
                <a href="contact.php" class="btn btn-accent">Contact us <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
