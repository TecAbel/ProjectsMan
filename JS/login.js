function validateForm(){
    var validator = $("#formulario").validate({
        rules: {
            txtCorreo:{
                required: true,
                email:true
            },
            txtPass:{
                required: true
            }
        },
        messages:{
            txtCorreo:{
                required: 'Vacío <i class="fas fa-exclamation-circle text-warning"></i>',
                email:'Inválido <i class="fas fa-exclamation-circle text-warning"></i>'
            },
            txtPass:{
                required: 'Vacío <i class="fas fa-exclamation-circle text-warning"></i>'
            }
        }
    });
    if(validator.form()){
        $.ajax({
            type: "post",
            url: "PHP/ingreso.php",
            data: $("#formulario").serialize(),
            success: function (response) {
                if(response == true){
                    location.href="proyectos";
                }else if(response==false){
                    alertify.error("Usuario y contraseña incorrectos");
                }else{
                    alertify.alert(response);
                }
            }
        });
    }
}

$('#btnEntrar').click(function(){ 
    validateForm();
});