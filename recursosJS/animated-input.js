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

$('textarea').focus(function(){
    $(this).parents('.form-group').addClass('focused');
});

$('textarea').blur(function () { 
    var inputValue = $(this).val();
    if(inputValue == ""){
        $(this).removeClass('filed');
        $(this).parents('.form.group').removeClass('focused');
    }else{
        $(this).addClass('filed');
    }
});