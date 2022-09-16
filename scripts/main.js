AOS.init({ duration: 1000 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(() => {
    $('#flipping-heading').slick({
        slidesToScroll: 1,
        slidesToScroll: 1,
        arrows: false,
        vertical: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1200,
        speed: 900,
    });

    $('#brands-slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: false,
    });

    $('#cta-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
    });

    $("#testimonials-slider").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false
    })

    AOS.refresh();

    let controller = new ScrollMagic.Controller();

    let timeline = new TimelineMax();

    timeline.to('#banner-box-1', 6, { y: -100 })
        .to('#banner-box-2', 6, { y: -400 }, '-=6');

    let scene = new ScrollMagic.Scene({
        triggerElement: 'header',
        duration: '200%',
        triggerHook: 0
    })
        .setTween(timeline)
        .addTo(controller);


    const cards = gsap.utils.toArray(".removal-type-card");
    let cardsHeight = 0;
    cards.forEach(card => {
        cardsHeight += $(card).height();
    });
    cards.forEach((card, index) => {
        const tween = gsap.to(card, {
            scrollTrigger: {
                trigger: card,
                start: `top 10%`,
                end: `top 10%`,
                scrub: true,
                pin: true,
                invalidateOnRefresh: true
            },
            ease: "slow.inOut",
            scale: () => 1 - (cards.length - index) * 0.0025
        });

        ScrollTrigger.create({
            trigger: card,
            start: "top 10%",
            pin: index === (cards.length) ? false : true,
            end: 'max',
            pinSpacing: false,
            invalidateOnRefresh: true
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});