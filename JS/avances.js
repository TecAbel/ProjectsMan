function validarForm(){
    var validator = $("#frmNuevoAvance").validate({
        rules:{
            txtProjecto:{
                required: true
            },
            txtDate:{
                required: true
            },
            txtAvance:{
                required: true
            },
            txtAvanceDetalle:{
                required: true
            }
        },
        messages:{
            txtProjecto:{
                required: 'Intente de nuevo <i class="fas fa-exclamation-circle text-warning"></i>'
            },
            txtDate:{
                required: 'Vacío <i class="fas fa-exclamation-circle text-warning"></i>' 
            },
            txtAvance:{
                required: 'Vacío <i class="fas fa-exclamation-circle text-warning"></i>' 
            },
            txtAvanceDetalle:{
                required: 'Vacío <i class="fas fa-exclamation-circle text-warning"></i>' 
            }
        }
    });

    if(validator.form()){
        $.ajax({
            type: "post",
            url: "PHP/registroAvance.php",
            data: $("#frmNuevoAvance").serialize(),
            success: function (response) {
                if(response == true){
                    alertify.message("Avance registrado");
                    setTimeout(() => {
                        location.reload();
                    }, 800);
                }
                else{
                    swal("Error", "Detalle del error: "+response, "error");
                }
            }
        });
    }
}

$("#btnAgregarP").click(function (){ 
    validarForm();
    
});