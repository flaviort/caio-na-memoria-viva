$("#contact-form").validate({
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