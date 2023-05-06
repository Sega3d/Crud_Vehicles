<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- En el siguiente bloque damos un estilo a los botones de ingresar vehiculo y cerra sesion! -->
    <style type="text/css">
        .boton_personalizado {
            text-decoration: none;
            padding: 10px;
            font-weight: 400;
            font-size: 20px;
            color: #ffffff;
            background-color: #F50808;
            border-radius: 6px;
            border: 2px solid #FFFFFF;
        }
        
        .boton_personalizado:hover {
            color: #1883ba;
            background-color: #ffffff;
        }
    </style>



    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="http://localhost/pajinawebMySavings/assets/csscrud.css" />

    <title>Información Vehiculos</title>
  </head>
  <body>
  
                    
                
    <div class="container fondo">
        <!-- Ingresamos una imagen relacionada con la informacion que se solicita para que sea mas amigable la pagina! -->
    <img align="center" src="imagenes/Principal.png" alt="" width="1200" height="250"><br><br>
        
        <div class="d-grid gap-2 d-md-block">
  <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="botonCrear">Ingresar Vehículo</button>
  <a class="btn btn-primary" href="cerrar.php?cerrar=yes">Cerrar sesión</a><br><br>

</div>

        
        <br />
<!-- En la siguiente tabla mostramos los titulos de la informacion que se va a mostrar en pantalla! -->
        <div class="table-responsive">
            <table id="datos_usuario" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Tipo de Vehiculo</th>
                        <th>Modelo</th>
                        <th>Matricula</th>                                           
                        <th>Color</th>
                        <th>N° de Pasajeros</th>
                        <th>Imagen</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
            </table>
        </div>
   </div>


<!-- Modal -->
<div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Registrar Vehiculos</h5>
        
      </div>
     <!-- Formulario para solicitar los datos del nuevo vehiculo al usuario ! -->
        <form method="POST" id="formulario" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-body">
                    <label for="nombre">Elija tipo de vehiculo</label>
                    <select name="tipoV" id="tipoV" class="form-control">
                    <option value="Motocicleta">Motocicleta </option>
                    <option value="Motocarro">Motocarro</option>
                    <option value="Cuatrimoto">Cuatrimoto</option>
                    <option value="Automóvil">Automóvil </option>
                    <option value="Campero">Campero </option>
                    <option value="Camioneta">Camioneta </option>
                    <option value="Microbús">Microbús </option>
                    <option value="Bus">Bus</option>
                    <option value="Buseta">Buseta</option>
                    <option value="Camión">Camión</option>
                    <option value="Tractocamión">Tractocamión</option>
                    <option value="Volqueta ">Volqueta</option>
                    </select>
                    <br />

                    <label for="modelo">Modelo</label>
                    <input type="text" name="modelo" id="modelo" class="form-control">
                    <br />

                    <label for="matricula">Matricula</label>
                    <input type="text" name="matricula" id="matricula" class="form-control">
                    <br />

                                      
                    <label for="color">Color</label>
                    <input type="text" name="color" id="color" class="form-control">
                    <br />

                    <label for="cantidad">Cantidad de pasajeros</label>
                    <input type="text" name="cantidad" id="cantidad" class="form-control">
                    <br />

                    <label for="imagen">Cargar imagen</label>
                    <input type="file" name="imagen_usuario" id="imagen_usuario" class="form-control">
                    <span id="imagen_subida"></span><br />                                                            

                    
                </div>

                <div class="modal-footer">
                    <input type="hidden" name="id_usuario" id="id_usuario">
                    <input type="hidden" name="operacion" id="operacion">  
                    <!-- Botones para facilitar la navegacion en el formulario! -->           
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Crear">
                    <a type="submit" class="btn btn-success" href="crud.php">Regresar</a> 
                </div>
            </div>
        </form>
      </div>     
  </div>
