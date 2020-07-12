$(document).ready(function() {
    $('#formRegistroAlquiler').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "GET", // metodo por el cual se envian los datos
            data: $("#formRegistroAlquiler").serialize(), // Se toman todos los datos del formulario
            url: "./alquiler.php", // A donde se dirige para hacer el registro en la BD
            success: function(res) {                                
                alert("Datos Registrados");
            
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