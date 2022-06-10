window.addEventListener('DOMContentLoaded', () => {

    // Activate Bootstrap scrollspy on the main nav element
    const sideNav = document.body.querySelector('#sideNav');
    if (sideNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#sideNav',
            offset: 74,
        });
    }

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

function startAnimation(entries, observer) {

    entries.forEach((entry) => {
        console.log(entry)
        let plot = document.querySelectorAll('.progress-bar div');
        if (entry.isIntersecting) {

            for (let element of plot) {
                element.classList.add('progress-value')
            }
        }

    });
}

let options = {
    root: null,
    rootMargin: '10px',
    threshold: 0.3
}

let observer = new IntersectionObserver(startAnimation, options);
observer.observe(document.getElementById("competences"))