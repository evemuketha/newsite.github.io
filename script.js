document.addEventListener('scroll', function() {
    const header = document.querySelector('.header');
    // Trigger the effect when the page is scrolled down more than 20 pixels
    if (window.scrollY > 20) {
        header.style.top = "0"; // Shows the header
    } else {
        header.style.top = "-100px"; // Hides the header
    }
});
