$(function () {
    // Вызов меню
    $('.burger_trigger, .nav__menu').click(function(){
  $('.nav__menu').toggleClass('menu_opened');
})
$(document).click(function(event) {
    if ($(event.target).closest(".burger_trigger").length ) return;
    $('.nav__menu').removeClass('menu_opened');
    event.stopPropagation();
});



    // Прокрутка к секции
    $('.go_to').click( function(){ // ловим клик по ссылке с классом go_to
        var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 1000); // анимируем скроолинг к элементу scroll_el
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


    // Вызов модального окна
    $('.button__js').on('click', function(e) {
        e.preventDefault();
        $('#exampleModal').arcticmodal();
    });

    // Вызов модального окна
    $('.backgr__pict1').on('click', function(e) {
        e.preventDefault();
        $('#hidden-content-b1').arcticmodal();
    });

    // Вызов модального окна
    $('.backgr__pict2').on('click', function(e) {
        e.preventDefault();
        $('#hidden-content-b2').arcticmodal();
    });

    // Вызов модального окна
    $('.backgr__pict3').on('click', function(e) {
        e.preventDefault();
        $('#hidden-content-b3').arcticmodal();
    });

    // Вызов модального окна
    $('.backgr__pict4').on('click', function(e) {
        e.preventDefault();
        $('#hidden-content-b4').arcticmodal();
    });



    // Slick slider
    $('.big-slider').slick({
        // settings
        arrows:true,
        nextArrow: '<button type="button" class="slick-next arrow__right"><i class="fal fa-angle-right"></i></button>',
        prevArrow: '<button type="button" class="slick-prev arrow__left"><i class="fal fa-angle-left"></i></button>',
        dots: true,
        responsive: [
            {
                breakpoint: 960,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true
                }
            }
        ]
    });



    
    
    
});