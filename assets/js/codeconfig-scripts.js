window.addEventListener('scroll', function () {
    if (window.pageYOffset > 0) {
        document.querySelector('.codeconfig-header').classList.add('sticky');
    } else {
        document.querySelector('.codeconfig-header').classList.remove('sticky');
    }
});

function Toggler() {
    const headerToggle = document.querySelector('.toggler');
    const headerMainMenu = document.querySelector('.main-header-menu');
    headerToggle.addEventListener('click', function () {
        this.classList.toggle('bar-active');
        headerMainMenu.classList.toggle('show-menu');
    });
}

function headerGutter() {
    // Header gutter for adjusting header height
    const header = document.querySelector('.codeconfig-header');
    const header_gutter = document.querySelector('.header_gutter');
    if (header && header_gutter) {
        header_gutter.style.height = header.clientHeight + 'px';
    }
}

function codeConfigOnLoad() {
    Toggler();
    headerGutter();
}

window.addEventListener('load', codeConfigOnLoad);

let currentIndex = 0;
const testimonialWrapper = document.querySelector('.cc-testimonial-wrapper');
const testimonialContainer = document.querySelector('.testimonial-container');
const testimonialItems = document.querySelectorAll('.testimonial-item');

// mobile sub menu start
const subMenu = document.querySelectorAll('.main-header-menu .has-children');

function subMenuActive() {
    this.classList.toggle('sub_menu_active');
}

subMenu.forEach((toggle) => toggle.addEventListener('click', subMenuActive));
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
    document
        .querySelector('.cc-testimonial-wrapper')
        .addEventListener('mouseover', stopAutoplay);
    document
        .querySelector('.cc-testimonial-wrapper')
        .addEventListener('mouseout', startAutoplay);

    showSlides(slideIndex);

    function changeSlide(n) {
        showSlides((slideIndex += n));
    }

    function currentSlide(n) {
        showSlides((slideIndex = n));
    }

    function showSlides(n) {
        const slides = document.querySelectorAll('.testimonial-item');

        dots.forEach((dot, index) => {
            const isActive = index === slideIndex - 1;
            dot.classList.toggle('active', isActive);
        });

        // Handle circular navigation
        slideIndex = n > slides.length ? 1 : n < 1 ? slides.length : n;

        slides.forEach((slide, index) => {
            slide.style.display = index === slideIndex - 1 ? 'block' : 'none';
        });
    }

    // Start autoplay initially
    startAutoplay();
});

// Filterable post tab Start
function showTab(tabId, button) {
    var tabContents = document.querySelectorAll('.post-tab-body');
    tabContents.forEach(function (tabContent) {
        tabContent.classList.remove('active-tab');
    });

    var selectedTab = document.getElementById(tabId);
    if (selectedTab) {
        selectedTab.classList.add('active-tab');
    }

    var tabButtons = document.querySelectorAll('.tabs .tab-btn');
    tabButtons.forEach(function (tabButton) {
        tabButton.classList.remove('active');
    });

    if (button) {
        button.classList.add('active');
    }
}

// Filterable post tab End

jQuery(document).ready(function ($) {
    $('.blog-filter-menu ul li, .tabs').on('click', function () {
        $('.blog-filter-menu ul li').removeClass('active');
        $(this).addClass('active');

        const catSlug = $(this).data('slug');
        const data = {
            catSlug,
        };
        loadPosts(data);
    });

    function loadPosts(data = {}) {
        let nonce = document.querySelector('.filter-nonce')?.dataset.nonce;

        $('#load-blog-posts').html(
            `<div class='preloader'><img src="${ajax.preloader}"/></div>`
        );

        wp.ajax
            .post('loadmore_posts', { data })
            .done((res) => {
                if (res) {
                    $('#load-blog-posts').html(res.page);
                }
            })
            .fail((err) => {
                $('#load-blog-posts').html(err.message);
                console.log(err);
            });
    }

    loadPosts();
});
