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

    if(validator.form()){
        $.ajax({
            type: "post",
            url: "PHP/registroUsuario.php",
            data: $("#frmNUsuario").serialize(),
            success: function (response) {
                if(response==true){
                    setTimeout(function(){
                        document.getElementById('frmNUsuario').reset();
                        swal("Usuario registrado", "Ya puede iniciar sesión con el nuevo usuario", "success");
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