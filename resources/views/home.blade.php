<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="description" content="Página de prueba para uso de jquery y php">
    <meta name="keywords" content="HTML5, PHP, Jquery">
    <meta name="_token" content="{{ csrf_token() }}">
    
    <link rel="icon" href="../../favicon.ico">
    <!--Slick grid-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="css2pdf/xepOnline.jqPlugin.js"></script>
    <link rel="stylesheet" href="slick/slick.grid.css" type="text/css"/>
    <link rel="stylesheet" href="slick/css/smoothness/jquery-ui-1.8.16.custom.css" type="text/css"/>
    <link rel="stylesheet" href="css/example.css" type="text/css"/>
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
    

  </head>

  <body>
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Agenda electrónica</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a id="home">Home</a></li><!--class="active" -->
            <li><a id="buscarCont">Buscar contactos</a></li>
            <li><a id="agregarCont">Agregar contactos</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

          

           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Perfil<span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a id="infoPerfil">Agregar información adicional</a></li>
                  <li><a id="editarPerfil">Cambiar Contraseña </a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/logout">Cerrar sesión</a></li>
              </ul>
            </li>
           <li class="dropdown"> <a href="#"><img id="imgPerfil" style="height: 30px; width: 30px"></img></a> </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container" id="container">
       
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron" id="contenedor">

      
        <div>
            <h2> Bienvenido </h2>
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        </div>

  
      </div>

    </div> <!-- /container -->

    <!--<a href="#" onclick="return xepOnline.Formatter.Format('contenedor',{render:'download'});">
       descargar coomo pdf
    </a>-->
    <form id="formpdf" method="get">
    <button id="pdf" type="submit"> Descargar pdf</button>
    <input type="hidden" name="head" value="">
    <input type="hidden" name="div" value="">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    </form>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/jquery-ui/jquery-ui.js"></script>
  </body>
</html>
