<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<div class="sticky-nav">
    <?= renderImg("nav-logo.png", 'logo', 'pb-4') ?>
    <a href="tel:<?= $phone_number ?>" class="py-2"><?= renderImg("call-btn.png", "icons") ?></a>
    <a href="#form" class="py-2"><?= renderImg("quote-btn.png", "icons") ?></a>
</div>

<div class="sticky-nav-mobile">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto"><a href="./"><?= renderImg("logo-sm.png", "logo") ?></a></div>
            <div class="col-auto">
                <a href="tel:<?= $phone_number ?>" class="py-2"><?= renderImg("call-btn.png", "icons", "mobile-icons") ?></a>
                <a href="#form" class="py-2"><?= renderImg("quote-btn.png", "icons", "mobile-icons") ?></a>
            </div>
        </div>
    </div>
</div>

<div class="shutter"></div>

<header>
    <div class="container text-center position-relative" style="z-index: 100;">
        <?= renderImg("logo.png", "logo", "logo") ?>
        <h1 class="heading fs-1">Five star treatment for</h1>
        <div class="flipping-heading" id="flipping-heading">
            <div class="fs-1 text">interstate removal</div>
            <div class="fs-1 text">waste removal</div>
            <div class="fs-1 text">boxes &amp; wrapping</div>
            <div class="fs-1 text">storage services</div>
            <div class="fs-1 text">furniture removal</div>
            <div class="fs-1 text">office moves</div>
        </div>
        <div class="py-5 row gx-md-4 justify-content-center">
            <div class="col col-md-auto"><?= renderImg("planned-prepared.png", "lib") ?></div>
            <div class="col col-md-auto"><?= renderImg("15-years.png", "lib") ?></div>
            <div class="col col-md-auto"><?= renderImg("safety-first.png", "lib") ?></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="row justify-content-center gy-3">
                    <div class="col-8 col-md">
                        <a href="#services" class="btn orange-btn">Exploring Services</a>
                    </div>
                    <div class="col-8 col-md">
                        <a href="#form" class="btn purple-btn">Get Free Quote</a>
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

    <div class="banner-boxes-sm">
        <?= renderImg('banner-boxes-sm.png', 'lib', "w-100") ?>
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

<section class="about-us position-relative">
    <div class="container about-us-container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="heading fs-2">
                    Looking for affordable moving services without sacrificing care and efficiency?
                </div>
            </div>
            <div class="col-lg-6 px-xxl-8 description" data-aos="fade-left">
                <p>Rest assured that our prices are the best in Sydney - found a better written quote? We’ll beat it, guaranteed!</p>
                <p>We are confident in all our highly trained staff to take care of all your moving needs. They all have a minimum experience of at least 5 years in the industry. Our staff aren’t the only top-tier part of Star Movers, we also use the latest equipment to ensure the safety and care of your furniture and fragile items.</p>
                <p>We thoroughly plan and inspect before we start transporting and to make things even easier, we disassemble and assemble all your furniture for you to avoid mistakes inbetween moves!</p>
            </div>
        </div>
    </div>
    <div class="about-us-box" id="about-us-box"><?= renderImg('about-us-box.png', "background") ?></div>
    <div class="marquee-truck">
        <marquee behavior="scroll" direction="down" scrollamount="10"><?= renderImg("moving-truck.png", 'lib') ?></marquee>
    </div>
</section>

<section class="cta position-relative">
    <div class="marquee-truck">
        <marquee behavior="scroll" direction="down" scrollamount="10"><?= renderImg("moving-truck.png", 'lib') ?></marquee>
    </div>

    <div class="container">
        <div class="cta-slider" id="cta-slider">
            <div class="cta-slider-content">
                <div class="heading fs-3">Best Prices in Sydney</div>
                <div class="description">We will provide you with the lowest price possible and we will beat any genuine and reasonable quote.</div>
                <a href="#form" class="scroll-down-cta"><?= renderImg('scroll-down-cta.png', 'icons') ?></a>
            </div>
            <div class="cta-slider-content top-margin">
                <div class="heading fs-3">Team of Expert Movers</div>
                <div class="description">We have a highly trained team of movers looking after your move, as we treat your furniture and assets with utmost care.</div>
                <a href="#form" class="scroll-down-cta"><?= renderImg('scroll-down-cta.png', 'icons') ?></a>
            </div>
            <div class="cta-slider-content">
                <div class="heading fs-3">Latest Equipment</div>
                <div class="description">All our trucks are equipped with the latest equipment to help you transport your assets safely to your new home.</div>
                <a href="#form" class="scroll-down-cta"><?= renderImg('scroll-down-cta.png', 'icons') ?></a>
            </div>
            <div class="cta-slider-content top-margin">
                <div class="heading fs-3">Boxes & Wrap</div>
                <div class="description">Our packaging specialists will pack and wrap everything that you desire for safe travel between your destinations.</div>
                <a href="#form" class="scroll-down-cta"><?= renderImg('scroll-down-cta.png', 'icons') ?></a>
            </div>
        </div>
    </div>
    <div class="cta-box-1" id="cta-box-1" data-aos='fade-right'>
        <?= renderImg('cta-box-1.png', 'lib') ?>
    </div>
    <div class="cta-box-2" id="cta-box-2" data-aos='fade-left'>
        <?= renderImg('cta-box-2.png', 'lib') ?>
    </div>

    <div class="cta-boxes-sm">
        <?= renderImg('cta-boxes-sm.png', 'lib') ?>
    </div>
