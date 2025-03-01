window.addEventListener('scroll', function() {
    var navbar = document.querySelector('nav');
    var scrollThreshold = 300; // Adjust this value as needed

    if (window.scrollY > 0) {
        navbar.style.boxShadow = '0 4px 2px -2px gray';
    } else {
        navbar.style.boxShadow = 'none';
    }

    if (window.scrollY > scrollThreshold) {
        navbar.style.display = 'none';
    } else {
        navbar.style.display = 'block';
    }
});