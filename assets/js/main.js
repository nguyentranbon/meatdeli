(function($) {
    window.onload = function() {
        $(document).ready(function() {
            changeScroll();
            backTopTop();
        });
    };
})(jQuery);

var header = $('header');

// transtion scroll 
function changeScroll(){
    window.addEventListener('scroll', ()=>{
        var h_header = header.height();
        if($(window).scrollTop() >=5 && $(window).scrollTop() > h_header-100){
            header.addClass('header__scroll');
        }else{
            header.removeClass('header__scroll');
        }
    })
}

// Click Back to top
function backTopTop(){
    $(".backToTop").click(()=>{
        $("html, body").animate({scrollTop: 0}, 700);   
        console.log("12321");
    })
}