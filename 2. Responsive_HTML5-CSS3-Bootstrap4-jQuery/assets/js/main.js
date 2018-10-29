$(document).ready(function() {  
    $(window).on('load', function () {
        $("#loading").fadeOut(500);
        //isotope
        var $notes = $( ".grid" ).isotope( {
            itemSelector: ".grid-item",
        }); 
        $notes.isotope({ filter: '*' });
        $( ".filters-button-group .btn" ).on( "click", function (e) {
            e.preventDefault();
            $(".filters-button-group .btn" ).removeClass("is-checked");
            $(this).addClass("is-checked");
            $notes.isotope({
                filter: $(this).attr("data-filter")
            });
        });
    });
    
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 10) {
            $('nav').addClass('bg-light').css({'transition':'all ease .5s'});
        }
        else {
            $('nav').removeClass('bg-light').css({'transition':'all ease .5s'});
        }
    });
});