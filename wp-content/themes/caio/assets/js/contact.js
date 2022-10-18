function newsletter(){
    $('input[name="subscribe"]').click();

    setTimeout(function(){
        if ($('input[name="subscribe"]').is(":checked")) {
            $('.form-checkbox .checkbox').addClass('active')
        } else (
            $('.form-checkbox .checkbox').removeClass('active')
        );
    }, 10);
};

var name = 'your-name';

$(".wpcf7-form").validate({
    highlight: function (element){
        $(element).closest(".form-line").addClass("error");
    },
    unhighlight: function (element){
        $(element).closest(".form-line").removeClass("error");
    },
    rules: {
        'your-name': "required",
        'your-email': "required",
        'your-message': "required"
    },
    messages: {
        'your-name': "Este campo é obrigatório",
        'your-email': "Este campo é obrigatório",
        'your-message': "Este campo é obrigatório"
    }
});

$('.wpcf7-form').on('wpcf7submit', function (){ 
    $.fancybox.open($("#contact-success"));
});

$('.wpcf7-form').on('wpcf7invalid', function (){ 
    $.fancybox.open($("#contact-error"));
});