</section>

<section class="exclusive-deals position-relative">
    <div class="marquee-truck">
        <marquee behavior="scroll" direction="down" scrollamount="10"><?= renderImg("moving-truck.png", 'lib') ?></marquee>
    </div>

    <div class="container">
        <?= renderImg('exclusive-deals-heading.png', 'lib', 'pb-5 pb-md-8') ?>

        <div class="row justify-content-center">
            <div class="col-xxl-10 d-none d-md-block">
                <div class="deals-wrapper" data-aos="fade-right">
                    <?= renderImg("small-move.jpg", 'lib', "w-100") ?>
                    <a href="#form" class="btn orange-btn">Claim Now</a>
                </div>
                <div class="deals-wrapper mt-8" data-aos="fade-left">
                    <?= renderImg("large-move.jpg", 'lib', "w-100") ?>
                    <a href="#form" class="btn orange-btn">Claim Now</a>
                </div>
            </div>
            <div class="col-12 d-md-none">
                <div data-aos="fade-right">
                    <a href="#form" class=""><?= renderImg("small-move-sm.png", 'lib', "w-100") ?></a>
                </div>
                <div class="mt-6" data-aos="fade-left">
                    <a href="#form" class=""><?= renderImg("large-move-sm.png", 'lib', "w-100") ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service position-relative" id="services">
    <div class="marquee-truck">
        <marquee behavior="scroll" direction="down" scrollamount="10"><?= renderImg("moving-truck.png", 'lib') ?></marquee>
    </div>

    <div class="wheel-wrapper">
        <?= renderImg('wheel.png', 'lib', 'wheel') ?>
    </div>

    <div class="container">
        <div class="service-wrapper">
            <div class="service-card" style="top: 10px">
                <div class="row service-card-inner">
                    <div class="col-12 d-xl-none">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto fw-300">Our specialities</div>
                            <div class="col-auto fs-2 fw-300 line-height-1">01/06</div>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block"><?= renderImg("removal-1.png", "lib") ?></div>
                    <div class="col-xl-5 h-inherit d-flex align-items-center">
                        <div class="pt-4 py-xl-4">
                            <div class="fs-4 fw-300 d-none d-xl-block">Our specialities</div>
                            <div class="fs-2 fw-300 line-height-1 py-1">Furniture removals</div>
                            <div class="fs-5 fw-300 fw-md-600 py-4 py-md-5 pe-xxl-6">We can assist you in taking apart your heavy furniture and packing your entire house for the move. We will ensure that all your furniture is packed and secured properly so that no damages occur during the transportation process. We will also help you unpack and put your heavy furniture together at your new home.</div>
                            <div class="d-flex">
                                <a href="#form" class="btn orange-btn w-auto px-6">Get Quote</a>
                            </div>
                            <div class="row align-items-center pt-6 d-none d-xl-flex">
                                <div class="col-auto fs-3 fw-300">We guarantee...</div>
                                <div class="col-auto"><?= renderImg("planned-prepared.png", "lib", 'cta-circle') ?></div>
                                <div class="col-auto"><?= renderImg("fixed-pricing-only.png", "lib", 'cta-circle') ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto h-inherit vertical-text d-none d-xl-block">
                        <span>Services done by experts</span>
                    </div>
                </div>
                <?= renderImg('removal-1-sm.png', 'lib', 'w-100 w-md-auto d-xl-none') ?>
            </div>

            <div class="service-card" style="top: 30px">
                <div class="row service-card-inner">
                    <div class="col-12 d-xl-none">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto fw-300">Our specialities</div>
                            <div class="col-auto fs-2 fw-300 line-height-1">02/06</div>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block"><?= renderImg("removal-2.png", "lib") ?></div>
                    <div class="col-xl-5 h-inherit d-flex align-items-center">
                        <div class="pt-4 py-md-4">
                            <div class="fs-4 fw-300 d-none d-xl-block">Our specialities</div>
                            <div class="fs-2 fw-300 line-height-1 py-1">Office moves</div>
                            <div class="fs-5 fw-600 py-4 py-md-5 pe-xxl-6">Business Relocations can be quite complicated, but Star Movers can provide you with a start-to-end service that will tailor for all your requirements. We will make sure that all the furniture and IT equipment are packed and transported without and damages. Our team is here to help you with every aspect of your move including managing your commercial relocations.</div>
                            <div class="d-flex">
                                <a href="#form" class="btn orange-btn w-auto px-6">Get Quote</a>
                            </div>
                            <div class="row align-items-center pt-6 d-none d-xl-flex">
                                <div class="col-auto fs-3 fw-300">We guarantee...</div>
                                <div class="col-auto"><?= renderImg("planned-prepared.png", "lib", 'cta-circle') ?></div>
                                <div class="col-auto"><?= renderImg("fixed-pricing-only.png", "lib", 'cta-circle') ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto h-inherit vertical-text d-none d-xl-block">
                        <span>Services done by experts</span>
                    </div>
                </div>
                <?= renderImg('removal-2-sm.png', 'lib', 'w-100 d-xl-none') ?>
            </div>

            <div class="service-card" style="top: 50px">
                <div class="row service-card-inner">
                    <div class="col-12 d-xl-none">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto fw-300">Our specialities</div>
                            <div class="col-auto fs-2 fw-300 line-height-1">03/06</div>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block"><?= renderImg("removal-3.png", "lib") ?></div>
                    <div class="col-xl-5 h-inherit d-flex align-items-center">
                        <div class="pt-4 py-xl-4">
                            <div class="fs-4 fw-300 d-none d-xl-block">Our specialities</div>
                            <div class="fs-2 fw-300 line-height-1 py-1">Interstate removals</div>
                            <div class="fs-5 fw-600 py-4 py-md-5 pe-xxl-6">It’s not an easy job to move and relocate yourself, neither across or within your city boundaries. When moving to another state, there is so much to think about. We will take all the stress and chaos of your move and let you only experience the excitement in moving. We can have everything unpacked and the furniture put together according to you requirements, before you arrive at your new location.</div>
                            <div class="d-flex">
                                <a href="#form" class="btn orange-btn w-auto px-6">Get Quote</a>
                            </div>
                            <div class="row align-items-center pt-6 d-none d-xl-flex">
                                <div class="col-auto fs-3 fw-300">We guarantee...</div>
                                <div class="col-auto"><?= renderImg("planned-prepared.png", "lib", 'cta-circle') ?></div>
                                <div class="col-auto"><?= renderImg("fixed-pricing-only.png", "lib", 'cta-circle') ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto h-inherit vertical-text d-none d-xl-block">
                        <span>Services done by experts</span>
                    </div>
                </div>
                <?= renderImg('removal-3-sm.png', 'lib', 'w-100 d-xl-none') ?>
            </div>

            <div class="service-card" style="top: 70px">
                <div class="row service-card-inner">
                    <div class="col-12 d-xl-none">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto fw-300">Our specialities</div>
                            <div class="col-auto fs-2 fw-300 line-height-1">04/06</div>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block"><?= renderImg("removal-4.png", "lib") ?></div>
                    <div class="col-xl-5 h-inherit d-flex align-items-center">
                        <div class="pt-4 py-xl-4">
                            <div class="fs-4 fw-300 d-none d-xl-block">Our specialities</div>
                            <div class="fs-2 fw-300 line-height-1 py-1">Waste removals</div>
                            <div class="fs-5 fw-600 py-4 py-md-5 pe-xxl-6">Star Movers provide a complete house clean-up service and remove any waste or rubbish that need to be disposed of. We will take all your unwanted furniture and waste to a dump for you. Your house wastes are most likely made of plastic, wood, and many things that has great potential in being recycled. If you throw it away in a regular trash bin, it’ll be a waste of recyclable material and bad for your environment.</div>
                            <div class="d-flex">
                                <a href="#form" class="btn orange-btn w-auto px-6">Get Quote</a>
                            </div>
                            <div class="row align-items-center pt-6 d-none d-xl-flex">
                                <div class="col-auto fs-3 fw-300">We guarantee...</div>
                                <div class="col-auto"><?= renderImg("planned-prepared.png", "lib", 'cta-circle') ?></div>
                                <div class="col-auto"><?= renderImg("fixed-pricing-only.png", "lib", 'cta-circle') ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto h-inherit vertical-text d-none d-xl-block">
                        <span>Services done by experts</span>
                    </div>
                </div>
                <?= renderImg('removal-4-sm.png', 'lib', 'w-100 d-xl-none') ?>
            </div>

            <div class="service-card" style="top: 90px">
                <div class="row service-card-inner">
                    <div class="col-12 d-xl-none">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto fw-300">Our specialities</div>
                            <div class="col-auto fs-2 fw-300 line-height-1">05/06</div>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block"><?= renderImg("removal-5.png", "lib") ?></div>
                    <div class="col-xl-5 h-inherit d-flex align-items-center">
                        <div class="pt-4 py-xl-4">
                            <div class="fs-4 fw-300 d-none d-xl-block">Our specialities</div>
                            <div class="fs-2 fw-300 line-height-1 py-1">Boxes & wrapping</div>
                            <div class="fs-5 fw-600 py-5 pe-xxl-6">Star Movers provide packing and unpacking services during your move. In packing, we make sure to pay attention to every details and that nothing is left behind. Also, we will wrap fragile materials with bubble wraps and papers for extra care and insurance. We’re also experts in handling electronic devices. We make sure to separate all devices so it won’t rub against each other and break one another.</div>
                            <div class="d-flex">
                                <a href="#form" class="btn orange-btn w-auto px-6">Get Quote</a>
                            </div>
                            <div class="row align-items-center pt-6 d-none d-xl-flex">
                                <div class="col-auto fs-3 fw-300">We guarantee...</div>
                                <div class="col-auto"><?= renderImg("planned-prepared.png", "lib", 'cta-circle') ?></div>
                                <div class="col-auto"><?= renderImg("fixed-pricing-only.png", "lib", 'cta-circle') ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto h-inherit vertical-text d-none d-xl-block">
                        <span>Services done by experts</span>
                    </div>
                </div>
                <?= renderImg('removal-5-sm.png', 'lib', 'w-100 d-xl-none') ?>
            </div>

            <div class="service-card" style="top: 110px">
                <div class="row service-card-inner">
                    <div class="col-12 d-xl-none">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto fw-300">Our specialities</div>
                            <div class="col-auto fs-2 fw-300 line-height-1">06/06</div>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block"><?= renderImg("removal-6.png", "lib") ?></div>
                    <div class="col-xl-5 h-inherit d-flex align-items-center">
                        <div class="pt-4 py-xl-4">
                            <div class="fs-4 fw-300 d-none d-xl-block">Our specialities</div>
                            <div class="fs-2 fw-300 line-height-1 py-1">Storage services</div>
                            <div class="fs-5 fw-600 py-5 pe-xxl-6">If you require a storage solution while you wait to move to your new location or waiting on renovations to finish before you move in. Then Star Moves has the solution for you. We will provide a professional storage service that will ensure a stress-free move and peace of mind knowing that your valuables are store d in a secured place.</div>
                            <div class="d-flex">
                                <a href="#form" class="btn orange-btn w-auto px-6">Get Quote</a>
                            </div>
                            <div class="row align-items-center pt-6 d-none d-xl-flex">
                                <div class="col-auto fs-3 fw-300">We guarantee...</div>
                                <div class="col-auto"><?= renderImg("planned-prepared.png", "lib", 'cta-circle') ?></div>
                                <div class="col-auto"><?= renderImg("fixed-pricing-only.png", "lib", 'cta-circle') ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto h-inherit vertical-text d-none d-xl-block">
                        <span>Services done by experts</span>
                    </div>
                </div>
                <?= renderImg('removal-6-sm.png', 'lib', 'w-100 d-xl-none') ?>
            </div>
        </div>
    </div>
