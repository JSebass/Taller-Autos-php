$(document).ready(function() {
    $('#formActualizarAuto').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST", // metodo por el cual se envian los datos
            data: $("#formActualizarAuto").serialize(), // Se toman todos los datos del formulario
            url: "./actualizaAutos.php", // A donde se dirige para hacer el registro en la BD
            success: function(res) {                                
                alert("Datos Actualizados");
            
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            },
            beforeSend: function() {
                alert("Enviando");
            }
        });
    });
});