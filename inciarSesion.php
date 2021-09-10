
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="css/loginsesion.css">
    

</head>
<body>

    <form class="formulario" action="validar.php" method="POST">
        <div class="contenedor">
                 <h1>Login</h1>
            <div class="input-contenedor">
                    <i class="fas fa-building"></i>
                <input type="text" placeholder="Nombre del Edificio" name="usuario">
            </div>
            <div class="input-contenedor">
                    <i class="fas fa-unlock-alt"></i>
                    <input type="password" placeholder="Ingrese Clave del Edificio" name="clave">
            </div>

            <input type="submit" value="Ingresar" class="button" >
                <p>
                    Al Ingresar al Edificio, Aceptas nuestras condiciones de uso y politias de Privacidad.
                 </p>
        
               

         </div>
    </form>
    
</body>
</html>



