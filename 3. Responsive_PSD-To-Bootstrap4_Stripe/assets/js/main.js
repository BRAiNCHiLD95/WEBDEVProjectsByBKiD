$(document).ready(function(){
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 1) {
            $('nav').addClass('bg-dark').css({'transition':'all ease .2s'});
        }
        else {
            $('nav').removeClass('bg-dark').css({'transition':'all ease .2s'});
        }
    });
});
