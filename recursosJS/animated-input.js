$('input').focus(function(){
    $(this).parents('.form-group').addClass('focused');
});

$('input').blur(function () { 
    var inputValue = $(this).val();
    if(inputValue == ""){
        $(this).removeClass('filed');
        $(this).parents('.form.group').removeClass('focused');
    }else{
        $(this).addClass('filed');
    }
});

$('#btnEntrar').click(function (e) { 
    alertify.message('Hola Usuario');
});