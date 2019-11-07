$(window).scroll(function(){
    var scroll = $(this).scrollTop();

    $('.aics-logo').css({
        'transform' : 'translate(0px, '+ scroll /4 +'%)'
    });
    $('.aics-text').css({
        'transform' : 'translate(0px, '+ scroll /4 +'%)'
    });
    $('.aics-logo2').css({
        'transform' : 'translate(0px, '+ scroll /4 +'%)'
    });

    $('.aics-box').css({
        'transform' : 'translateY(0px, -'+ scroll /40 + '%)'
    });


    if(scroll > $('.navigation').offset().top) {
        $('.navigation').each(function(){
            $('.navigation').addClass('is-showing')
        });
    }
});