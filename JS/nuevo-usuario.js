function validarForm(){
    var validator = $("#frmNUsuario").validate({
        rules: {
            txtCorreo:{
                email: true,
                required: true
            },
            txtCorreo_conf:{
                required: true,
                equalTo: "#txtCorreo"
            },
            txtNombre:{
                required: true
            },
            txtPass:{
                required: true
            },
            txtPass1:{
                required: true,
                equalTo: "#txtPass"
            }
        },
        messages:{
            txtCorreo:{
                email: 'Inválido <i class="fas fa-exclamation-circle text-warning"></i>',
                required: 'Vacío <i class="fas fa-exclamation-circle text-warning"></i>'
            },
            txtCorreo_conf:{
                required: 'Vacío <i class="fas fa-exclamation-circle text-warning"></i>',
                equalTo: 'No coincide <i class="fas fa-exclamation-circle text-warning"></i>'
            },
            txtNombre:{
                required: 'Vacío <i class="fas fa-exclamation-circle text-warning"></i>'
            },
            txtPass:{
                required: 'Vacío <i class="fas fa-exclamation-circle text-warning"></i>'
            },
            txtPass1:{
                required: 'Vacío <i class="fas fa-exclamation-circle text-warning"></i>',
                equalTo: 'No coincide <i class="fas fa-exclamation-circle text-warning"></i>'
            }
        }
    });

    if(validator){
        $.ajax({
            type: "post",
            url: "PHP/registroUsuario.php",
            data: $("#frmNUsuario").serialize(),
            success: function (response) {
                if(response==true){
                    alertify.message("Registrando nuevo usuario...");
                    setTimeout(function(){
                        location.href="proyectos";
                    }, 1500);
                }
                else{
                    alertify.error(response);
                }
            }
        });
    }
}

$("#btnCCuenta").click(function () { 
    validarForm();    
});