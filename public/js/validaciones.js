/* Validar usuario (que no contenga caracteres espaciales, solo [a-zA-Z0-9_]) */
function validarUsuario(usuario){
    var regUsuario = new RegExp("[^a-zA-Z0-9_]+");
    if(!regUsuario.test(usuario))
        return true;
    else
        return false;
}

/*********************************************************
 * funcion validarPass: verifica que las contraseñas tengan
 * la longitud permitida ()
 **********************************************************/
function validarPass(pass, pass2){
    if(pass.length>15 || pass2.length > 15 || pass.length < 4 || pass2.length < 4)
        return false;
    else if(pass != pass2)
        return false;
    return true;
}

/************************************************************
 * validarArchivo: verifica la extension de un archivo
 ************************************************************/
function validarArchivo(){
    var val = $(this).val();
    switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
        case 'gif': case 'jpg': case 'png':
            //alert("an image");
            return true;

        default:
            $(this).val('');
            // error message here
            alert("No ha seleccionado una imagen");
            return false;
    }
}

/************************************************************
 * valida el nombre de una persona
 ************************************************************/
function validarNombre(nombre){
   // if (!/^[A-Za-z0-9,;._\-\/()ñÑáÁéÉíÍóÓúÚ\s]{1,60}$/.test(contenido)) {
    if (/^[A-Za-zñÑáÁéÉíÍóÓúÚ.\s]{4,60}$/.test(nombre)) {
        return true;
    }
    else{
        return false;
    }
}

function validarEmail(email){
     if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(email)) {
         return true;
     }
     return false;
}

function validarTel(tel){
      if (/^\-?[0-9]{7,13}$/.test(tel)) {
         
         return true;
     }
     return false;
}

function validarCel(cel){
      if (/^\-?[0-9]{7,13}$/.test(cel)) {
         return true;
     }
     return false;
}

function validarDir(dir){
      if (/^[A-Za-z0-9\s\-\.,]{10,100}$/.test(dir)) {
         return true;
     }
     return false;
}