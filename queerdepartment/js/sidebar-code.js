





$(document).on('click','#best',function(){
    $('.resent').removeClass('show');
    $('.resent').addClass('hide__content');
    $('.best').removeClass('hide__contentshow');
    $('.best').addClass('show');
    $ ('.tumbler__line2').addClass('tumbler__line-active');
    $('.tumbler__line2').removeClass('tumbler__line-nonactive');
    $ ('.tumbler__line1').addClass('tumbler__line-nonactive');
    $('.tumbler__line1').removeClass('tumbler__line-active');
});

$(document).on('click','#resent',function(){
    $('.resent').removeClass('hide__content');
    $('.resent').addClass('show');
    $('.best').removeClass('show');
    $('.best').addClass('hide__contentshow');
    $ ('.tumbler__line1').addClass('tumbler__line-active');
    $('.tumbler__line1').removeClass('tumbler__line-nonactive');
    $ ('.tumbler__line2').addClass('tumbler__line-nonactive');
    $('.tumbler__line2').removeClass('tumbler__line-active');
});

