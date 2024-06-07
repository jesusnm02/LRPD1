<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrarcliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style/datos.css">
</head>
<body style="background-image: url('images/ssa.jpg'); background-size: cover;">
<?php
if(isset($_POST["btnregistrar"])){
    require_once("Controllers/PasajerosController.php");
    $controlador=new PasajerosController();
    $controlador->grabar();
}
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="formulario.php">REGISTRAR</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
<form action="" method="POST" class="formulario">
    <h3>REALIZAR BOLETA</h3>
    <div>
        <h4>DNI</h4>
        <input type="dni" name="dni" require/>
    </div>
    <div>
        <h4>Nombre</h4>
        <input type="nombre" name="nombre" require/>
    </div>
    <div>
        <h4>Apellidos</h4>
        <input type="apellidos" name="apellidos" require/>
    </div>
    <div>
        <h4>Origen</h4>
        <input type="origen" name="origen" require/>
    </div>
    <div>
        <h4>Destino</h4>
        <input type="destino" name="destino" require/>
    </div>
    <p><input type="submit" name="btnregistrar"/></p>
</form>
</body>
</html>