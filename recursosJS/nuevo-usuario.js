function validarForm(){
    var validator = $("#frmNUsuario").validate({
        rules: {
            txtCorreo:{
                email: true,
                required: true
            },
            txtPass:{
                required: true
            },
            txtPass1:{
                required: true,
                equalTo: "txtPass"
            }
        },
        messages:{
            txtCorreo:{
                email: 'Inválido <i class="fas fa-exclamation-circle text-warning"></i>',
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
}

$("#btnCCuenta").click(function () { 
    validarForm();    
});