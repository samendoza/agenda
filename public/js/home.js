$(document).ready(function(){

    var posting = $.get( "/imagen", {});
    posting.done(function( data ) {
        $("#imgPerfil").attr("src", data);
    });


    $contenedor = $("#contenedor");

    $("#editarPerfil").click(function () {
        mostrarContenido("editarPerfil.html", eventEditarPerfil);
    });

    $("#buscarCont").click(function(){
        mostrarContenido("buscarContac.html", eventBusquedaCont);
    });

    $("#agregarCont").click(function(){
        mostrarContenido("addContac.html", eventAgregarContactos);
    });

    $("#infoPerfil").click(function(){
        mostrarContenido("infoPerfil.html",eventAgregarInfoPerfil);
    });

    $("#home").click(function(){
        mostrarContenido("home.html", manejoError);
    });

});

function manejoError(response, status, xhr ) {
    if ( status == "error" ) {
        var msg = "Sorry but there was an error: ";
        console.log( msg + xhr.status + " " + xhr.statusText );
    }
}

function eventAgregarInfoPerfil(response, status, xhr ) {
    if ( status != "error" ) {
        bindElements();
        $contenedor.on("submit", "#fm_info", sub);
    }
}

function eventAgregarContactos(response, status, xhr ) {
    if(status != "error") {
        $contenedor.on("focusout", "#nombre", nombreValido);
        $contenedor.on("focusout", "#email", emailValido);
        $contenedor.on("focusout", "#tel", telValido);
        $contenedor.on("focusout", "#cel", celValido);
        $contenedor.on("focusout", "#dir", dirValida);
        $contenedor.on("change", "#foto", validarArchivo);
        $contenedor.on("submit", "#fmAddCont", agregar);
    }
}

function eventEditarPerfil(response, status, xhr){
    if(status!="error"){
        $contenedor.on("submit", "#fmEditar", editarPerfil);
    }
}

function eventBusquedaCont(response, status, xhr) {
    if (status != "error") {
        $contenedor.on("keyup", "#busqueda", busqueda);
        $contenedor.on("click", ".rbCategoria", busqueda);
        $contenedor.on('click', '.borrar', function (event) {
            event.preventDefault();
            $(this).closest('tr').fadeOut();
        });
    }
}

function mostrarContenido(pagina, funcion){
    $contenedor.empty();
    $contenedor.load(pagina, funcion);
}