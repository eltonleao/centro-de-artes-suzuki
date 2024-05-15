document.addEventListener('DOMContentLoaded', function() {
    anime({
        targets: '.floating-note-1',
        translateY: -2,
        loop: true,
        direction: 'alternate',
        easing: 'easeInOutSine',
        duration: 2000
    });

    anime({
        targets: '.floating-note-2',
        translateY: 2,
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

