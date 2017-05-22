
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



$('.typeEcriture').typeIt({
     strings: 'Bienvenue, partagez vos idées , vos remarques .. A vous de Jouer !',
     speed: 150,
     autoStart: false
});