document.addEventListener('DOMContentLoaded', function() {
    anime({
        targets: '.masthead_floating_note1 img',
        translateY: -10,
        loop: true,
        direction: 'alternate',
        easing: 'easeInOutSine',
        duration: 2000
    });

    anime({
        targets: '.masthead_floating_note2 img',
        translateY: 5,
        loop: true,
        direction: 'alternate',
        easing: 'easeInOutSine',
        duration: 3000
    });

    anime({
        targets: '.masthead_main_image',
        translateY: -15,
        loop: true,
        direction: 'alternate',
        easing: 'easeInOutSine',
        duration: 4000
    });
});

