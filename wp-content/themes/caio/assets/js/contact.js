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

$("#form-send").click(function(){
    $(".wpcf7-form").validate({
        highlight: function (element){
            $(element).closest(".form-line").addClass("error");
        },
        unhighlight: function (element){
            $(element).closest(".form-line").removeClass("error");
        },
        rules: {
            Nome: "required",
            Email: "required",
            Mensagem: "required"
        },
        messages: {
            Nome: "Este campo é obrigatório",
            Email: "Este campo é obrigatório",
            Mensagem: "Este campo é obrigatório"
        }
    });
});

$('.wpcf7').on('wpcf7submit', function (){ 
    
});

$('.wpcf7').on('wpcf7invalid', function (){ 
    
});