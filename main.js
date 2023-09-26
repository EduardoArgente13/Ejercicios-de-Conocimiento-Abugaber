$(document).ready(function(){
    
    $.ajax({
        url: 'listado.php',
        type: 'get',
        success: function(response) {
            $('#listado').html(response);
            console.log("Datos recibidos del listado: ", response);
        }
    });

    $("#formulario").submit(function(e){
        e.preventDefault();
        var formData = $(this).serialize(); 
        console.log("Datos enviados del formulario: ", formData); 
        $.ajax({
            url: 'ajax.php',
            type: 'post',
            data: formData,
            success: function(response) {
                alert(response);
                console.log("Datos recibidos del formulario: ", response); 
                
                $.ajax({
                    url: 'listado.php',
                    type: 'get',
                    success: function(response) {
                        $('#listado').html(response);
                        console.log("Datos recibidos del listado después de actualizar: ", response); 
                    }
                });
            }
        });
    });
});
