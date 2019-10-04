function validarForm(){
    var validator= $("#formulario").validate({
        rules:{
            txtNombreProyecto:{
                required: true
            }
        },
        messages:{
            txtNombreProyecto: {
                required: 'Vacío <i class="fas fa-exclamation-circle text-warning"></i>'
            }
        }
    });
    if(validator.form()){
        $.ajax({
            type: "post",
            url: "PHP/registroProyecto.php",
            data: $("#formulario").serialize(),
            success: function (response) {
                if(response==true){
                    alertify.message("Registrando proyecto");
                    setTimeout(() => {
                        location.reload();
                    }, 1000);
                }
                else{
                    alertify.error("Error: "+response);
                }
            }
        });
    }
}

$("#btnRegistrar").click(function () { 
    validarForm();    
});