<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
        <?php
            include("db.php");
    ?>
<body>
    <form class="formulario" action="guardar.php" method="POST">
        <h1>formulario de registro</h1>
        <div class="contendor">
                <input name="usuario" class="loa" type="text" placeholder="usuario">
                <br>
                <input name="nombre" class="loa" type="text" placeholder="nombre completo">
                <br>
                <input name="fechanacimiento" class="loa" type="date" placeholder="fecha de nacimiento">
                <br>
                <input name="email" class="loa" type="email" placeholder="coreo electronico">
                <br>
                <input name="contraseña" class="loa" type="password" placeholder="contraseña">
                <br>
               <button name="btn1" class="btn" type="submit">registrar</button>
        </div>
    </form>
</body>
</html>