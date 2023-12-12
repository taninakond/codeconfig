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


// mobile sub menu start
const subMenu = document.querySelectorAll(".main-header-menu .has-children");


function subMenuActive(){
    this.classList.toggle("sub_menu_active");
};

subMenu.forEach(toggle => toggle.addEventListener('click', subMenuActive));
// mobile sub menu end


(function($){
    $(document).ready(function(){

        // Counter js start
        $(document).ready(function() {

            var counters = $(".cc_counter");
            var countersQuantity = counters.length;
            var counter = [];
          
            for (i = 0; i < countersQuantity; i++) {
              counter[i] = parseInt(counters[i].innerHTML);
            }
          
            var cc_counter = function(start, value, id) {
              var localStart = start;
              setInterval(function() {
                if (localStart < value) {
                  localStart++;
                  counters[id].innerHTML = localStart;
                }
              }, 1);
            }
          
            for (j = 0; j < countersQuantity; j++) {
                cc_counter(0, counter[j], j);
            }
          });
        //   Counter js end 

    });
})(jQuery);
