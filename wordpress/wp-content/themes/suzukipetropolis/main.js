document.addEventListener('DOMContentLoaded', function() {
    anime({
        targets: '.floating-note-1',
        translateY: -5,
        loop: true,
        direction: 'alternate',
        easing: 'easeInOutSine',
        duration: 2000
    });

    anime({
        targets: '.floating-note-2',
        translateY: 5,
        loop: true,
        direction: 'alternate',
        easing: 'easeInOutSine',
        duration: 3000
    });
});

