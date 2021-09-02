$(document).ready(function() { 
    var menu = document.querySelector('.menu-item');
    var menuBtn = document.querySelector('.menu-btn');

    /* Menu Button drop-down effect */
    $(".menu-btn").on("click", function() {
        $(".menu-item").slideToggle(500);
    });

    /* Scroll effect on the navbar */
    var header = $('header');

    header.waypoint({
        handler: function(direction) {
            if (direction == 'down') {
                header.stop().addClass("sticky").css("top",-header.outerHeight()).animate({"top":""});
            } else {
                header.stop().removeClass("sticky").css("top",header.outerHeight()).animate({"top":""});
            }     
        },
   
    });

    // if(window.innerWidth > 1264) {
    //     window.addEventListener("scroll", sticky);
    // }

    // function checkWindowSize() {
        
    //     if(window.innerWidth > 1264) {
    //         window.addEventListener("scroll", sticky);
    //     }
    //     else {
    //         window.removeEventListener("scroll", sticky);
    //         var header = document.querySelector("header");
    //         header.classList.remove('sticky');
    //     }

    // }

    // window.onresize = checkWindowSize;

    // function sticky() {     
    //     var header = document.querySelector("header");
    //     header.classList.toggle('sticky',window.scrollY > 0);
    // }

    /* Read more slide-down effect */
    function readMore(text, btn) {
        $(btn).on("click", function(){
            $(text).slideToggle(500);
        });
    }

    readMore(".zoom-recruitment", ".zoom-recruitment-btn");
    readMore('.eb-transport', '.eb-transport-btn');
    readMore('.hitech-2', '.hitech-2-btn');
    readMore('.salmat', '.salmat-btn');
    readMore('.hitech-1', '.hitech-1-btn');


})




