<?php
include("db.php");


if  (isset($_POST['btn12'])) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    echo $usuario;
    echo $contraseña;
    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
    $result = mysqli_query($conn, $query);
    echo $result; 
    echo $query;
    if(!$result) {
        $$_SESSION['message'] = "Error: Usuario y/o contraseña errados";
        header('Location: index.php');
    }else{
        header('Location: lola.html');
        $_SESSION['a']="Bienvenido $usuario";
    }
    
  }
?>