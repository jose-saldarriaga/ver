<?php
include('db.php');
?>
<html>
<title>login</title>
<link rel="stylesheet" href="style.css">
<body>
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-primary" role="alert">
                <strong><?= $_SESSION['message']?></strong>
                </div>
            <?php session_unset(); } ?>
    <form class="formulario" action="consultar.php" method="POST">
        <h1>iniciar secion</h1>
        <div class="contendor">
                <input name="usuario" class="loa" type="text" placeholder="nombre de usuario">
                <br>
                <input name="contraseña" class="loa" type="password" placeholder="contraseña">
                <br>
                <div class="la">
                        <button type="submit" class="btn" name="btn12">iniciar</button>
                    </div>
               <!-- <button name="ingresar" class="btn" type="submit">iniciar</button> -->
               <p class="crear"> si no tienes cuenta creala ahora<a href="registrar.php">crear cuentas</a></p>
        </div>
    </form>
</body>
</html>