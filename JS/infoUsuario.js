function validarForm(){
    var validator = $("#frmUsuario").validate({
        rules:{
            txtCorreo:{
                required: true,
                email: true
            },
            txtPass:{
                required: true
            },
            txtPass1:{
                required:true,
                equalTo: '#txtPass'
            }
        },
        messages:{
            txtCorreo:{
                required: 'Vacío <i class="fas fa-exclamation-circle text-warning"></i>',
                email: 'Inválido <i class="fas fa-exclamation-circle text-warning"></i>'
            },
            txtPass:{
                required: 'Vacío <i class="fas fa-exclamation-circle text-warning"></i>'
            },
            txtPass1:{
                required:'Vacío <i class="fas fa-exclamation-circle text-warning"></i>',
                equalTo: 'No coincide <i class="fas fa-exclamation-circle text-warning"></i>'
            }
        }
    });

    if(validator.form()){
        $.ajax({
            type: "post",
            url: "PHP/cambiarPass.php",
            data: $("#frmUsuario").serialize(),
            success: function (response) {
                if(response==true){
                    swal("Accesso actualizado","Se cambió la contraseña con éxito","success").then(function(){ 
                        location.reload();
                    }
                    );
                }
                else{
                    swal("Hubo un error",response,"error");
                }
            }
        });
    }  
} 

$("#btnCambiar").click(function () { 
    validarForm();
    
});