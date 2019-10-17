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
        alert("ok");
    }  
} 

$("#btnCambiar").click(function () { 
    validarForm();
    
});