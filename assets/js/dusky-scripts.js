window.addEventListener('scroll', function () {
    if (window.pageYOffset > 0) {
        document.querySelector('.dusky-header').classList.add('sticky');
    } else {
        document.querySelector('.dusky-header').classList.remove('sticky');
    }
});

function Toggler() {
    const headerToggle = document.querySelector('.mobile-togger');
    const headerMainMenu = document.querySelector('.header-menu-wrap');
    headerToggle.addEventListener('click', function () {
        this.classList.toggle('bar-active');
        headerMainMenu.classList.toggle('show-menu');
    });
}

// Header gutter for adjusting header height
function HeaderGutter() {
    const header = document.querySelector('.dusky-header');
    const headerGutter = document.querySelector('.header_gutter');
    headerGutter.style.height = header.clientHeight + 'px';
}

function codeConfigOnLoad() {
    Toggler();
    HeaderGutter();
}

window.addEventListener('load', codeConfigOnLoad);
