<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="description" content="Página de prueba para uso de jquery y php">
    <meta name="keywords" content="HTML5, PHP, Jquery">
    <meta name="_token" content="xJoRyuepO5oC4jVIahxrmKvzlaxsLfD7am7CHhI6">
    
    <link rel="icon" href="../../favicon.ico">
    <!--Slick grid-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="css2pdf/xepOnline.jqPlugin.js"></script>
    <link rel="stylesheet" href="slick/slick.grid.css" type="text/css">
    <link rel="stylesheet" href="slick/css/smoothness/jquery-ui-1.8.16.custom.css" type="text/css">
    <link rel="stylesheet" href="css/example.css" type="text/css">
    <link href="js/jquery-ui/jquery-ui.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="examples.css" type="text/css"/>-->

    <script src="slick/lib/jquery.event.drag-2.2.js"></script>
    <script src="slick/slick.core.js"></script>
    <script src="slick/slick.grid.js"></script>


    <!-- fin slick grid -->



    <title> Agenda electronica </title>

     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <script src="js/validaciones.js"></script>
    <script src="js/contacto.js"></script>
    <script src="js/perfil.js"></script>
    <script src="js/infoPerfil.js"></script>
    <script src="js/home.js"></script>
    <script>
        $(document).ready(function(){
            $("#formpdf").submit(function(event){
                event.preventDefault();
                var head = $("head").html();
                var div = $("#container").html();
                var token = $('meta[name="_token"]').attr('content');
                
                console.log($("#contenedor").html());
                console.log($("head").html());
                
                $("#head").val(head);
                $("#div").val(head);
                var posting = $.post( "/pdf", {head: head, div: div, _token:token});
                posting.done(function( data ) {
                    alert(data);
                });
            });
        });
        
    </script>
    

  <body>
       
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron" id="contenedor">    
    <div id="fmAgregar" style="width:400px; margin: 0 auto;"> 
    <h2> Agregar contactos </h2>
        <form enctype="multipart/form-data" method="Post" action="contactos/agregar" id="fmAddCont" class="fmAddCont" wtx-context="0E77D17C-B3E7-4505-A71C-8D19A093CC9B">
            
            <div class="form-group"> <!-- Nombre -->
                <label for="nombre" class="control-label">Nombre</label>
                <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" required="" maxlength="100" minlength="4" wtx-context="2BF41FF1-7C0C-46EC-B56F-5D254B04057F" type="text">
                <div id="nombreAlerta" style="display:none"> </div>
            </div>  

            <div class="form-group"> <!-- Email -->
                <label for="email" class="control-label">Correo electrónico</label>
                <input class="form-control" id="email" name="email" placeholder="Correo electrónico" required="" maxlength="35" minlength="5" wtx-context="44392CFC-343A-4A14-8041-3689F5947EB0" type="email">
                <div id="emailAlerta" style="display:none"> </div>
            </div>  

            <div class="form-group"> <!-- Tel fijo -->
                <label for="tel" class="control-label">Teléfono fijo</label>
                <input class="form-control" id="tel" name="tel" placeholder="Teléfono fijo" required="" maxlength="13" minlength="8" wtx-context="880EC780-958A-4E92-8445-BBAB5724A396" type="text">
                <div id="telAlerta" style="display:none"> </div>
            </div>  
        
            <div class="form-group"> <!-- Celular -->
                <label for="cel" class="control-label">Celular</label>
                <input class="form-control" id="cel" name="cel" placeholder="Celular" required="" maxlength="13" minlength="8" wtx-context="60E62008-B6E5-470F-8B2C-EDD7DE8E7776" type="text">
                 <div id="celAlerta" style="display:none"> </div>
            </div>  

            <div class="form-group"> <!-- Dirección -->
                <label for="dir" class="control-label">Dirección</label>
                <input class="form-control" id="dir" name="dir" placeholder="Dirección" required="" maxlength="100" minlength="5" wtx-context="57F4F3D9-3CED-48FC-87A1-C9A7833381E1" type="text">
                <div id="dirAlerta" style="display:none"> </div>
            </div>  
            
            <div class="form-group">
                <label for="foto">Elegir foto</label>
                <input class="form-control-file" name="foto" id="foto" required="" wtx-context="394CCE6B-C6CF-4FC6-B6A7-DF66F2822B6F" type="file"> 
            </div>

            <div class="form-group"> <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Agregar contacto</button>
            </div>   
        </form>
        <div class="messages"> </div>
    </div></div>

    </body></html>