window.addEventListener("scroll", function () {
    if (window.pageYOffset > 0) {
        document.querySelector(".codeconfig-header").classList.add("sticky");
    } else {
        document.querySelector(".codeconfig-header").classList.remove("sticky");
    }
});

function Toggler() {
    const headerToggle = document.querySelector('.toggler'); 
    const headerMainMenu = document.querySelector('.main-header-menu'); 
    headerToggle.addEventListener('click', function () {
        this.classList.toggle('bar-active'); 
        headerMainMenu.classList.toggle('show-menu')
    });
}

function codeConfigOnLoad(){
    Toggler()
}

window.addEventListener('load', codeConfigOnLoad);

let currentIndex = 0;
const testimonialWrapper = document.querySelector('.cc-testimonial-wrapper');
const testimonialContainer = document.querySelector('.testimonial-container');
const testimonialItems = document.querySelectorAll('.testimonial-item');

// mobile sub menu start
const subMenu = document.querySelectorAll(".main-header-menu .has-children");


function subMenuActive(){
    this.classList.toggle("sub_menu_active");
};

subMenu.forEach(toggle => toggle.addEventListener('click', subMenuActive));
// mobile sub menu end


document.addEventListener('DOMContentLoaded', function () {
    let slideIndex = 1;
    let dots;

    // Event listeners for button clicks
    document.querySelector('.prev').addEventListener('click', function () {
        changeSlide(-1);
    });

    document.querySelector('.next').addEventListener('click', function () {
        changeSlide(1);
    });

    // Event listeners for dot clicks
    dots = document.querySelectorAll('.dot');
    dots.forEach((dot, index) => {
        dot.addEventListener('click', function () {
            currentSlide(index + 1);
        });
    });

    // Autoplay functionality
    let autoplayInterval;
    function startAutoplay() {
        autoplayInterval = setInterval(function () {
            changeSlide(1);
        }, 3000); // Change slide every 3000 milliseconds (3 seconds)
    }

    function stopAutoplay() {
        clearInterval(autoplayInterval);
    }

    // Event listeners for mouseover and mouseout to control autoplay
    document.querySelector('.cc-testimonial-wrapper').addEventListener('mouseover', stopAutoplay);
    document.querySelector('.cc-testimonial-wrapper').addEventListener('mouseout', startAutoplay);

    showSlides(slideIndex);

    function changeSlide(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        const slides = document.querySelectorAll(".testimonial-item");

        dots.forEach((dot, index) => {
            const isActive = index === slideIndex - 1;
            dot.classList.toggle("active", isActive);
        });

        // Handle circular navigation
        slideIndex = (n > slides.length) ? 1 : (n < 1) ? slides.length : n;

        slides.forEach((slide, index) => {
            slide.style.display = (index === slideIndex - 1) ? "block" : "none";
        });
    }

    // Start autoplay initially
    startAutoplay();
});


