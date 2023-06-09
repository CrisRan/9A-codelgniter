<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario  Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="container">
    <main class="row mt-5">
        
        <section class="col-6 offset-3">
            <!-- CARD -->
            <form class="card">
                <!-- CARD TITLE -->
                <section class="card-title text-center mt-3 mx-5 p-1 rounded-pill bg-primary text-light">
                    <h2>Formulario Alumno</h2>
                </section>
                
                <!--  CARD BODY -->
                <section class="card-body">
                    <!-- Input Nombre -->
                    <div class="mb-3">
                        <label for="txtNombre">Nombre</label>
                        <input class="form-control" type="text" id="txtNombre" name="txtNombre" placeholder="Ingrese su nombre" required>
                    </div>
                    <!-- Inputs A. Paterno y  A. Materno-->
                    <div class="row">
                        <!-- Input A. Paterno -->
                        <div class="col-6 mb-3">
                            <label for="txtAPaterno">Apellido Paterno</label>
                            <input class="form-control" type="text" id="txtAPaterno" name="txtAPaterno" placeholder="Ingrese su apellido paterno" required>
                        </div>
                        <!-- Input A. Materno -->
                        <div class="col-6 mb-3">
                            <label for="txtAMaterno">Apellido Materno</label>
                            <input class="form-control" type="text" id="txtAMaterno" name="txtAMaterno" placeholder="Ingrese su apellido materno" required>
                        </div>
                    </div>
                    <!-- Input Fecha de nacimiento -->
                    <div class="mb-3">
                        <label for="txtFechaNacimiento">Fecha de nacimiento</label>
                        <input class="form-control" type="date" id="txtFechaNacimiento" name="txtFechaNacimiento" placeholder="Ingrese su fecha de nacimiento" required>
                    </div>
                    <!-- Input Correo Electronico -->
                    <div class="mb-3">
                        <label for="txtEmail">Correo Electronico</label>
                        <input class="form-control" type="email" id="txtEmail" name="txtEmail" placeholder="email@example.com" required>
                    </div>
                    <!-- Input Telefonoo -->
                    <div class="mb-3">
                        <label for="txtTelefono">Telefono</label>
                        <input class="form-control" type="tel" id="txtTelefono" name="txtTelefono" placeholder="Ingrese su numero telefonico" required>
                    </div>
                    
                </section>
                <!--  CARD FOOTER -->
                <section class="card-footer">
                    <button class="btn btn-primary float-end" type="submit">Registrar</button>                    
                </section>
            </form>
        </section>

    </main>

</body>
</html>