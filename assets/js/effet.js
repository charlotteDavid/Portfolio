
            $(document).ready(function(){
             $('.skillbar').each(function(){
                $(this).find('.skillbar-bar').animate({
            width:$(this).attr('data-percent')
        },2000);
    });
});




    $(document).ready(function() {
         $('#myCarousel').carousel({
             interval: 2000
         });
    });    
