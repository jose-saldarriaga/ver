<?php
include('db.php');

if (isset($_POST['btn1'])) {
  $usuario = $_POST['usuario'];
  $nombre =$_POST['nombre'];
  $fecha_nacimiento = $_POST['fechanacimiento'];
  $email = $_POST['email'];
  $contraseña = $_POST['contraseña'];
  echo $usuario;
  echo $nombre;
  echo $fechanacimiento;
  echo $email;
  echo $contraseña;
  $query = "INSERT INTO usuarios VALUES ('$usuario', '$nombre', '$fecha_nacimiento', '$email', '$contraseña')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
        $_SESSION['message'] = 'usuario no se registró';
        header('Location: registrar.php');
    }else{
        $_SESSION['message'] = 'usuario registrado con éxito.';
        header('Location: index.php');}

}

?>