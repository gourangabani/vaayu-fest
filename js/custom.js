// gsap animations
// if (onScreen($("#contact-us"))) {
//     gsap.from(".power-2", {
//         duration: 0.5,
//         opacity: 0,
//         y: -100,
//         stagger: 0.1,
//         ease: "back.in"
//     });
// }

// let tl = gsap.timeline({
    //     delay: 0.5
    // });

    // tl.from('.power-4', {
    //         y: -100,
    //         opacity: 0,
    //         ease: 'slow',
    //         duration: 1.5
    //     }, 0.7)
    //     .from('.power-2', {
    //         // x: -50,
    //         y: 50,
    //         opacity: 0,
    //         ease: 'power2',
    //         duration: 2
    //     }, 1);

// preloader

function Preloader() {
    var preloader = $('.preloader');
    preloader.delay(7500).fadeOut(500);
}

function setPreloader() {
    if (!sessionStorage.getItem('doNotShow')) {
        sessionStorage.setItem('doNotShow', true);
        Preloader();
    } else {
        $('.preloader').hide();
    }
};

setPreloader();