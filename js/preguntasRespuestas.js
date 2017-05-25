function preguntasRespuestas(){
    $("#faqs dd").hide();
    $("#faqs dt").click(function () {
        $(this).next("#faqs dd").slideToggle(0);
        $(this).toggleClass("expanded");
    });
}