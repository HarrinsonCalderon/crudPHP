$(document).ready(function(){
    
     if($("#buscar").length){
         $("#buscar").keyup(function(){
             let bus=$("#buscar").val()
             let accion="buscar";
             //console.log(bus);
             $.ajax({
                 url:"buscarTareas.php",
                 type:"POST",
                 async:true,
                 data:{
                     action:accion,
                     buscar:bus
                 },
                 success:function(respuesta){
                     let rta;
                    if(respuesta!="No hay datos"){
                        //console.log(respuesta);
                        rta=JSON.parse(respuesta);
                        
                        //console.log(rta)
                        //$("#tareas").html(rta)
                           $("#lista").html(rta)
                    }else{
                           $("#lista").html('')
                    }
                 }
             })
         })
     }
    
    
    
})