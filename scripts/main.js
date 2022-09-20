AOS.init({ duration: 1000 });

document.querySelectorAll('a[href="#form"], a[href="#services"]').forEach(function (anchor) {
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
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 4,
                    centerMode: true,
                    centerPadding: "20px",
                    autoplay: true,
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 3,
                    centerMode: true,
                    centerPadding: "20px",
                    autoplay: true,
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 2,
                    centerMode: true,
                    centerPadding: "20px",
                }
            }
        ]
    });

    $('#cta-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 2,
                    centerMode: true,
                    centerPadding: "20px"
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: "20px"
                }
            }
        ]
    });

    $("#testimonials-slider").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 3,
                    centerMode: true,
                    centerPadding: "20px"
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2,
                    centerMode: true,
                    centerPadding: "20px"
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: "20px"
                }
            }
        ]
    })

    AOS.refresh();

    let controller = new ScrollMagic.Controller();

    let timeline = new TimelineMax();

    timeline.to('#banner-box-1', 6, { y: -800 })
        .to('#banner-box-2', 6, { y: -900 }, '-=6')
        .to('#about-us-box', 6, { y: -800 }, '-=6');

    let scene = new ScrollMagic.Scene({
        triggerElement: 'header',
        duration: '200%',
        triggerHook: 0
    })
        .setTween(timeline)
        .addTo(controller);


    AOS.refresh();

    const cards = gsap.utils.toArray(".removal-type-card");

    cards.forEach((card, index) => {
        const tween = gsap.to(card, {
            scrollTrigger: {
                trigger: card,
                start: `top 5%`,
                end: `top 5%`,
                scrub: true,
                pin: true,
                invalidateOnRefresh: true
            },
            ease: "slow.inOut",
            scale: () => 1 - (cards.length - index) * 0.0025
        });

        ScrollTrigger.create({
            trigger: card,
            start: "top 5%",
            pin: index === (cards.length) ? false : true,
            end: 'max',
            pinSpacing: false,
            invalidateOnRefresh: true
        });
    });

    let rotate = gsap.timeline({
        scrollTrigger: {
            trigger: ".wheel-wrapper",
            pin: true,
            scrub: 0.2,
            start: 'top top',
            end: '+=12000'
        }
    })
        .to('.wheel', {
            rotation: -360 * 1,
            duration: 1,
            ease: 'none'
        })
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

function preventDefault(e) {
    e.preventDefault();
}


var supportsPassive = false;
try {
    window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
        get: function () { supportsPassive = true; }
    }));
} catch (e) { }

var wheelOpt = supportsPassive ? { passive: false } : false;
var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

// call this to Disable
function disableScroll() {
    window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
    window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
    window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
}

// call this to Enable
function enableScroll() {
    window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
    window.removeEventListener('touchmove', preventDefault, wheelOpt);
}

// disableScroll();

// function toggleShutter() {
//     $('.shutter').toggleClass("shutter_raise");
//     enableScroll();
// }

// setTimeout(toggleShutter, 3000);