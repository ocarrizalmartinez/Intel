$(document).ready(function(){
  load(1);
});

function load(page){
  var q= $("#q").val();
  var id_categoria= $("#id_categoria").val();
  var parametros={'action':'ajax','page':page,'q':q,'id_categoria':id_categoria};
  $("#loader").fadeIn('slow');
  $.ajax({
    data: parametros,
    url:'./ajax/buscar_pro.php',
     beforeSend: function(objeto){
     $('#loader').html(' Cargando...');
    },
    success:function(data){
      $(".outer_div").html(data).fadeIn('slow');
      $('#loader').html('');

    }
  })
}



  function eliminar (id)
{
  var q= $("#q").val();
if (confirm("Realmente deseas eliminar el producto")){
$.ajax({
    type: "GET",
    url: "./ajax/buscar_pro.php",
    data: "id="+id,"q":q,
 beforeSend: function(objeto){
  $("#resultados").html("Mensaje: Cargando...");
  },
    success: function(datos){
$("#resultados").html(datos);
load(1);
}
  });
}
}
