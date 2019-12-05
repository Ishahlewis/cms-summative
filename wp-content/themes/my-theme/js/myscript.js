$(function(){

    $('.bars').on('click',function(){
        $('.nav').slideDown();
        $('.bars').hide();
    });
 
    $('.nav').hide();

    var backUp =  '<li class="back-up"><i class="fas fa-chevron-up"></i></li>'

    $(backUp).appendTo('#menu-main-menu');
    
    $('.back-up').on('click', function(){
        $('.nav').slideUp();
        $('.bars').show();
    });

});
