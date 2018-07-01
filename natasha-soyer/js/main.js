$(function () {


	    // Вызов меню
    $('.burger_trigger, .nav__menu').click(function(){
  $('.nav__menu').toggleClass('opened');
})
$(document).click(function(event) {
    if ($(event.target).closest(".burger_trigger").length ) return;
    $('.nav__menu').removeClass('opened');
    event.stopPropagation();
});

    $('.link__to').click( function(){ // ловим клик по ссылке с классом go_to
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
                    
                    name:{
                        required:true
                    },
                    email:{
                        required:true,
                        email:true
                    },
                     comment:{
                        required:true
                    }
                },
                messages:{
                  
                    name:{
                        required:'Поле обязательно для заполнения',
                    },
                    email:{
                        required:'Поле обязательно для заполнения',
                        email:'Неверный формат E-mail'
                    }, 
					comment:{
                        required:'Поле обязательно для заполнения'
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
    modalOpening('.button__reg', '#exampleModal1');
    modalOpening('.backgr__pict2', '#hidden-content-b2');
    modalOpening('.backgr__pict3', '#hidden-content-b3');
    modalOpening('.backgr__pict4', '#hidden-content-b4');


 });

