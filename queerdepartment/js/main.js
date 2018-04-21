jQuery(window).scroll(function() { 
    var the_top = jQuery(document).scrollTop();
    if (the_top > 350) {
        jQuery('.fixed__about').addClass('fixed');
    }
    else {
        jQuery('.fixed__about').removeClass('fixed');
    }
});


jQuery(window).scroll(function() { 
    var the_top = jQuery(document).scrollTop();
    if (the_top > 1000) {
        jQuery('.fixed__about').toggleClass('fixed');
         jQuery('.fixed__about').addClass('stop_about');
    }
    else {
    }
});


jQuery(window).scroll(function() { 
    var the_top = jQuery(document).scrollTop();
    if (the_top < 1000) {
        jQuery('.fixed__about').toggleClass('fixed');
         jQuery('.fixed__about').removeClass('stop_about');
    }
    else {
    }
});

jQuery(window).scroll(function() { 
    var the_top = jQuery(document).scrollTop();
    if (the_top < 350) {
        jQuery('.fixed__about').removeClass('fixed');
    }
    else {
        jQuery('.fixed__about').addClass('fixed');
    }
});





jQuery(window).scroll(function() { 
    var the_top = jQuery(document).scrollTop();
    if (the_top > 350) {
        jQuery('.fixed__last-news').addClass('fixed');
    }
    else {
        jQuery('.fixed__last-news').removeClass('fixed');
    }
});


jQuery(window).scroll(function() { 
    var the_top = jQuery(document).scrollTop();
    if (the_top > 850) {
        jQuery('.fixed__last-news').toggleClass('fixed');
         jQuery('.fixed__last-news').addClass('stop');
    }
    else {
    }
});


jQuery(window).scroll(function() { 
    var the_top = jQuery(document).scrollTop();
    if (the_top < 850) {
        jQuery('.fixed__last-news').toggleClass('fixed');
         jQuery('.fixed__last-news').removeClass('stop');
    }
    else {
    }
});

jQuery(window).scroll(function() { 
    var the_top = jQuery(document).scrollTop();
    if (the_top < 350) {
        jQuery('.fixed__last-news').removeClass('fixed');
    }
    else {
        jQuery('.fixed__last-news').addClass('fixed');
    }
});


 




    $(function () {
    $('.search_icon').click(function () {
        $('.input').toggleClass('d-none_spec');
        $('.input').toggleClass('opened');
    }); 


    // Вызов меню
    $('.burger_trigger, .nav__menu').click(function(){
  $('.nav__menu').toggleClass('opened');
})
$(document).click(function(event) {
    if ($(event.target).closest(".burger_trigger").length ) return;
    $('.nav__menu').removeClass('opened');
    event.stopPropagation();
});

   

    $('.go_to').click( function(){ // ловим клик по ссылке с классом go_to
        var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 1500); // анимируем скроолинг к элементу scroll_el
        }
        return false; // выключаем стандартное действие
    });


   



    





    // Form send
        $('[data-submit]').on('click', function(e){
            e.preventDefault();
            $(this).parent('form').submit();
        })
        $.validator.addMethod(
            "regex",
            function(value, element, regexp) {
                var re = new RegExp(regexp);
                return this.optional(element) || re.test(value);
            },
            "Please check your input."
        );
        function valEl(el){

            el.validate({
                rules:{
                    tel:{
                        required:true,
                        regex: '^([\+]+)*[0-9\x20\x28\x29\-]{5,20}$'
                    },
                    name:{
                        required:true
                    },
                    email:{
                        required:true,
                        email:true
                    }
                },
                messages:{
                    tel:{
                        required:'Поле обязательно для заполнения',
                        regex:'Телефон может содержать символы + - ()'
                    },
                    name:{
                        required:'Поле обязательно для заполнения',
                    },
                    email:{
                        required:'Поле обязательно для заполнения',
                        email:'Неверный формат E-mail'
                    }
                },
                submitHandler: function (form) {
                    $('#loader').fadeIn();
                    var $form = $(form);
                    var $formId = $(form).attr('id');

                    $.ajax({
                        type: 'POST',
                        url: $form.attr('action'),
                        data: $form.serialize(),
                    })
                        .always(function (response) {
                            $('.arcticmodal-close').click();
                            setTimeout(function (){
                                $('#loader').fadeOut();
                            },800);
                            setTimeout(function (){
                                $('#overlay').fadeIn();
                                $form.trigger('reset');
                            },1100);
                            $('#overlay').on('click', function(e) {
                                $('#overlay').fadeOut();
                            });
                        });
                            
                    return false;
                }
            })
        }

        $('.js-form').each(function() {
            valEl($(this));
        });







        $('[data-submit]').on('click', function(e){
            e.preventDefault();
            $(this).parent('footer__form').submit();
        })
        $.validator.addMethod(
            "regex",
            function(value, element, regexp) {
                var re = new RegExp(regexp);
                return this.optional(element) || re.test(value);
            },
            "Please check your input."
        );
        function valEl(el){

            el.validate({
                rules:{
                    tel:{
                        required:true,
                        regex: '^([\+]+)*[0-9\x20\x28\x29\-]{5,20}$'
                    },
                    name:{
                        required:true
                    },
                    email:{
                        required:true,
                        email:true
                    }
                },
                submitHandler: function (form) {
                    $('#loader').fadeIn();
                    var $form = $(form);
                    var $formId = $(form).attr('id');

                    $.ajax({
                        type: 'POST',
                        url: $form.attr('action'),
                        data: $form.serialize(),
                    })
                        .always(function (response) {
                            $('.arcticmodal-close').click();
                            setTimeout(function (){
                                $('#loader').fadeOut();
                            },800);
                            setTimeout(function (){
                                $('#overlay').fadeIn();
                                $form.trigger('reset');
                            },1100);
                            $('#overlay').on('click', function(e) {
                                $('#overlay').fadeOut();
                            });
                        });
                            
                    return false;
                }
            })
        }

        $('.js-form').each(function() {
            valEl($(this));
        });

       




// функция вызова модального окна
    function modalOpening(modalTrigger, modalContent) {
        var modalTriggerSelector = $(modalTrigger),
          modalContentSelector = $(modalContent);

        modalTriggerSelector.on('click', function(e) {
            e.preventDefault();

            modalContentSelector.arcticmodal();
        })
    }

    modalOpening('.button__js', '#exampleModal'); // вызываем modalOpening для открытия exampleModal по клику на button__js


// Slick slider

    

    $('.big-slider').slick({
        // settings
        arrows:true,
        nextArrow: '<button type="button" class="slick-next"><img src="img/right.png"></button>',
        prevArrow: '<button type="button" class="slick-prev"><img src="img/left.png"></button>',
        dots: false,
        responsive: [
            {
                breakpoint: 960,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
        ]
    });

    $('.tag-slider').slick({
        // settings
        arrows:true,
        nextArrow: '<button type="button" class="slick-next"><img src="img/right-small.png"></button>',
        prevArrow: '<button type="button" class="slick-prev"><img src="img/left-small.png"></button>',
        dots: false,
        slidesToShow: 7,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
        ]
    });

    $('.medium-slider').slick({
        // settings
        arrows:true,
        nextArrow: '<button type="button" class="slick-next"><img src="img/right-small.png"></button>',
        prevArrow: '<button type="button" class="slick-prev"><img src="img/left-small.png"></button>',
        dots: false,
        slidesToShow: 1,
        responsive: [
            {
                breakpoint: 960,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
        ]
    });

});

