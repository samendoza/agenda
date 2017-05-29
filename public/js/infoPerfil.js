function bindElements(){
    $( "#rd_genero" ).buttonset();
    $( "#ckb_gustos" ).controlgroup();
    $( "#dp_fechaNac" ).datepicker({
        inline: true
    });
    $( "#sct_estado" ).selectmenu().selectmenu("menuWidget").css("height","200px");

    $( "#sld_java, #sld_jquery, #sld_php" ).slider({
        orientation: "horizontal",
        range: "min",
        max: 100,
        value: 50,
        animate: true,
        slide: refreshSwatch,
        change: refreshSwatch
    });
}

function refreshSwatch() {
    var php = $( "#sld_php" ).slider( "value" ),
        java = $( "#sld_java" ).slider( "value" ),
        jquery = $( "#sld_jquery" ).slider( "value" );

    $("#nivelJava").text("    " + java+" % ");
    $("#nivelJquery").text("    " +jquery+" % ");
    $("#nivelPhp").text("    " +php+" % ");
}

function sub(event){

        event.preventDefault();
        var $form = $( this ); // crea una variable form que apunta al formulario
        var nombre = $("#in_nombre").val();
        var apPat = $("#in_apPat").val();
        var apMat = $("#in_apMat").val();
        var genero = $form.find("input:radio[name='sexo']:checked").val();
        var estado  = $("#sct_estado").find("option:selected").val();
        var fechaNac = $("#dp_fechaNac").datepicker("getDate");
        fechaNac = $.datepicker.formatDate("dd-mm-yy", fechaNac);


        var chks = $form.find("input:checkbox[name='gustos']:checked");
        var gustos = new Array();
        $.each(chks, function() {
            gustos.push($(this).val());
        });
        var token = $('meta[name="_token"]').attr('content');
        var url = $form.attr( "action" );
        var php = $( "#sld_php" ).slider( "value" ),
            java = $( "#sld_java" ).slider( "value" ),
            jquery = $( "#sld_jquery" ).slider( "value" );

        var info = {
            nombre: nombre,
            apPat: apPat,
            apMat: apMat,
            sexo: genero,
            estado: estado,
            fechaNac: fechaNac,
            gustos: gustos,
            _token: token,
            php: php,
            java: java,
            jquery: jquery
        };

        $.ajax({
            url: url,
            type: 'post',
            dataType: 'json',
            data: info,
            success: function (data) {
               alert(data.msg);
               $(location).attr('href','/home');
            }
        });
}