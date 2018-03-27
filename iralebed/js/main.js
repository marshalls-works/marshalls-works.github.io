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
    modalOpening('.backgr__pict1', '#hidden-content-b1');
    modalOpening('.backgr__pict2', '#hidden-content-b2');
    modalOpening('.backgr__pict3', '#hidden-content-b3');
    modalOpening('.backgr__pict4', '#hidden-content-b4');
    modalOpening('.backgr__pict5', '#hidden-content-b5');
    modalOpening('.backgr__pict6', '#hidden-content-b6');


    // Slick slider
    $('.big-slider').slick({
        // settings
        arrows:true,
        nextArrow: '<button type="button" class="slick-next arrow__right"><i class="fas fa-caret-right"></i></button>',
        prevArrow: '<button type="button" class="slick-prev arrow__left"><i class="fas fa-caret-left"></i></button>',
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

     // Slick slider
    $('.test-slider').slick({
        // settings
        arrows:true,
        nextArrow: '<button type="button" class="test-next"><i class="fas fa-caret-right"></i></button>',
        prevArrow: '<button type="button" class="test-prev"><i class="fas fa-caret-left"></i></button>',
        dots: true,
        autoplay: true,
        infinite: true,
        speed: 500,
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

      // Slick slider
    $('.card-slider').slick({
        // settings
        arrows:true,
        nextArrow: '<button type="button" class="test-next card-right"><i class="fas fa-caret-right"></i></button>',
        prevArrow: '<button type="button" class="test-prev card-left"><i class="fas fa-caret-left"></i></button>',
        dots: false,
        autoplay: true,
        infinite: true,
        speed: 500,
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

      // Slick slider
    $('.theme-slider').slick({
        // settings
        arrows:true,
        nextArrow: '<button type="button" class="theme-next theme-right"><i class="fas fa-caret-right"></i></button>',
        prevArrow: '<button type="button" class="theme-prev theme-left"><i class="fas fa-caret-left"></i></button>',
        dots: false,
        infinite: true,
        slidesToShow: 8,
        slidesToScroll: 8,
        speed: 1800,
        responsive: [
            {
                breakpoint: 960,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    arrows: false
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    arrows: false
                }
            }
        ]
    });


    
    
    
});