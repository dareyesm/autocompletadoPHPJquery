<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Autocompletado</title>
        <meta charset="utf-8">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script>
            $(function(){
                $("#buscador").autocomplete({
                    source: 'buscador.php',
                    select: function(event, ui){
                        $("#resultado").html(
                            '<h2>Detalles del Usuario:</h2>' + 
                            'Nombre de Usuario: ' +
                            ui.item.value + '<br>' + 
                            'id de usuario: ' + 
                            ui.item.idUsuario
                        );
                    }
                });
            });
        </script>
    </head>
    <body>
        <div id="buscar">
            <input type="text" name="buscador" id="buscador" />
        </div>
        <div id="resultado"></div>
    </body>
</html>