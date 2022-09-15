<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <div class="container text-center">
        <?= renderImg("logo.png", "logo") ?>
        <h1 class="heading fs-1">Five start treatment for</h1>
        <div class="flipping-heading" id="flipping-heading">
            <div class="fs-1 text">interstate removal</div>
            <div class="fs-1 text">waste removal</div>
            <div class="fs-1 text">boxes &amp; wrapping</div>
            <div class="fs-1 text">storage services</div>
            <div class="fs-1 text">furniture removal</div>
            <div class="fs-1 text">office moves</div>
        </div>
        <div class="py-5">
            <?= renderImg("planned-prepared.png", "lib", "px-4") ?>
            <?= renderImg("15-years.png", "lib", "px-4") ?>
            <?= renderImg("safety-first.png", "lib", "px-4") ?>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="row">
                    <div class="col">
                        <a href="#" class="btn btn-1">Exploring Services</a>
                    </div>
                    <div class="col">
                        <a href="#" class="btn btn-2">Get Free Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-box-1" id="banner-box-1">
        <?= renderImg('banner-box-1.png', 'lib') ?>
    </div>
    <div class="banner-box-2" id="banner-box-2">
        <?= renderImg('banner-box-2.png', 'lib') ?>
    </div>
</header>

<section class="participating-brands">
    <div class="container">
        <div id="brands-slider" class="brands-slider">
            <div><?= renderImg("commbank.png", "logo") ?></div>
            <div><?= renderImg("ray-white.png", "logo") ?></div>
            <div><?= renderImg("furniture-store.png", "logo") ?></div>
            <div><?= renderImg("fantastic-furniture.png", "logo") ?></div>
            <div><?= renderImg("amart-furniture.png", "logo") ?></div>
            <div><?= renderImg("hr-block.png", "logo") ?></div>
        </div>
    </div>
</section>

<section class="about-us">
    <div class="container about-us-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="heading fs-2">
                    Looking for affordable moving services without sacrificing care and efficiency?
                </div>
            </div>
            <div class="col-lg-6 px-xxl-8 description">
                <p>Rest assured that our prices are the best in Sydney - found a better written quote? We’ll beat it, guaranteed!</p>
                <p>We are confident in all our highly trained staff to take care of all your moving needs. They all have a minimum experience of at least 5 years in the industry. Our staff aren’t the only top-tier part of Star Movers, we also use the latest equipment to ensure the safety and care of your furniture and fragile items.</p>
                <p>We thoroughly plan and inspect before we start transporting and to make things even easier, we disassemble and assemble all your furniture for you to avoid mistakes inbetween moves!</p>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <div class="cta-slider" id="cta-slider">
            <div class="cta-slider-content">
                <div class="heading fs-3">Best Prices in Sydney</div>
                <div class="description">We will provide you with the lowest price possible and we will beat any genuine and reasonable quote.</div>
                <a href="#" class="scroll-down-cta"><?= renderImg('scroll-down-cta.png', 'icons') ?></a>
            </div>
            <div class="cta-slider-content top-margin">
                <div class="heading fs-3">Team of Expert Movers</div>
                <div class="description">We have a highly trained team of movers looking after your move, as we treat your furniture and assets with utmost care.</div>
                <a href="#" class="scroll-down-cta"><?= renderImg('scroll-down-cta.png', 'icons') ?></a>
            </div>
            <div class="cta-slider-content">
                <div class="heading fs-3">Latest Equipment</div>
                <div class="description">All our trucks are equipped with the latest equipment to help you transport your assets safely to your new home.</div>
                <a href="#" class="scroll-down-cta"><?= renderImg('scroll-down-cta.png', 'icons') ?></a>
            </div>
            <div class="cta-slider-content top-margin">
                <div class="heading fs-3">Boxes & Wrap</div>
                <div class="description">Our packaging specialists will pack and wrap everything that you desire for safe travel between your destinations.</div>
                <a href="#" class="scroll-down-cta"><?= renderImg('scroll-down-cta.png', 'icons') ?></a>
            </div>
        </div>
    </div>
    <div class="cta-box-1" id="cta-box-1" data-aos='fade-right'>
        <?= renderImg('cta-box-1.png', 'lib') ?>
    </div>
    <div class="cta-box-2" id="cta-box-2" data-aos='fade-left'>
        <?= renderImg('cta-box-2.png', 'lib') ?>
    </div>
</section>

<section class="exclusive-deals">
    <div class="container">
        <?= renderImg('exclusive-deals-heading.png', 'lib', 'pb-8') ?>

        <div class="row justify-content-center">
            <div class="col-xxl-10">
                <div class="deals-wrapper">
                    <?= renderImg("small-move.jpg", 'lib', "w-100") ?>
                    <a href="#" class="btn">Claim Now</a>
                </div>
                <div class="deals-wrapper mt-8">
                    <?= renderImg("large-move.jpg", 'lib', "w-100") ?>
                    <a href="#" class="btn">Claim Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form" id="form">
    <div class="container">
        <form action="./src/form" class="" method="post">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="heading fs-2">
                        <div>No Stress,</div>
                        <div class="d-flex align-items-center">No Panic <div class="gradient-line ms-3"></div></div>
                        <div>Just a Smooth Move!</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-wrapper">
                        <div class="form-heading purple">
                            Your move
                        </div>
                        <div class="row py-6 form-row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="pickup_address" placeholder="Pick up address" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="dropoff_address" placeholder="Drop off address" required>
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="date" placeholder="Pick up address" required>
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="dropoff_address" placeholder="Drop off address" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="form-heading orange">
                            Your details
                        </div>
                        <div class="row py-6 form-row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" placeholder="Full name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" placeholder="Phone no." required>
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control" name="email" placeholder="Email address" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 pt-4">
                    <button class="form-control" type="submit">Get Free Quote</button>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="testimonials">
    <div class="testimonials-wrapper">
        <div class="container">
            <div class="testimonials-slider">
                <div class="testimonial-card">
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>