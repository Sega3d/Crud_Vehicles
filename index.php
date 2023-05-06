<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="vh-100 d-flex justify-content-center align-items-center">
          
            <div class="col-md-4 p-5 shadow-sm border rounded-5 border-primary">
              <!-- Bloque de creacion de formulario el cual conecta a la base de datos para autenticar el usuario! -->
<P align="center"><b> Diseñado por:</b> Segundo Arboleda <br><b> Documento:</b> 1087113476 <br>Documentation in software development projects</P> 
                <h2 class="text-center mb-4 text-primary"><b>Iniciar sesión</b></h2>
                <form action="validar.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Usuario</label>
                        <input type="text" class="form-control border border-primary" placeholder="Ingrese Usuario" name="usuario" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control border border-primary" placeholder="Ingrese Contraseña" name="password" required="required">
                    </div>
                    
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Ingresar</button>
                        
                    </div>
                </form>
                <div class="mt-3">
                 
                </div>
            </div>
        </div>
        
    </body>

</html>