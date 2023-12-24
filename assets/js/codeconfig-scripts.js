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
    $('.salon-type span').on('click', function () {
        $('.salon-type span').removeClass('active');
        $(this).addClass('active');

        $('#searchblogpost').val('');

        const filterType = $(this).parent().hasClass('salon-tags')
            ? 'artist_tag'
            : 'salon_type';
        const salonSlug = $(this).data('slug');
        const data = {
            filterType,
            salonSlug,
        };
        loadPosts(data);
    });

    $('#searchblogpost').on('keyup', function () {
        let searchpost = $(this).val();
        loadPosts(null, searchpost);
    });

    function loadPosts(data = {}, searchpost = '') {
        let nonce = document.querySelector('.filter-nonce')?.dataset.nonce;

        $('#load-salon-posts').html(
            `<div class='preloader'><img src="${ajax.preloader}"/></div>`
        );

        wp.ajax
            .post('loadmore_posts', { data, nonce, searchpost })
            .done((res) => {
                if (res) {
                    $('#load-salon-posts').html(res.page);
                }
            })
            .fail((err) => {
                $('#load-salon-posts').html(err.message);
                console.log(err);
            });
    }

    loadPosts();

    // Ajax search

    $('#searchpost').on('keyup', function () {
        let searchedText = $(this).val();
        loadSearchPosts(searchedText);
    });

    function loadSearchPosts(searchedText = '') {
        let searchnonce =
            document.querySelector('.search-nonce')?.dataset.searchnonce;

        if( ! searchnonce ) {
			return;
		}
		
		console.log(searchnonce)

        $('#load-salon-posts').html(
            `<div class='preloader'><img src="${ajax.preloader}"/></div>`
        );

        wp.ajax
            .post('search_posts', { searchedText, searchnonce })
            .done((res) => {
                console.log(res.page);
                if (res.page) {
                    $('#load-searched-posts').html(res.page);
                }
            });
    }

    loadSearchPosts();

    $('.quality-image-nav-slider-init .quality-image-nav-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.quality-image-nav-slider-init .quality-image-nav-slidernav',
    });
    $('.quality-image-nav-slider-init .quality-image-nav-slidernav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.quality-image-nav-slider-init .quality-image-nav-slider',
        dots: true,
        focusOnSelect: true,
    });
});


