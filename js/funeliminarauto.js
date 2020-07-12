$(document).ready(function() {
    $('#eliminarAuto').click(function(e) {
        e.preventDefault();
        $.ajax({
           
            
            url: "./eliminaAutos.php?id='.$placa.'", // A donde se dirige para hacer el registro en la BD
            success: function(res) {                                
                alert("Datos Eliminados");
            
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
