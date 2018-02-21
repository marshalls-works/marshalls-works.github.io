 $(document).ready(function(){
    $("a[href*=#]").on("click", function(e){
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 777);
        e.preventDefault();
        return false;
    });
});



$(document).ready(function(){

           $("#showHideContent").click(function () {
                       if ($("#content").is(":hidden")) {

                               $("#content").show("slow");

                       } else {

                               $("#content").hide("slow");

                       }
 return false;
});
});