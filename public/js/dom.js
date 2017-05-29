$(document).ready(function(){
   
   /*console.time('class');
    var list = $('#list');
    var items = '<ul>';

    for (i=0; i<1000; i++) {
        items += '<li class="item' + i + '">item</li>';
    }

    items += '</ul>';
    list.html (items);

    for (i=0; i<1000; i++) {
        var s = $('.item' + i);
    }
    console.timeEnd('class');

    console.time('id');
    var list = $('#list');
    var items = '<ul>';

    for (i=0; i<1000; i++) {
        items += '<li id="item' + i + '">item</li>';
    }

    items += '</ul>';
    list.html (items);

    for (i=0; i<1000; i++) {
        var s = $('#item' + i);
    }
    console.timeEnd('id');
   */
   
    var parrafoId = $('<input></input>').attr('id', 'pid').val('hola mundo');
    $("#body").append(parrafoId);
    var button = $('<button></button>').attr('id', 'boton').text('Click id');
    $("#body").append(button);
    var button2 = $('<button></button>').attr('id', 'boton2').text('Click clase');
    $("#body").append(button2);
    
    
    
    $(document).on('click', '#boton', function (){
        console.time('id');
       alert('Valor de id: ' + $("#pid").val());
        console.timeEnd('id');
    });
    
    $(document).on('click', '#boton2', function (){
        console.time('class');
       alert('Valor de class: ' + $(".prueba:eq(2500)").val());
       console.timeEnd('class');
    });
    
    for (i = 0; i < 5000; i++) {
        agregarHTML(i);
    } 
    
    
    
    
});

function agregarHTML(i){
    
    
    var parrafo = $('<p></p>').text("soy un parrafo");
    
    var div = $('<div></div>').addClass('.prueba');
    var h1 = $('<h1></h1>').text('Soy cabecera h1').attr('name', 'loquesea').addClass('prueba');
    var span = $('<span></span>').text('soy un span').attr('name','loquesea');
    var form = $('<form></form>');
    var input = $('<input></input>').attr('name', 'loquesea');
    
    if(i ===5000)
       div.attr('class', 'prueba').val("HOLAMUNDODIV");
    
    $("#body").append(parrafo, div, h1, span, form, input);
    
}