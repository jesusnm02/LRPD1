<?php
    session_name("upsjb");
    session_start();
    $error = false;

    if(isset($_POST["btnLogin"])){
        $email=$_POST["dni"];
        $psw  =$_POST["password"];
        require_once("Controllers/VendedorController.php");
        $controlador=new VendedorController();
        $dato=$controlador->ValidarVendedor($email,$psw);
        if(count($dato)){
            $_SESSION["login"]="ok";
            $_SESSION["DNI"]=$dato[0]["DNI"];
            $_SESSION["password"]=$dato[0]["password"];

            header("Location: datos.php?dni=" . urlencode($dato[0]["DNI"]));

            exit();
        }else{
          $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style/body.css">
</head>
<body>
    <form action="" method="POST" class="container_usuario">
        <h2>LOGIN</h2>
        <input type="number" name="dni" placeholder="Ingrese DNI" require/>
        <input type="password" name="password" placeholder="Ingrese contraseña" require/>
        <p><input type="submit" name="btnLogin"/></p>

        <i class="bi bi-person-circle"></i>
    </form>
</body>
</html>