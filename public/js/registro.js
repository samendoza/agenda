/*usuarioDisponible: verifica si el nombre de un usuario ya se esta usando en la base de datos */
function usuarioDisponible(){
    $("#avisoUsuario").show();
    var usuario = $(":input[name='usuario']").val();
    var token = $('meta[name="_token"]').attr('content');
    var usuarioValido = validarUsuario(usuario);

    if(usuario == ''){
        $("#avisoUsuario").hide();
        return 0;
    }
        
    //Si no encuentra caracteres especiales:
    if(!usuarioValido)
    {
        $("#avisoUsuario").show().text("El nombre de usuario solo puede contener letras, números y _");
        if($( "#avisoUsuario" ).hasClass( "alert alert-success"))
            $("#avisoUsuario").removeClass( "alert alert-success" );
        $("#avisoUsuario").addClass( "alert alert-danger" );
    }   
    
    else{
        var posting = $.post( "/verificar", {usuario: usuario, _token:token});
        posting.done(function( data ) {
            if(data == "1"){    
                $("#avisoUsuario").show().text("El nombre de usuario está ocupado");
                if($( "#avisoUsuario" ).hasClass( "alert alert-success"))
                    $("#avisoUsuario").removeClass( "alert alert-success" );
                $("#avisoUsuario").addClass( "alert alert-danger" );
                
            }
            else if(data == "2"){
                $("#avisoUsuario").show().text("El nombre de usuario está disponible");
                if($( "#avisoUsuario" ).hasClass( "alert alert-danger" ))
                    $("#avisoUsuario").removeClass( "alert alert-danger" );
                $("#avisoUsuario").addClass( "alert alert-success" );
            }
        });
    }
}

/*********************************************************
 * funcion registrarUsuario: envia los datos del formulario 
 * al servidor para que se registren
 **********************************************************/
 function registrarUsuario(event){
    event.preventDefault(); //previene que el formulario se procese como lo hace normalmente 
    var formData = new FormData($(".fmregistro")[0]);
    var token = $('meta[name="_token"]').attr('content');
    formData.append("_token",token);
    formData.append("peticion","agregar");

    var pass = formData.get('pass');
    var pass2 = formData.get('pass2');
    var usuario = formData.get('usuario');

    var usuarioValido = validarUsuario(usuario);
    var passValido = validarPass(pass, pass2);

    var $form = $( this ), // crea una variable form que apunta al formulario              
    url = $form.attr( "action" );

    if(usuarioValido && passValido){
        $.ajax({
            url: url,  
            type: 'POST',
            // Form data
            //datos del formulario
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
                message = $("<span class='before'>Subiendo la imagen, por favor espere...</span>");
                //showMessage(message)        
            },
            //una vez finalizado correctamente
            success: function(data){
                alert(data);
                if(data == "1"){
                    alert("Usuario registrado con exito");
                    var url = "index.php"; 
                    $(location).attr('href',url);
                }
                else if(data == "2")
                    alert("No podemos registrar su usuario");
                else
                    alert("Las contraseñas no coinciden");
                    message = $("<span class='success'>La imagen ha subido correctamente.</span>");
            },
            //si ha ocurrido un error
            error: function(){
                message = $("<span class='error'>Ha ocurrido un error.</span>");
            }
        });
    }
 }

 /**********************************************************
 * funcion passCoinciden: verifica que las dos contraseñas coincidan
 **********************************************************/

function passCoinciden(){
    var pass = $("#pass").val();
    var pass2 = $("#pass2").val();
    var passValido = validarPass(pass, pass2);

    if(passValido){
        $("#avisoPass").show().text("Las contraseñas coinciden");
        if($( "#avisoPass" ).hasClass( "alert alert-danger" ))
            $("#avisoPass").removeClass( "alert alert-danger" );
        $("#avisoPass").addClass( "alert alert-success" );
    }
    else{
        $("#avisoPass").show().text("Las contraseñas no coinciden");
        if($( "#avisoPass" ).hasClass( "alert alert-success"))
            $("#avisoPass").removeClass( "alert alert-success" );
        $("#avisoPass").addClass( "alert alert-danger" );
    }

}