$(document).ready(function(){
    
    if($("#formulario-guardar").length){
       $("#formulario-guardar").submit(function(e){
           e.preventDefault()
           let v=$(this).serialize()
           let n=$("#nombre").val()
           let d=$("#descripcion").val()
           //console.log(v)
           let accion="agregar"
            $.ajax({
               url:"agregarTarea.php",
               type:"POST",
               async:true,
               data:{
                   accion:accion,
                   //datos:v
                   nombre:n,
                   descripcion:d
               },
               success:function(respuesta){
                if(respuesta=="1"){
                    //limpiar el formulario
                    alert("Tarea agregada")
                    $("#formulario-guardar").trigger("reset")
                    listar()
                }else{
                    alert("Error al guardar la tarea")
                }
               }
           }) 
           
       })
    }
    //evento de los eliminar
    $(document).on('click','.btneliminar',function(){
        if(confirm("Desea eliminar el registro?")){
        let padreBoton=$(this)[0].parentElement.parentElement.firstChild;
        let id=padreBoton.getAttribute("value")
        //console.log(id)
        $.ajax({
            url:"eliminar.php",
            type:"POST",
            async:true,
            data:{
                action:"eliminar",
                id:id
                },
            beforeSend:function(){
                //confirm("Eliminar?")
            },
            success:function(respuesta){
                //console.log(respuesta)
                if(respuesta=="Eliminado"){
                    listar();
                }else{
                    alert("Error al eliminar el registro")
                }
            }
        })
    }
    })

    listar();
    
})

function listar(){
    $.ajax({
        url:"listar.php",
        type:"GET",
        success:function(respuesta){
            let rta;
            if(respuesta=="2"){
                rta="No hay datos";
                $("#tareas").html(rta)
            }else{
                rta=JSON.parse(respuesta);
                let template="";
                rta.forEach(element => {
                    template+="<tr>"
                        +"<td value="+element.id+">"+element.id+"</td>"
                        +"<td>"+element.nombre+"</td>"
                        +"<td>"+element.descripcion+"</td>"
                        +"<td>"+"<a href='#' class='btneliminar btn btn-danger'>Eliminar</a>"+"</td>"

                    +"</tr>"
                });
                //console.log(respuesta)
                $("#tareas").html(template)
            }
        }
    })

}