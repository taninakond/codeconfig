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