</section>

<section class="form position-relative" id="form">
    <div class="marquee-truck">
        <marquee behavior="scroll" direction="down" scrollamount="10"><?= renderImg("moving-truck.png", 'lib') ?></marquee>
    </div>

    <div class="container">
        <form action="./src/form" class="" method="post">
            <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">

            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="heading fs-2">
                        <div>No Stress,</div>
                        <div class="d-flex align-items-center">No Panic <div class="gradient-line ms-3"></div>
                        </div>
                        <div>Just a Smooth Move!</div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="form-wrapper">
                        <div class="form-heading purple">
                            Your move
                        </div>
                        <div class="row py-6 form-row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="pickUpAddress" name="pickup_address" placeholder="Pick up address" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="dropOffAddress" name="dropoff_address" placeholder="Drop off address" required>
                            </div>
                            <div class="col-6">
                                <input type="date" class="form-control" name="date" placeholder="Pick up address" required>
                            </div>
                            <div class="col-6">
                                <input type="number" class="form-control" name="numberof_rooms" placeholder="No. of rooms" required>
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
                <div class="col-lg-7 pt-md-4">
                    <button class="form-control btn purple-btn" type="submit">Get Free Quote</button>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="testimonials">
    <div class="testimonials-wrapper">
        <div class="container">
            <div class="testimonials-slider" id="testimonials-slider">
                <div class="testimonial-card">
                    <?= renderImg("testimonial-stars.png", 'icons') ?>
                    <div class="heading py-4">
                        Michelle<br>Norman
                    </div>
                    <div class="description">
                        “Excellent service 2 very friendly young chaps, thorough and professional and efficient, highly reccomend”
                    </div>
                </div>
                <div class="testimonial-card margin-top">
                    <?= renderImg("testimonial-stars.png", 'icons') ?>
                    <div class="heading py-4">
                        Moris<br> Marsh
                    </div>
                    <div class="description">
                        “Amazing service provided...I find most removalists complain and the team that were sent never complained once. They were fantastic and nothing was too much trouble. I definitely recommend Star Movers”
                    </div>
                </div>
                <div class="testimonial-card">
                    <?= renderImg("testimonial-stars.png", 'icons') ?>
                    <div class="heading py-4">
                        Abhilash Balakrishnan
                    </div>
                    <div class="description">
                        “Very professional. The team came right on time and completed the work in a very efficient and quick way. They were welcome to suggestions and additional requirements...Highly recommend Star Movers to anyone”
                    </div>
                </div>
                <div class="testimonial-card margin-top">
                    <?= renderImg("testimonial-stars.png", 'icons') ?>
                    <div class="heading py-4">
                        Sudipto<br>Ghosh
                    </div>
                    <div class="description">
                        “Star Movers have done splendid job of moving our household items. They were humble and very friendly throughout the job hours. They went extra mile to ensure that all our items are moved properly without any damage. I highly recommend their service.”
                    </div>
                </div>
                <div class="testimonial-card">
                    <?= renderImg("testimonial-stars.png", 'icons') ?>
                    <div class="heading py-4">
                        Ilona<br>Zentai
                    </div>
                    <div class="description">
                        “Highly recommend. These guys came to our rescue when our other removalist cancelled on us last minute due to COVID-19 restrictions. Very friendly, very efficient. Extremely quick to move our furniture.”
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="timeline">
        <div class="container">
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-12 col-md-5 d-lg-none">
                    <div class="happy-customers">153+ Happy Customers</div>
                </div>
                <div class="col-12 pt-6 pt-lg-0">
                    <div class="row align-items-center justify-content-around">
                        <div class="col-lg-4 px-xxl-5" data-aos="fade-right">
                            <div class="heading fs-2">Removals in Sydney for over 15 years</div>
                        </div>
                        <div class="col-lg-5 px-xxl-4" data-aos="fade-left">
                            <div class="description">
                                Star Movers has been doing Removals in Sydney for over 15 years and highly prioritise on training our staff to deliver quality and professional services to our customers. Our Business ethics and foundations is built on making sure that our customers have a stress-less and care-free experience with Star Movers. This is shown in our strong reviews over the past years. We go above and beyond for our customers.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-left">
        <div class="row justify-content-between align-items-center">
            <div class="col-8 col-md-auto"><?= renderImg("google-reviews.png", "lib") ?></div>
            <div class="col-auto pt-5 pt-md-0">
                <div>
                    <a href="https://www.google.com/maps/place/star+movers/@-33.8148372,151.0012464,15z/data=!4m2!3m1!1s0x0:0x6f90101cc8169caa?sa=X&ved=2ahUKEwjMqpfZurv5AhU7RmwGHWTgACkQ_BJ6BAhhEAU" class="btn orange-btn px-5">Leave a Review</a>
                </div>
                <div class="text-italic text-md-center fs-4 pt-4 text-grey2">It really helps us!</div>
            </div>
            <div class="col-md-3 d-none d-lg-block">
                <div class="happy-customers">153+ Happy Customers</div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>