</div>

    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript"> //Script para lanzar un formulario y poder crear los nuevos vehiculos
        $(document).ready(function(){
            $("#botonCrear").click(function(){
                $("#formulario")[0].reset();
                $(".modal-title").text("Ingresar Información de Vehículo");
                $("#action").val("Crear");
                $("#operacion").val("Crear");
                $("#imagen_subida").html("");
            });
            
            var dataTable = $('#datos_usuario').DataTable({
                "processing":true,
                "serverSide":true,
                "order":[],
                "ajax":{
                    url: "filas.php",
                    type: "POST"
                },
                "columnsDefs":[
                    {
                    "targets":[0, 3],
                    "orderable":false,
                    },
                ], //Informacion a mostrar en la tabla, detalles para una facil identificacion de los valores
                "language": {
                "decimal": "",
                "emptyTable": "No hay Información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
                "infoEmpty": "Mostrando 0 of 0 Registros",
                "infoFiltered": "(_MAX_ Registro(s) encontrado(s)  )",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Registros",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar por placa:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
            });
            
            //Registrar informacion (El siguiente bloque para realizar el registro de la informacion de un vehiculo nuevo)
            $(document).on('submit', '#formulario', function(event){
            event.preventDefault();
            var tipoV = $('#tipoV').val();
            var modelo = $('#modelo').val();
            var matricula = $('#matricula').val();                       
            var color = $('#color').val();
            var cantidad = $('#cantidad').val();
            var extension = $('#imagen_usuario').val().split('.').pop().toLowerCase();
            if(extension != '')
            {
                if(jQuery.inArray(extension, ['png','jpg','jpeg']) == -1){
                    alert("Error en formato de imagen"); //Mostramos una alerta en caso de que el archivo no sea la extension requerida
                    $('#imagen_usuario').val('');
                    return false;
                }
            }	
		    if(tipoV != '' && modelo != '' && matricula != '' && color != '')
                {
                    $.ajax({
                        url:"GuardarInfo.php",
                        method:'POST',
                        data:new FormData(this),
                        contentType:false,
                        processData:false,
                        success:function(data)
                        {
                            alert(data);
                            $('#formulario')[0].reset();
                            $('#modalUsuario').modal('hide');
                            dataTable.ajax.reload();
                        }
                    });
                }
                else
                {
                    alert("Faltan casillas por rellenar");
                }
	        });

            //Editar informacion (En este bloque tenemos la funcion para editar la informacion que se encuentra en la base de datos)
            $(document).on('click', '.editar', function(){		
            var id_usuario = $(this).attr("id");		
            $.ajax({
                url:"informacion.php",
                method:"POST",
                data:{id_usuario:id_usuario},
                dataType:"json",
                success:function(data)
                    {
                        				
                        $('#modalUsuario').modal('show');
                        $('#tipoV').val(data.tipoV);
                        $('#modelo').val(data.modelo);
                        $('#matricula').val(data.matricula);                                               
                        $('#color').val(data.color);
                        $('#cantidad').val(data.cantidad);
                        $('#imagen_subida').html(data.imagen_usuario);                        
                        $('.modal-title').text("Editar Información de Vehículo");
                        $('#id_usuario').val(id_usuario);                        
                        $('#action').val("Editar");
                        $('#operacion').val("Editar");
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    }
                })
	        });

            //Eliminar informacion (A traves de las siguientes instrucciones procedemos a eliminar la informacion que se encuentre en la base de datos teniendo en cuenta el numero de id)
            $(document).on('click', '.borrar', function(){
                var id_usuario = $(this).attr("id");
                if(confirm("Esta seguro de eliminar el registro N° " + id_usuario)) //Le pedimos confirmacion al usuario si desea eliminar el registro
                {
                    $.ajax({
                        url:"borrar.php",
                        method:"POST",
                        data:{id_usuario:id_usuario},
                        success:function(data)
                        {
                            alert(data);
                            dataTable.ajax.reload();
                        }
                    });
                }
                else
                {
                    return false;	
                }
            });

        });         
    </script>
    
  </body>
</html>