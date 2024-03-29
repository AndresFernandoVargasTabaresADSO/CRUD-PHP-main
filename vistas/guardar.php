<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="../script/main.js" defer></script>

</head>

<body>
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-header text-center fs-4">
                        Guardar datos
                    </div>
                    <div class="card-body">
                        <form action="../controller/controlador.php" method="post" id="form">
                            <div class="form-group mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nombre" class="form-label">Apellidos</label>
                                <input type="text" name="apellido" id="apellido" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nombre" class="form-label">Email</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nombre" class="form-label">Cedula</label>
                                <input type="text" name="cedula" id="cedula" class="form-control">
                            </div>
                            <div class="text-center">
                                <button class="btn btn-info w-100 " id="enviar">Enviar</button>
                            </div>
                            <div>
                                <a class="btn btn-info w-100 mt-4" href="listarEliminar.php">Editar</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>