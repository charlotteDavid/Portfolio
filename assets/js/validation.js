$(function () { 
    $.validator.setDefaults({
      errorClass: 'help-block',
        highlight: function (element) {
            $(element)
                    .closest('#form-champ')
                    .addClass('has-error');
        },
        unhighlight: function (element) {
            $(element)
                    .closest('#form-champ')
                    .removeClass('has-error');
        },
        errorPlacement: function (error, element) {
            if (element.prop('type') === 'checkbox') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });  
    $.validator.addMethod('expressionRequlière', function(value, element){
         var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
         return this.optional(element) || regex.test(value);
    }," Veuillez corriger votre email");
    $.validator.addMethod("lettersonly", function (value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Veuillez renseigner votre nom sans caractères spéciaux");    
    $("#contactform").validate({
        rules: {
            email: {
                required: true,
                email: true,
                expressionRequlière : true
            },
            name: {
                required: true,
                lettersonly:true                      
            },           
            message:{
                required:true
            },  
            pseudo: {
                required: true,
                pseudoExists : true
            } 
        }
    });
});



